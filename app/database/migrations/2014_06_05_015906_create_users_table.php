<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //Note that the users table is defined as the authentication
        //table set in auth.php. The users table maps to User in the model
		Schema::create('users', function(Blueprint $table)
		{
			//Create a Primary Indexed Key:
            $table->increments('id');
            
            //Simply create strings for firstname
            //and the last name with a limit
            $table->string('firstName',50);
            $table->string('lastName',50);

            //This will be used to specify the password
            //and logins for the application. Unique
            //is automatically indexed
            $table->string('email')->unique();
            $table->string('password');

            $table->boolean('isAdmin')->default(false);

            //Need this to have remembering logged in user
            $table->string('remember_token',100)->nullable();

            //Specify that we want to have soft deletes
            //That is we will never delete data only
            //apply a timestamp when the data is 'deleted'
            $table->softDeletes();

            //We want to track the created_at and updated_at
            //this is done with one method call. Remember,
            //this timestamp not equivalent to a MYSQL timestamp
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
