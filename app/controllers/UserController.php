<?php
/**
 * User Controller 
 *
 * @desc include user actions such as login,signup and so on
 * @author zaifeng
 */
 class UserController extends BaseController {
    public function getHome(){
        $this->layout->content =  View::make('user.home');
    }

    //show login
    public function getLogin(){
        if(Auth::check()){
            return Redirect::to('user/home');
        }
        $this->layout->content = View::make('user.login');
    }

    //login action
    public function postLogin(){
        $userdata = array(
            'name' => Input::get('username'),
            'password' => Input::get('userpass')
        );
        $rules = array(
            'username' => 'required',
            'userpass' => 'required'
        );
        $messages = array(
            'username.required' => 'User Name needed!',
            'userpass.required' => 'Password needed!'
        );

        $validator = Validator::make(Input::all() , $rules , $messages);
        if($validator->fails()){
            return Redirect::to('user/login')->withErrors($validator)->withInput(Input::except('userpass'));
        }
        if(Auth::attempt($userdata)){
            return Redirect::to('user/home');
        } else {
            $error = array('invaliduser' => 'Error username or password');
            return Redirect::to('user/login')->withErrors($error)->withInput(Input::except('userpass'));
        }
    }

    // logout website
    public function getLogout(){
        Auth::logout();
        return Redirect::to('user/login');
    }

    /**
     * Sign up a new user
     */
    public function getSignup(){
        $this->layout->content = View::make('user.signup');
    }

    /**
     * Sign Up action
     *
     */
    public function postSignup(){
        $rules = array(
            'username'=>'required|min:5',
            'email'=> 'required|email',
            'userpass'=>'required|min:6|confirmed',
            'userpass_conformation'=>'required'
        );
        $validator = Validator::make(Input::all() , $rules);
        if($validator->fails()){
            return Redirect::to('user/signup')->withErrors($validator)->withInput(Input::except('userpass','reuserpass'));
        }
        $user = new User ;
        //check if email exists
        $db_user    = User::where('email','=' ,Input::get('email'))->first();
        if(!empty($db_user)){
            $error = array('existuser'=>'email had registered');
            return Redirect::to('user/signup')->withError($error)->withInput(Input::except('userpass','reuserpass'));
        }
        $user->name = Input::get('username');
        $user->email= Input::get('email');
        $user->pass = Hash::make(Input::get('userpass'));
        $user->user_type = 1 ;
        $res = $user->save();
        if($res){
            $userdata = array('name'=>Input::get('username'),'password'=>Input::get('userpass'));
            Auth::attempt($userdata);
            return Redirect::to('user/home');
        } else {
            $this->layout->content = "Sign Up Failed please contact with the administrator";
        }
    }
 }
