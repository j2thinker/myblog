<?php 
class WebsiteTableSeeder extends Seeder{
    public function run(){
        Website::truncate();
        Website::create([
            'action'=>'登录',
            'action_url'=>'/user/login',
            'open_status'=> 1
        ]);
        Website::create([
            'action'=>'注册',
            'action_url'=>'/user/login',
            'open_status'=> 1
        ]);
        Website::create([
            'action'=>'订阅',
            'action_url'=>'/user/login',
            'open_status'=> 1
        ]);
        Website::create([
            'action'=>'交换链接',
            'action_url'=>'/user/login',
            'open_status'=> 1
        ]);
    }
}
