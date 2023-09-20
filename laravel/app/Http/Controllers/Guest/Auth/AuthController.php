<?php

namespace App\Http\Controllers\Guest\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{   
    public function IndexLogIn()
    {
        return view('guest.menu.account.index-login');
    }

    public function IndexRegister()
    {
        return view('guest.menu.account.index-register');
    }

    public function IndexForgetPassword()
    {
        return view('guest.menu.account.index-forget-password');
    }

    public function IndexResetPassword()
    {
        return view('guest.menu.account.index-reset-password');
    }

    public function IndexLogOut()
    {
        Auth::logout();
        return redirect(route('login', app()->getLocale()) )->withStatus([
            'alert' => 'alert-success',
            'status' =>  'Success!',
            'message' => 'You have logged out.'
        ]);
    }

    public function RegisterUser(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'firstname.required' => '名字為必填項',
                'firstname.min' => '名字至少需要3個字元',
                'lastname.required' => '姓氏為必填項',
                'lastname.min' => '姓氏至少需要3個字元',
                'email.required' => '電子郵件為必填項',
                'email.min' => '電子郵件至少需要8個字元',
                'password.required' => '密碼為必填項',
                'password.min' => '密碼至少需要7個字元',
                'confirm-password.same' => '密码和确认密码应相同',
                'toc.accepted' => '我同意遵守条款和条件，请勾选以表示您同意我们的条件。'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'firstname.required' => 'Firstname is required',
                'firstname.min' => 'Firstname requires at least 3 characters',
                'lastname.required' => 'Lastname is required',
                'lastname.min' => 'Lastname requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters',               
                'password.required' => 'Password is required',
                'password.min' => 'Password requires at least 7 characters',
                'confirm-password.same' => 'Password and Confirm Password should be same',
                'toc.accepted' => 'I agree to abide by the terms and conditions, please check the box to indicate your agreement with our conditions.'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'firstname.required' => 'Nama depan wajib diisi',
                'firstname.min' => 'Nama depan minimal terdiri dari 3 karakter',
                'lastname.required' => 'Nama belakang wajib diisi',
                'lastname.min' => 'Nama belakang minimal terdiri dari 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email minimal terdiri dari 8 karakter',
                'password.required' => 'Kata sandi wajib diisi',
                'password.min' => 'Kata sandi minimal terdiri dari 7 karakter',
                'confirm-password.same' => 'Kata sandi dan Konfirmasi Kata sandi harus sama',
                'toc.accepted' => 'Saya setuju untuk mematuhi syarat dan ketentuan, harap centang kotak untuk menunjukkan persetujuan Anda terhadap kondisi kami.'];            
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:8|max:255',
            'password' => 'required|string|min:7',
            'confirm-password' => 'required|same:password',
            'toc' => 'accepted'
        ], $message);

        if ($validator->fails()) {
            return redirect( route('register', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }
        
        // $email = ['daivalentinenojs@gmail.com'];
        // Mail::to($email)->send(new CustomerMessageMail($request));
        // Mail::to($request->email)->send(new CustomerMessageThankYou($request));

        User::create([
            'uuid' => Str::uuid(),
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $status = '';
        $message = '';
        if (app()->getLocale() == 'zh-tw') {
            $status = '成功!';
            $message = '感谢您在我们的平台上注册您的数据。';            
        } else if (app()->getLocale() == 'en') {
            $status = 'Success!';
            $message = 'Thank you for registering your data in our platform.';
        } else if (app()->getLocale() == 'id') {
            $status = 'Sukses!';
            $message = 'Terima kasih telah mendaftarkan data Anda di platform kami.';
        }

        return redirect(route('register', app()->getLocale()) )->withStatus([
            'alert' => 'alert-success',
            'status' =>  $status,
            'message' => $message
        ]);
    }

    public function LoginUser(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'email.required' => '電子郵件為必填項',   
                'email.email' => '请输入有效的电子邮件地址',            
                'password.required' => '密碼為必填項'];
        } else if (app()->getLocale() == 'en') {
            $message = [              
                'email.required' => 'Email is required',
                'email.email' => 'Please enter a valid email address',
                'password.required' => 'Password is required'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email wajib diisi dengan format yang benar',
                'password.required' => 'Kata sandi wajib diisi'];            
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string'
        ], $message);

        if ($validator->fails()) {
            return redirect( route('login', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = User::where('email', $request['email'])->first();

            if ($user) {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    return redirect( route('dashboard-user', app()->getLocale()) );
                } else {
                    if (app()->getLocale() == 'zh-tw') {
                        $message = '您輸入的電子郵件和密碼不符。';
                    } else if (app()->getLocale() == 'en') {
                        $message = 'Your email and password do not match.';
                    } else if (app()->getLocale() == 'id') {
                        $message = 'Email dan kata sandi yang Anda masukkan tidak cocok.';       
                    }
                    
                    return redirect( route('login', app()->getLocale()) )
                        ->withErrors($message)
                        ->withInput();
                }
            }
            
            $admin = Admin::where('email', $request['email'])->first();
            
            if ($admin) {
                $credentials = $request->only('email', 'password');

                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect( route('dashboard-admin', app()->getLocale()) );
                } else {
                    if (app()->getLocale() == 'zh-tw') {
                        $message = '您輸入的電子郵件和密碼不符。';
                    } else if (app()->getLocale() == 'en') {
                        $message = 'Your email and password do not match.';
                    } else if (app()->getLocale() == 'id') {
                        $message = 'Email dan kata sandi yang Anda masukkan tidak cocok.';       
                    }
                    
                    return redirect( route('login', app()->getLocale()) )
                        ->withErrors($message)
                        ->withInput();
                }
            } else {
                if (app()->getLocale() == 'zh-tw') {
                    $message = '您的帐号尚未注册。';
                } else if (app()->getLocale() == 'en') {
                    $message = 'Your account has not been registered.';
                } else if (app()->getLocale() == 'id') {
                    $message = 'Akun Anda belum terdaftar.';          
                }

                return redirect( route('login', app()->getLocale()) )
                    ->withErrors($message)
                    ->withInput();
            }
            
        }
    }
}
