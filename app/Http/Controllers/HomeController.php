<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    /**
     * Home index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = 'Rastreamento de documentos';

        return view('home.index', compact('title'));
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendMail(ContactRequest $request)
    {
        Mail::to('contato@updrive.com.br')
            ->send(new ContactMail($request->get('name'), $request->get('email'), $request->get('message')));

        return redirect()
            ->action('HomeController@index')
            ->with('status', 'sent');
    }
}
