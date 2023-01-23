<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $keterangan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $status, string $keterangan)
    {
        $this->status = $status;
        $this->keterangan = $keterangan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $status = $this->status;
        $keterangan = $this->keterangan;
        return $this->subject($status)->markdown('pages.admin.send-email.index', compact('status', 'keterangan'));
    }
}
