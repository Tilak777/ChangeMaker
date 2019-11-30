<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $quotes = Quote::all()->where('accepted', 0);
        foreach($quotes as $q) {
            $message = explode(' ',trim($q->message));
            $q->message = $message[0] . " " . $message[1]  . " " . $message[2] . "...";
        }
        return view('admin.index', compact('quotes'));
    }

    public function confirmQuote(Request $request, $id) {
        $q = $request->input('q');
        $quote = Quote::findOrFail($id);


        if($q == 1) {
            $quote->accepted = 1;
            $quote->save();
        }elseif($q == 0) {
            $quote->accepted = 0;
            $quote->save();
        }


        return self::index();
    }


    public function viewmessage($id) {
        $quote = Quote::findOrFail($id);
        return view('admin.viewmessage', compact('quote'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Admin $admin)
    {
        //
    }

    public function edit(Admin $admin)
    {
        //
    }

    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy(Admin $admin)
    {
        //
    }
}
