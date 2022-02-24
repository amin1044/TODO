<?php

namespace App\Http\Controllers\Auth;

use App\Events\SendSmsVerification;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return View
     */
    public function register(Request $request)
    {
        ($this->validator($request->all()))->validate();

        $user = $this->create($request->all());
        $user->assignRole('User');
        event(new SendSmsVerification($user));
        return $request->wantsJson()
            ? new Response('', 201)
            : view('FrontEnd.Home.index');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'mobile' => ['required', 'max:11', 'min:11', 'unique:users'],
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => 'required|'
        ],
            [
                'mobile.required' => 'شماره تماس اجباری است',
                'name.required' => 'نام کاربری اجباری است',
                'password.required' => 'رمزعبور اجباری است',
                'email.email' => 'ایمیل درست وارد نشده است',
                'mobile.unique' => 'شماره تماس تکراری است',
                'mobile.max' => 'طول شماره تماس بیش تر از 11 رقم است',
                'mobile.min' => 'طول شماره تماس کم تر از 11 رقم است',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'mobile' => $data['mobile'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function verify(Request $request)
    {
        $rules = [
            'mobile' => 'required|max:11|min:11',
            'trans_code' => 'required|size:5'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return new Response('کد اعتبارسنجی یا شماره تماس نادرست است', 201);
        }
        $userInfo = User::where('mobile', $request->mobile)->where('trans_code', $request->trans_code)->first();
        if ($userInfo) {
            $userInfo->update([
                'trans_code' => null,
                'verified' => 1
            ]);
            return $request->wantsJson()
                ? new Response('', 201)
                : redirect()->route('login');
        } else {
            session()->flash('errors', 'کد اعتبارسنجی نادرست است');
            return back();
        }
    }
}
