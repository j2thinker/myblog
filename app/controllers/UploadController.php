<?php
class UploadController extends BaseController
{
    private $img_dist = './upfile/img/';
    public function postImage(){
        if(!Input::hasFile('imgFile')){
           return Response::json(array('error'=>1 ,'message' => 'no image upload')); 
        }
        $file = Input::file('imgFile');
        $new_name = substr(sha1(time()),0 ,10).'.'. Input::file('imgFile')->getClientOriginalExtension();
        Input::file('imgFile')->move($this->img_dist, $new_name) ;
        return Response::json(array('error'=> 0 , 'url'=> '/upfile/img/'."$new_name"));
    }

    public function postTxt(){
        
    }

    public function getTest(){
        $this->layout->content = View::make('upload.test') ;
    }
}
?>
