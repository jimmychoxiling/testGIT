<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
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
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function getLogin(){

        return view('public.login');
    }


    public function postLogin(Request $request){
        $this->validate($request, [$this->loginUsername() => 'required', 'password'=>'required']);

        //if the class is using the ThrottlesLogins trait, we can automatically throttle
        //the login attempts for this application. we'll key this by the username and
        //the IP address of the client making these requests into this application.

        $throttles = $this->isUsingThrottlesLoginsTrait();

        if($throttles && $this->hasTooManyLoginAttempts($request)){
            //return $this->sendLockoutResponse($request);
            return 'Lockout Response';
        }

        $credentials = $this->handleUserWasAuthenticated($request, $throttles);

        if(Auth::attempt($credentials, $request->has('remember'))){
            //return $this->handleUserWasAuthenticated($request, $throttles);
            return 'Return remember';
        }
        //if the login attempt was unsuccessful we will increment the number of attempts
        //to login and redirect the user back to the login form. Of course, when this
        //user surpasses their maximum number of attempts they will get locked out.

        if($throttles){
            //$this->incrementLoginAttempts($request);
            return 'herer';
        }

        if(method_exists($this, '/home')){
            //return $this->authenticated($request, Auth::user());
            return 'home';
        }

        //return redirect()->intended($this->redirectPath());
        return 'undecided';

    }

    protected function getCredentials(Request $request){
        //return $request->only($this->loginUsername(), 'password');
        return 'Return Password';
    }

    protected function getFailedLoginMessage(){
        //return Lang::has('auth.failed') ? Lang::get('auth.fail') : 'These credentials do not match our records.';
        return 'Login fail';
    }

    public function getLogout(){
        Auth::logout();
        return 'Logout';
        //return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    public function loginUsername(){
        //return property_exists($this, 'username') ? $this->username : 'email';
        return 'User name';
    }

    protected function isUsingThrottlesLoginsTrait(){
        /*return in_array(
            ThrottlesLogins::class, class_uses_recursive(get_class($this))
        );*/
        return 'use login trait';
    }
}
