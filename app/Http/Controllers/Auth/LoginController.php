<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($request, $user)
    {
        if ($user->role_id == 1 && $user->enabled == 1) {
            $this->redirectTo = route('admin.dashboard.index');
        } elseif($user->role_id == 2 && $user->enabled == 1) {
            $this->redirectTo = route('directeur.dashboard.index');
        } elseif ($user->role_id == 3 && $user->enabled == 1) {
            $this->redirectTo = route('responsable.dashboard.index');
        } elseif($user->role_id == 4 && $user->enabled == 1) {
            $this->redirectTo = route('gestionnaire.dashboard.index');
        } elseif($user->role_id == 5 && $user->enabled == 1) {
            $this->redirectTo = route('user.dashboard.index');
        }
    }

}
