<?php

class PriceController extends BaseController
{
    public function getList(){
        $this->layout->content = View::make('price.list');
    }
    public function getIphone(){
        $this->layout->content = View::make('price.iphone');
    }

    public function getIpad(){
        $this->layout->content = View::make('price.ipad');
    }

    public function getMacbookpro(){
        $this->layout->content = View::make('price.macbookpro');
    }

    public function getMacbookair(){
        $this->layout->content = View::make('price.macbookair');
    }
}
