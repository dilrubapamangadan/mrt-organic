<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
use DB;
class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required'
        ]);

        $newEnquiry = new Enquiry;
        $newEnquiry->email = $request['email'];
        $newEnquiry->phone = $request['phone'];
        $newEnquiry->product_id = $request['id'];
        $newEnquiry->save();
        Mail::to(env('MAIL_TO'))->send(new EnquiryMail($request));
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        $enquiries = DB::table('enquiries')
        ->leftJoin('products', 'products.id', '=', 'enquiries.product_id')
        ->select('enquiries.id as id','enquiries.email as email','enquiries.phone as phone','products.name as product')
        ->get();

        return $enquiries;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
