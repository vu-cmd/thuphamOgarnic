<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ContactController extends Controller
{

      public function getContact()
    {
      
      $user = Auth::user();

        // Truyền thông tin người dùng đến view
        return view('banhang.contact', compact('user'));
    }

     public function postContact(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact
        Contact::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        // Redirect or return a response
        // return redirect()->back()->with('success', 'Bạn đã gủi liên hệ thành công !!!');
        return redirect()->route('banhang.index')->with('success', 'Product updated successfully!');
    }
}
