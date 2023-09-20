<?php

namespace App\Mail\Guest;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerMessageThankYou extends Mailable
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
        $from = '';

        if (app()->getLocale() == 'zh-tw') {
            $subject = '感謝您與Grapho Hunter聯繫';
            $from = 'Grapho Hunter 的支持團隊';
        } else if (app()->getLocale() == 'en') {
            $subject = 'Thank You for Contacting Grapho Hunter';
            $from = 'Grapho Hunter\'s Support Team';
        } else if (app()->getLocale() == 'id') {
            $subject = 'Terima kasih telah menghubungi Grapho Hunter';
            $from = 'Tim Support Grapho Hunter';
        }

        return $this->from(env('MAIL_FROM_ADDRESS'), $from)
                ->subject($subject)
                ->view('guest.email.customer-message-thank-you', compact('request'));
    }
}
