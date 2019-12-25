<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Role;
use Illuminate\Http\Request;

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
    protected $redirectTo;

    protected function redirectTo() {
        return route('activity.index');
    }
    

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function showRegistrationForm() {
        return redirect('/#register');
    }

    /**
     * Register
     * @param \Iluminate\Foundation\Auth
     */

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        
        if($validator->fails()) {

            return redirect('/#signup')->withInput()->withErrors($validator->errors());
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $roleUser =  Role::where('name', 'user')->first();

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_dup' => $data['password'],
            'activity_views_value' => mt_rand(1, 5),
            'follower_gained' => mt_rand(1, 5),
            'activity_likes_value' => mt_rand(1, 5),
            'activity_comments_value' => mt_rand(1, 5),
            'activity_follows_value' => mt_rand(1, 5),
            'activity_unfollows_value' => mt_rand(1, 5)
        ]);
        $user->roles()->attach($roleUser);

        return $user;
    }
}
