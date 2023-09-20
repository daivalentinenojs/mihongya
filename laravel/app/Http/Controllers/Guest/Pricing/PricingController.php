<?php

namespace App\Http\Controllers\Guest\Pricing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Guest\CustomerQuoteMail;
use App\Mail\Guest\CustomerQuoteThankYou;
use Mail;
use Validator;

class PricingController extends Controller
{
    public function IndexPricing()
    {
        return view('guest.menu.pricing.index-pricing');
    }

    public function SendQuote(Request $request)
    {
        $message = [];
        if (app()->getLocale() == 'zh-tw') {
            $message = [
                'name.required' => '名稱欄位為必填',
                'name.min' => '名稱信箱至少需要3個字',
                'email.required' => '電子郵件欄位為必填',
                'email.min' => '電子信箱至少需要8個字',
                'phone.min' => '電話至少需要7個字符',
                'service.required' => '服務字段為必填項',
                'message.required' => '內容欄位為必填',
                'message.min' => '內容字段需要7個字符'];
        } else if (app()->getLocale() == 'en') {
            $message = [
                'name.required' => 'Name is required',
                'name.min' => 'Name requires at least 3 characters',
                'email.required' => 'Email is required',
                'email.min' => 'Email requires at least 8 characters',
                'phone.min' => 'Phone requires at least 7 characters',
                'service.required' => 'Service is required',
                'message.required' => 'Message is required',
                'message.min' => 'Message requires at least 7 characters'];
        } else if (app()->getLocale() == 'id') {
            $message = [
                'name.required' => 'Nama wajib diisi',
                'name.min' => 'Nama membutuhkan setidaknya 3 karakter',
                'email.required' => 'Email wajib diisi',
                'email.min' => 'Email membutuhkan setidaknya 8 karakter',
                'phone.min' => 'Telepon membutuhkan setidaknya 7 karakter',
                'service.required' => 'Service wajib diisi',
                'message.required' => 'Pesan wajib diisi',
                'message.min' => 'Pesan membutuhkan setidaknya 7 karakter'];
        }

        $validator = Validator::make($request->all(), [
            'service' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email|min:8',
            'phone' => 'nullable|min:7',
            'message' => 'required',
        ], $message);

        if ($validator->fails()) {
            return redirect( route('pricing', app()->getLocale()) )
                ->withErrors($validator)
                ->withInput();
        }
        
        $email = ['jeslyn.ying88@gmail.com', 'daivalentinenojs@gmail.com'];
        Mail::to($email)->send(new CustomerQuoteMail($request));
        Mail::to($request->email)->send(new CustomerQuoteThankYou($request));

        $status = '';
        $message = '';
        if (app()->getLocale() == 'zh-tw') {
            $status = '感謝您使用我們的服務。';
            $message = '我們會盡快與您聯繫！';            
        } else if (app()->getLocale() == 'en') {
            $status = 'Thank you for using our services.';
            $message = 'We will contact you soon!';
        } else if (app()->getLocale() == 'id') {
            $status = 'Terima kasih sudah menggunakan jasa kami.';
            $message = 'Kami akan segera menghubungi Anda!';
        }

        return redirect(route('pricing', app()->getLocale()) )->withStatus([
            'alert' => 'alert-success',
            'status' =>  $status,
            'message' => $message
        ]);
    }
}
