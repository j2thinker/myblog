<?php
class GuestBook extends Eloquent
{
    protected $table = "messages" ;
    protected $fillable = array('uid','message','ip');
}
