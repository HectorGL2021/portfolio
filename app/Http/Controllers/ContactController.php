<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Aquí puedes agregar la lógica para enviar el email
        // Por ejemplo, usando Mail::to()->send()
        
        return redirect()->back()->with('success', '¡Gracias por tu mensaje! Me pondré en contacto contigo pronto.');
    }
}
