<?php
/**
 * About Controller 
 *
 * @desc record something like me and so on
 */
class AboutController extends BaseController
{
    public function getMe(){
        $this->layout->content = View::make('about.me');
    }
}
