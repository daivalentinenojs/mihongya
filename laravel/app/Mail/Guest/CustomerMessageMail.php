<?php

namespace App\Mail\Guest;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $request = $this->request;
        $subject = '';

        if (app()->getLocale() == 'zh-tw') {
            $subject = '客戶信息';            
        } else if (app()->getLocale() == 'en') {
            $subject = 'Customer Request';
        } else if (app()->getLocale() == 'id') {
            $subject = 'Permintaan Kontak Pelanggan';
        }

        return $this->from(env('MAIL_FROM_ADDRESS'), $request->name)
                ->subject($subject)
                ->view('guest.email.customer-message-mail', compact('request'));
    }
}
