<?php

class BlogController extends BaseController
{
    public function getList(){
        $this->layout->content = View::make('blog.list');
    }
}
