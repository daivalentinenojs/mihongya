<?php

namespace App\Http\Controllers\Guest\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Guest\CustomerMessageMail;
use App\Mail\Guest\CustomerMessageThankYou;
use Mail;
use Validator;

class ContactController extends Controller
{
    public function IndexContact()
    {
        return view('guest.menu.contact.index-contact');
    }

    public function SendEmail(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'subject.required' => '主旨欄位為必填',
                'subject.min' => '主旨信箱至少需要3個字',
                'name.required' => '名稱欄位為必填',
                'name.min' => '名稱信箱至少需要3個字',
                'email.required' => '電子郵件欄位為必填',
                'email.min' => '電子信箱至少需要8個字',
                'phone.min' => '電話至少需要7個字符',
                'message.required' => '內容欄位為必填',
                'message.min' => '內容字段需要7個字符'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'subject.required' => 'Subject is required',
                'subject.min' => 'Subject requires at least 3 characters',
                'name.required' => 'Name is required',
                'name.min' => 'Name requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters',
                'phone.min' => 'Phone requires at least 7 characters',
                'message.required' => 'Message is required',
                'message.min' => 'Message requires at least 7 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'subject.required' => 'Topik wajib diisi',
                'subject.min' => 'Topik membutuhkan setidaknya 3 karakter',
                'name.required' => 'Nama wajib diisi',
                'name.min' => 'Nama membutuhkan setidaknya 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email membutuhkan setidaknya 8 karakter',
                'phone.min' => 'Telepon membutuhkan setidaknya 7 karakter',
                'message.required' => 'Pesan wajib diisi',
                'message.min' => 'Pesan membutuhkan setidaknya 7 karakter'];
        }

        $validator = Validator::make($request->all(), [
            'subject' => 'required|min:3',
            'name' => 'required|min:3',
            'email' => 'required|email|min:8',
            'phone' => 'nullable|min:7',
            'message' => 'required',
        ], $message);

        if ($validator->fails()) {
            return redirect( route('contact', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }
        
        $email = ['jeslyn.ying88@gmail.com', 'daivalentinenojs@gmail.com'];
        Mail::to($email)->send(new CustomerMessageMail($request));
        Mail::to($request->email)->send(new CustomerMessageThankYou($request));

        $status = '';
        $message = '';
        if (app()->getLocale() == 'zh-tw') {
            $status = '感謝您與我們聯繫。';
            $message = '我們會盡快與您聯繫！';            
        } else if (app()->getLocale() == 'en') {
            $status = 'Thank you for contacting us.';
            $message = 'We will contact you soon!';
        } else if (app()->getLocale() == 'id') {
            $status = 'Terima kasih sudah menghubungi kami.';
            $message = 'Kami akan segera menghubungi Anda!';
        }

        return redirect(route('contact', app()->getLocale()) )->withStatus([
            'alert' => 'alert-success',
            'status' =>  $status,
            'message' => $message
        ]);
    }
}
