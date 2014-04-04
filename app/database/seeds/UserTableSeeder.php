<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->first_name = 'Karina';
        $user->last_name = 'Montes';
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->email = 'hello@codeup.com';
        $user->password = 'user!';
        $user->first_name = 'Leesly';
        $user->last_name = 'Vielma';
        $user->role_id = 2;
        $user->save();
    }

}

?>