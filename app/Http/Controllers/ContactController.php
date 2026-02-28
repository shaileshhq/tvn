<?php

namespace App\Http\Controllers;

use App\Models\enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactStore(Request $request)
    {
        
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $data = new enquiry;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();
        return redirect()->route('front.contact')->with('success', 'Data submitted succesfully');
    }
}
