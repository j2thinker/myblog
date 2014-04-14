<?php
/**
 *
 *
 */
 class FriendLink extends Eloquent
 {
    protected $table = "friend_links" ;

    protected $fillable = array('link_name','link_desc','link_url','weight','status');
 }
