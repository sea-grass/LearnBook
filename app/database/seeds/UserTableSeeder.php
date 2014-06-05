<?php

class UserTableSeeder extends Seeder{
    public function run(){

        //A user that I know:
        $mainUser = array(
            'firstName'=>'Mad',
            'lastName'=>'Max',
            'email'=>'mad.max@bike.com',
            'password'=>Hash::make('admin123')
        );

        //Let's add a real user to the system that
        //we can use to login and test with:
        User::create($mainUser);
    }
}
?>