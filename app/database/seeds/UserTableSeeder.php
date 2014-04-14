<?php
class UserTableSeeder extends Seeder{
    public function run(){
            User::truncate();
            $pass = Hash::make('12345');
            User::create([
                'name' => 'Zaifeng',
                'email' => 'zhzaifeng@sina.com',
                'pass' => $pass
           ]);

   }
}
?>
