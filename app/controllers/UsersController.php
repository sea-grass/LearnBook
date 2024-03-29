<?php

class UsersController extends \BaseController {

    //Specifies the general layout file that should be used
    protected $layout = "layouts.main";

    public function __construct() {
    }

    /**
     * 
     */
    public function register() {
        //users.register tells laravel to go to users/register
        $this->layout->content = View::make('users.register');
    }

    /**
     * 
     */
    public function login() {
        //Looks under views/users/ for login.blade.php
        $this->layout->content = View::make('users.login');
    }

    /**
     * 
     */
    public function logout() {
        Auth::logout();
        return Redirect::to('user/login')->with("message","You are logged out");
    }

    /**
     * This method will check if the user has logged in
     * correctly. If they have not, then they will be redirected
     * to the register page
     */
    public function signin() {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('user/dashboard')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('user/login')
            ->with('message', 'Your username/password combination was incorrect')
            ->withInput();
        } 
    }

    public function dashboard() {

        $this->layout->content = View::make('users.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createUser()
    {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->passes()) {

            //A user should be created with their profile,
            //otherwise there is an issue, use a transaction
            DB::transaction(function() {
                //First create a new user and save this user
                //to the database table.
                $user = new User;
                $user->firstname = Input::get('firstname');
                $user->lastname = Input::get('lastname');
                $user->email = Input::get('email');
                $user->password = Hash::make(Input::get('password'));
                $user->save();

                //Next ceate a new profile for the user,
                //associate the profile's user with the user
                //created above.
                $profile = new Profile;
                $profile->user()->associate($user);
                $profile->save();
            });

            return Redirect::to('user/login')->with('message', 'Thanks for registering!');
        } else {
            return Redirect::to('user/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }
}
