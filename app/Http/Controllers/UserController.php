<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\UserMeta;
use Illuminate\View\View;
use Mockery\Exception;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use Hash;
use Redirect;
use App\Http\Requests\UserForm;
use App\Http\Requests\UserUpdateForm;
use App\Http\Requests\FrontRegister;
use Mail;
use App\Mail\UserRegistration;
class UserController extends Controller
{
    public function getLogin(){
        return view('admin-template.login');
    }

    public function postLogin(Request $request){
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
            if($userrole == 10){
                return redirect::intended('/admin/dashboard');
            } else {
                return redirect::intended('/');
            }
        }
        else
        {
            return redirect('admin/login')->with('message', 'Username or password is wrong')->with('class', 'alert-danger');
        }
    }

    public function checkUserLogin()
    {
        if (Auth::check()) {
            return redirect::intended('/admin/dashboard');
        } else {
            return redirect::intended('/admin/login');
        }
    }

    public function adminSignOut() {

        Auth::logout();
        return redirect::intended('/admin/login');
    }

    public function frontSignOut() {

        Auth::logout();
        return redirect::intended('/');
    }


    public function getUserAdd(){
        return view("admin-template.user-add");
    }

    public function getUserProfile($id){
            $user = User::find($id);
           // $usermeta = User::find($id)->usermeta;
            return view("admin-template.user-profile")->with('user',$user);
    }

    public function getUserList(){
        $users = User::All();
       return view("admin-template.users",['users'=>$users]);
       // return view("admin-template.users")->with("users",$users);
    }

    public function deleteUserProfile($id){
        $user = User::find($id);
        $user->delete();
        return redirect::intended('/admin/users');
    }

    public function postUserAdd(UserForm $request)
    {

        try{
            $data = $request->all();
            $user = User::create($data);
            $id = $user->id;


            $data['user_id'] = $id;
            if(!empty($request->file('profilepicture'))) {
                $data['profilepicture'] = $request->file('profilepicture')->store("userprofile");
            }

            UserMeta::create($data);

             //\App\UserMeta::addData($request,$id);

            return Redirect::to('admin/users')->with('message', 'Success: user add successfully')->with('class','success');
        } catch (Exception $e){
            return Redirect::to('admin/user/add')->with('message', 'The following errors occurred')->with('class','error')->withErrors($e->getMessage())->withInput();
        }
    }

    public function editUserProfile(UserUpdateForm $request,$id){

         try{

                \App\UserMeta::updateData($request,$id);

               return Redirect::to('admin/profile/'.$id.'/edit')->with('message', 'Success: profile saved')->with('class','success');
           } catch (Exception $e){
               return Redirect::to('admin/profile/'.$id.'/edit')->with('message', 'The following errors occurred')->with('class','error')->withErrors($e->getMessage())->withInput();
           }

    }

    public function getFrontLogin()
    {
        return view('front.login');
    }

    public function postFrontLogin(Request $request)
    {

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
            return redirect::intended('/');
        }
        else
        {
            return redirect('/login')->with('message', 'Username or password is wrong')->with('class', 'alert-danger');
        }
    }

    public function getRegister(){
        $data = ['email' => 'Ravi@gadhiya.com'];
        Mail::to("ravi.gadhiya@gatewaytechnolabs.com")->send(new UserRegistration($data));
        return view('front.register');

    }

    public function postRegister(FrontRegister $request){
        try{
            $data = $request->all();
            $user = User::create($data);
            $id = $user->id;


            $data['user_id'] = $id;
            if(!empty($request->file('profilepicture'))) {
                $data['profilepicture'] = $request->file('profilepicture')->store("userprofile");
            }

            UserMeta::create($data);

            //\App\UserMeta::addData($request,$id);

            return Redirect::to('/register')->with('message', 'Success: registration successfully done')->with('class','success');
        } catch (Exception $e){
            return Redirect::to('/register')->with('message', 'The following errors occurred')->with('class','error')->withErrors($e->getMessage())->withInput();
        }
    }

}
