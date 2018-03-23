<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
    public function postRegister(Request $request){
      ///验证用户输入数据
      $postData = $request->all();
      $email=$postData['email'];

      $password=$postData['password'];
      $user=$request->user();
      $data=array(
          'currentUser' => $user,
      );
      $validator = Validator::make($postData, [
          'email' => 'required|email|max:255|unique:users',
      ]);

      if($validator->fails()) {
          //array_add($data,'message','email已经被注册或者密码不符合规范');
          return response()->json(array('message'=>'error'));
      }

      ///创建用户
      $createUser = new User;
      $createUser->email = $email;
      $createUser->password= bcrypt($password);
      //$createUser->key = bcrypt($email);
      //$createUser->referrerkey= $referrerkey;
      $createUser->save();
      Auth::login($createUser);
      $data=array(
          'currentUser' => $createUser,
          //'captchaurl' => Captcha::src(),
          'message' => 'ok',
      );
      return view('auth.login')->with($data);
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
