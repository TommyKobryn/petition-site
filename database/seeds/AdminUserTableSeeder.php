<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user -> new AdminUser();
      $user->name = "Tom Doe";
      $user->email = "tom@test.com";
      $user->password = crypt("secret", "");
      $user->save();
    }
}
