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
    public $nama;
    public $keterangan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $status, string $keterangan, string $nama)
    {
        $this->status = $status;
        $this->nama = $nama;
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
        $nama = $this->nama;
        $keterangan = $this->keterangan;
        return $this->subject('Status pengaduan anda', $status)->markdown('pages.admin.send-email.index', compact('status', 'keterangan', 'nama'));
    }
}
