<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\Live\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/live/index/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('live.login.login');
    }

    public function authenticated(Request $request, Model $user)
    {
        if (in_array($user->status, [User::STATUS_DELETE,User::STATUS_INACTIVE]))
        {
            $result = ['msg' => '帐号被禁用或删除', 'status' => 2];

            $this->guard()->logout();

            $request->session()->invalidate();

        }else{
            $result = ['msg' => '登录成功', 'status' => 1, 'src' => $this->redirectTo];
        }

        return $result;
    }

    public function username()
    {
        return 'username';
    }

    public function loggedOut()
    {
        return redirect(route('live.logout'));
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return ['status'=>2,'msg' => trans('auth.failed')];
    }

}
