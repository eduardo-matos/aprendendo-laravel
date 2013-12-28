<?php

use Illuminate\Database\Migrations\Migration;

class CriarPostsEAtualizarUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function ($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('body');
			$table->string('author');
			$table->timestamps();
		});

		Schema::table('users', function ($table)
		{
			$table->string('username')->unique()->default('');
			$table->string('password')->default('');
		});

		DB::table('users')->insert([
			'name' => 'Admin',
			'username' => 'admin',
			'email' => 'admin@admin.com',
			'created_at' => '2013-12-23 10:12:25',
			'updated_at' => '2013-12-23 10:12:25',
			'password' => Hash::make('admin'),
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');

		Schema::table('users', function ($table)
		{
			$table->dropColumn('username', 'password');
		});
	}

}