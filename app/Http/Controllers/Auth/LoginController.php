<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new User;
    }

    public function login(Request $request)
    {
        // Check validation
        $this->validate($request, [
            'tel' => 'required',
        ]);

        // Get user record
        $user = User::where('tel', $request->get('tel'))->first();



        // Check Condition Mobile No. Found or Not
        if(!$user) {
// Get user record
        $user = User::where('email', $request->get('tel'))->first();
 if(!$user) {

            return redirect()->back()->with(['error'=>'Credential Not Found in our database']);
            }
        }

        // Set Auth Details
        \Auth::login($user);

        // Redirect home page
        return redirect()->route('welcome');
    }
}
