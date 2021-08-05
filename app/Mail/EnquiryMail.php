<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->enquiryData = $data;
        $this->enquiryData['product']=false;
        if($this->enquiryData['id']){
            $this->enquiryData['product'] = Product::where('id',$this->enquiryData['id'])->first();
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->enquiryData['email'])->subject('Product Enquiry')->view('mail.enquiry')->with('enquiryData',$this->enquiryData);
    }
}
