<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailPurchase extends Mailable
{
    use Queueable, SerializesModels;

    public $paymentInfo;

    /**
     * Create a new message instance.
     *
     * @param $paymentInfo
     */
    public function __construct($paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('a00288615@student.ait.ie')
            ->view('email.purchase')->with([
                'PaymentInfo' => $this->paymentInfo
            ]);
    }
}
