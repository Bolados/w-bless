<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contacts.index');
    }

    public function store($request)
    {
        $formdata = (object)$request->formData;
        Mail::send('email', [
            'name' => $formdata->name,
            'email' => $formdata->email,
            'msg' => $formdata->message
        ], function ($m) use ($email, $subject) {
            $m->from($email);
            $m->to('ongfemmeetbenediction@gmail.com')->subject($subject);
        });

    }


}
