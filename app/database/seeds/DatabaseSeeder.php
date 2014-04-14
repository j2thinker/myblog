<?php

class DatabaseSeeder extends Seeder {

        public function run()
        {
                $this->call('UserTableSeeder');

                $this->command->info('User table seeded!');
        }

}

