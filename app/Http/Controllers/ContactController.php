<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        Contact::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email
        ]);

        return redirect('/contacts');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email
        ]);

        return redirect('/contacts');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect('/contacts');
    }
}