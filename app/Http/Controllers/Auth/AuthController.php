<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin(Request $request){
        $user=$request->user();
        $data=array(
            'currentUser' => $user,
            //'captchaurl' => Captcha::src(),
        );
        return view('auth/login')->with($data);
    }


    public function getEmailExists(Request $request){
        $email= $request->get('email');
        $user=User::where('email',$email)->First();

        if($user){
            if(!$user->activated){
                $expired=strtotime(date("yesterday"))-strtotime($user->created_at);
                if($expired>0){
                    //过期未激活，删除账号
                    $user->delete();
                    return response()->json(['exists' => false]);
                }
            }
            return response()->json(['exists' => true ]);
        }else{
            return response()->json(['exists' => false]);
        }
    }
    

}
