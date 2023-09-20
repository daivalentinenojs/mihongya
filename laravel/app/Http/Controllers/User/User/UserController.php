<?php

namespace App\Http\Controllers\User\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function IndexGetUsers()
    {
        $role = 'Admin';
        $user = Auth::guard('admin')->user();
        $users = User::whereNull('deleted_at')->get();
        return view('user.menu.master-data.user.index-user', compact('user', 'users', 'role'));
    }

    public function IndexGetUser(Request $request, $language, $id)
    {
        $user = User::where('id', $id)->whereNull('deleted_at')->first();
        return $user;
    }

    public function IndexPostUser(Request $request)
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
                'password.min' => '密碼至少需要7個字元'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'firstname.required' => 'Firstname is required',
                'firstname.min' => 'Firstname requires at least 3 characters',
                'lastname.required' => 'Lastname is required',
                'lastname.min' => 'Lastname requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters',               
                'password.required' => 'Password is required',
                'password.min' => 'Password requires at least 7 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'firstname.required' => 'Nama depan wajib diisi',
                'firstname.min' => 'Nama depan minimal terdiri dari 3 karakter',
                'lastname.required' => 'Nama belakang wajib diisi',
                'lastname.min' => 'Nama belakang minimal terdiri dari 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email minimal terdiri dari 8 karakter',
                'password.required' => 'Kata sandi wajib diisi',
                'password.min' => 'Kata sandi minimal terdiri dari 7 karakter'];            
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:8|max:255',
            'password' => 'required|string|min:7',
        ], $message);

        if ($validator->fails()) {
            return redirect( route('get-users', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'uuid' => Str::uuid(),
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'phone' => $request['phone'],
        ]);

        $role = 'Admin';
        $user = Auth::guard('admin')->user();
        $users = User::all();

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

        return redirect(route('get-users', app()->getLocale()))
                ->with(compact('user', 'users', 'role'))
                ->withStatus([
                    'alert' => 'alert-success',
                    'status' =>  $status,
                    'message' => $message
                ]);
    }

    public function IndexPutUser(Request $request, $language, $userId)
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
                'password.min' => '密碼至少需要7個字元'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'firstname.required' => 'Firstname is required',
                'firstname.min' => 'Firstname requires at least 3 characters',
                'lastname.required' => 'Lastname is required',
                'lastname.min' => 'Lastname requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters',               
                'password.required' => 'Password is required',
                'password.min' => 'Password requires at least 7 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'firstname.required' => 'Nama depan wajib diisi',
                'firstname.min' => 'Nama depan minimal terdiri dari 3 karakter',
                'lastname.required' => 'Nama belakang wajib diisi',
                'lastname.min' => 'Nama belakang minimal terdiri dari 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email minimal terdiri dari 8 karakter',
                'password.required' => 'Kata sandi wajib diisi',
                'password.min' => 'Kata sandi minimal terdiri dari 7 karakter'];            
        }

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:8|max:255',
            'password' => 'required|string|min:7',
        ], $message);

        if ($validator->fails()) {
            return redirect( route('get-users', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::findOrFail($userId); // Find the user by ID
        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'phone' => $request['phone'],
        ]);

        $role = 'Admin';
        $user = Auth::guard('admin')->user();
        $users = User::all();

        $status = '';
        $message = '';
        if (app()->getLocale() == 'zh-tw') {
            $status = '成功!';
            $message = '您的資料已更新。';            
        } else if (app()->getLocale() == 'en') {
            $status = 'Success!';
            $message = 'Your data has been updated.';
        } else if (app()->getLocale() == 'id') {
            $status = 'Sukses!';
            $message = 'Data Anda telah diperbarui.';
        }

        return redirect(route('get-users', app()->getLocale()))
                ->with(compact('user', 'users', 'role'))
                ->withStatus([
                    'alert' => 'alert-success',
                    'status' =>  $status,
                    'message' => $message
                ]);
    }

    public function IndexDeleteUser(Request $request, $language, $id)
    {
        $user = User::find($id);

        $status = '';
        $message = '';

        if ($user) {
            $user->delete();
        }
    }
}
