<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function IndexProfileAdmin()
    {
        $role = 'Admin';
        $user = Auth::guard('admin')->user();
        return view('user.menu.profile.index-profile', compact('role', 'user'));
    }

    public function IndexEditProfileAdmin(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'firstname.required' => '名字為必填項',
                'firstname.min' => '名字至少需要3個字元',
                'lastname.required' => '姓氏為必填項',
                'lastname.min' => '姓氏至少需要3個字元',
                'email.required' => '電子郵件為必填項',
                'email.min' => '電子郵件至少需要8個字元'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'firstname.required' => 'Firstname is required',
                'firstname.min' => 'Firstname requires at least 3 characters',
                'lastname.required' => 'Lastname is required',
                'lastname.min' => 'Lastname requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'firstname.required' => 'Nama depan wajib diisi',
                'firstname.min' => 'Nama depan minimal terdiri dari 3 karakter',
                'lastname.required' => 'Nama belakang wajib diisi',
                'lastname.min' => 'Nama belakang minimal terdiri dari 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email minimal terdiri dari 8 karakter'];            
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:8|max:255'
        ], $message);

        if ($validator->fails()) {
            return redirect( route('profile-admin', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }

        $user = Admin::find(auth('admin')->user()->id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        $user->save();
        
        $role = 'Admin';
        return view('user.menu.profile.index-profile', compact('role', 'user'));
    }

    public function IndexProfileUser()
    {
        $role = 'User';
        $user = Auth::user();
        return view('user.menu.profile.index-profile', compact('role', 'user'));
    }

    public function IndexEditProfileUser(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'firstname.required' => '名字為必填項',
                'firstname.min' => '名字至少需要3個字元',
                'lastname.required' => '姓氏為必填項',
                'lastname.min' => '姓氏至少需要3個字元',
                'email.required' => '電子郵件為必填項',
                'email.min' => '電子郵件至少需要8個字元'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'firstname.required' => 'Firstname is required',
                'firstname.min' => 'Firstname requires at least 3 characters',
                'lastname.required' => 'Lastname is required',
                'lastname.min' => 'Lastname requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'firstname.required' => 'Nama depan wajib diisi',
                'firstname.min' => 'Nama depan minimal terdiri dari 3 karakter',
                'lastname.required' => 'Nama belakang wajib diisi',
                'lastname.min' => 'Nama belakang minimal terdiri dari 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email minimal terdiri dari 8 karakter'];            
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:8|max:255'
        ], $message);

        if ($validator->fails()) {
            return redirect( route('profile-user', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find(Auth::user()->id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        $user->save();
        
        $role = 'User';
        return view('user.menu.profile.index-profile', compact('role', 'user'));
    }
}
