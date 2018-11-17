<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Apply extends Mailable
{
    use Queueable, SerializesModels;
	private $file;
	private $data;

	/**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file, $data)
    {
        $this->file = $file;
	    $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    return $this->markdown('emails.apply')
	                ->with(['data' => $this->data])
					->subject('Welcome to Jobs')
					->from(env('MAIL_FROM_ADDRESS'))
					->attach($this->file->getRealPath(), array(
					'as' => 'resume.' . $this->file->getClientOriginalExtension(),
					'mime' => $this->file->getMimeType()));
    }
}
