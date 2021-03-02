<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactsRequest;

use App\Models\Contacts;

class ContactsController extends Controller
{
    public function allData()
    {
        $contacts = new Contacts();
        return view('messages', ['data' => $contacts->orderBy('id', 'desc')->get()]);
    }
    
    public function submit(ContactsRequest $req){
        $contacts = new Contacts();
        $contacts->name = $req->input('name');
        $contacts->email= $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('home')->with('success', 'Success');

    }

    public function oneMessage($id)
    {
        $contacts = new Contacts();
        return view('one-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id)
    {
        $contacts = new Contacts();
        return view('update-message', ['data' => $contacts->find($id)]);
    }

    public function update($id, ContactsRequest $req){
        $contacts = Contacts::find($id);
        $contacts->name = $req->input('name');
        $contacts->email= $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('contacts-data-one', $id)->with('success', 'Success');

    }

    public function delete($id){
        Contacts::find($id)->delete();

        return redirect()->route('contacts-data')->with('success', 'Success');

    }

}
