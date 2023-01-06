<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Pecas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    public function formcontact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:9|numeric',
            'message' => 'required'
        ]);

        Mail::to('empilhadores2011@hotmail.com')->cc('inforubenbaptista@gmail.com')->send(new Contact($request));

        return redirect()->back()->with(['success' => 'Obrigado por entrar em contacto conosco. Entraremos em contacto em breve.']);
    }

    public function formpecas(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:9|numeric',
            'message' => 'required'
        ]);

        Mail::to('empilhadores2011@hotmail.com')->cc('inforubenbaptista@gmail.com')->send(new Pecas($request));

        return redirect()->back()->with(['success' => 'Obrigado por entrar em contacto conosco. Entraremos em contacto em breve com resultados da peça desejada.']);
    }
}
