<?php
class Website extends Eloquent
{
    protected $table="website";

    protected $fillable = array('action' ,'action_url','open_status');
}
