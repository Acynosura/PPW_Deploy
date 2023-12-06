<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index(){
        return view('emails.kirim-email');
    }
    public function store(Request $request){
        $data = $request->all();
        dispatch(new SendMailJob($data));
        return redirect()->route('Kiri-email')
        ->with('success', 'Email berhasil dikirim');
    }
}