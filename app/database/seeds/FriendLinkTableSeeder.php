<?php
class FriendLinkTableSeeder extends Seeder
{
    public function run(){
        FriendLink::truncate();
        FriendLink::create(array(
            'link_name' => '鹏飞的博客',
            'link_desc' => '新浪同事',
            'link_url' => 'http://phpfei.sinaapp.com',
            'weight' => '100',
            'status' => '1',
        ));
        FriendLink::create(array(
            'link_name' => '红军的博客',
            'link_desc' => '新浪同事',
            'link_url' => 'http://phpfei.sinaapp.com',
            'weight' => '100',
            'status' => '1',
        ));
        FriendLink::create(array(
            'link_name' => '淘宝搜索技术博客',
            'link_desc' => '淘宝博客',
            'link_url' => 'http://www.searchtb.com/',
            'weight' => '90',
            'status' => '1',
        ));
        FriendLink::create(array(
            'link_name' => 'IT技术大博客',
            'link_desc' => '技术大杂烩',
            'link_url' => 'http://blogread.cn/it/',
            'weight' => '90',
            'status' => '1',
        ));
        FriendLink::create(array(
            'link_name' => '淘宝Nginx开发',
            'link_desc' => 'Nginx开发相关',
            'link_url' => 'http://phpfei.sinaapp.com',
            'weight' => '100',
            'status' => '1',
        ));

    }
}
