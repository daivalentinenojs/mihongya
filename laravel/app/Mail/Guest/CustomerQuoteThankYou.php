<?php

namespace App\Mail\Guest;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerQuoteThankYou extends Mailable
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
            $subject = '感謝您申請 Grapho Hunter 的服務';
            $from = 'Grapho Hunter 的支持團隊';
        } else if (app()->getLocale() == 'en') {
            $subject = 'Thank You for Applying the Grapho Hunter\'s Service';
            $from = 'Grapho Hunter\'s Support Team';
        } else if (app()->getLocale() == 'id') {
            $subject = 'Terima kasih telah mengajukan layanan Grapho Hunter';
            $from = 'Tim Support Grapho Hunter';
        }

        return $this->from(env('MAIL_FROM_ADDRESS'), $from)
                ->subject($subject)
                ->view('guest.email.customer-quote-thank-you', compact('request'));
    }
}
