<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;
use App\Post;
use App\UserMeta;
use Illuminate\View\View;
use Mockery\Exception;
use Validator;

use Illuminate\Support\Facades\Auth;
use Input;
use Hash;
use Redirect;
use App\Http\Requests\UserForm;
use App\Http\Requests\UserUpdateForm;
use App\Http\Requests\FrontRegister;
use Mail;
use App\Mail\UserRegistration;

class ApiContoller extends Controller
{
    public function ApiLogin(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);



        if (!filter_var($request->get('email'), FILTER_VALIDATE_EMAIL) === false) {

            $data=array(
                'email'=>$request->get('email'),
                'password'=>$request->get('password')
            );
        } else {
            $data=array(
                'username'=>$request->get('email'),
                'password'=>$request->get('password')
            );
        }

        if(Auth::attempt($data))
        {
            $id = Auth::user()->id;
            $user = User::find($id);
            $userrole = $user->userrole;
            return ['status'=>true,'user'=>$user];
        }
        else
        {
            return ['status'=>false,'message'=>'Username or password is wrong'];

        }
    }

    public function GetBlogList(){
        $posts = Post::All();
        if($posts){
            return ['status'=>true,'post'=>$posts];
        } else {
            return ['status'=>false,'message'=>"No Blog"];
        }

    }

    public function GetBlogDetail($slug){
        $post = Post::where('slug',$slug)->first();
        if($post){
            return ['status'=>true,'post'=>$post];
        } else {
            return ['status'=>false,'message'=>"No Blog"];
        }
    }

}
