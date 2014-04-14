<?php
class FunnyController extends BaseController
{
    public function getList(){
        $funny_list = Funny::leftJoin('users' , 'funnys.uid' ,'=' , 'users.id')
                                    ->orderBy('funnys.created_at' , 'desc')->paginate(10);
        $this->layout->content = View::make('funny.list', compact('funny_list'));
    }
    public function postAdd(){
        $rules = array(
            'title'=>'required|min:5',
            'happentime' => 'date',
            'funny'      =>'required|min:10',
            'conclusion'=>'required'
        );
        $input = Input::all();
        if(!empty($input['happentime'])){
            $input['happentime'] = date('Y-m-d');
        }
        $validator = Validator::make($input , $rules);
        if($validator->fails()){
            return Redirect::to('funny/list')->withErrors($validator)->withInput();
        }
        $ofunny = new Funny ;
        $ofunny->uid        = Auth::user()->id ;
        $ofunny->title      = $input['title'] ;
        $ofunny->happentime = $input['happentime'] ;
        $ofunny->joke       = $input['funny'] ;
        $ofunny->conclusion = $input['conclusion'] ;
        $res    = $ofunny->save();
        if(!$res) {
            
        }
        return Redirect::to('funny/list') ;
    }

    public function getDetail(){
        $fid =(int)Input::get('fid');
        if(!$fid) {
            return Redirect::to('funny/list')->withErrors(array('err_param'=>'参数错误'));
        }
        $detail = Funny::find($fid);
        if(is_null($detail)){
            return Redirect::to('funny/list')->withErrors(array('err_param'=>'参数错误'));
        }
        $this->layout->content = View::make('funny.detail',compact('detail'));
    }
}
