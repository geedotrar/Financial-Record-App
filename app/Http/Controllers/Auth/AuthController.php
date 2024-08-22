<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'username' => 'required|string|unique:users,username|min:8',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

   public function login(Request $request)
   {
    $request->validate([
        'username'=>'required|string',
        'password'=>'required|string'
    ]);

    if(Auth::attempt([
        'username'=>$request->username,
        'password'=>$request->password
        ])) {
        return redirect()->route('home');
    }else{
        return back()->withErrors([
            'message' => 'Username Or Password Wrong'
        ]);
    }
   }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
