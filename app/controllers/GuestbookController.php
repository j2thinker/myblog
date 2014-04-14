<?php

class GuestbookController extends BaseController
{
    private   $pagesize = 20 ; 
    //Message List
    public function getList(){
        $messages = GuestBook::leftJoin('users','messages.uid' ,'=' ,'users.id')
                    ->orderBy('messages.created_at','Desc')->paginate(10);
        $this->layout->content = View::make('guestbook.list')->with('message_list' , $messages);
    }

    //leave a message
    public function postMessage(){
        if(!Auth::check()){
            return Redirect::to('guestbook/list')->withErrors(array('nologin'=>'请登录后再进行此操作'))->withInput();
        } 
        //validation
        $rules = array(
            'message' => 'required|min:10' 
        );
        $validator = Validator::make(Input::all() , $rules);
        if($validator->fails()){
            return Redirect::to('guestbook/list')->withErrors($validator)->withInput();
        }
        $msgobj = new GuestBook ;
        $msgobj->uid    = Auth::user()->id;
        $msgobj->message= Input::get('message');
        $msgobj->ip     = Input::getClientIp();
        $res = $msgobj->save();
        if($res){
            
        }
        return Redirect::to('guestbook/list');
    }
}
