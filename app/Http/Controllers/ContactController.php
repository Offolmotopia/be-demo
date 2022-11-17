<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return $contacts;
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'firstName',
          'lastName',
          'email',
          'phone',
          'jobTitle',
          'company',
          'country',
        ]);

        $contact = Contact::create($request->all());

        return $contact;
    }

    /**
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
    }

    /**
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact, $id)
    {
//         $stored = Contact::find($id);
//         $stored->fill($contact);
//         $stored->save();
//
//         return $stored;
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact, $id)
    {
        $request->validate([
          'firstName',
          'lastName',
          'email',
          'phone',
          'jobTitle',
          'company',
          'country',
        ]);

        $stored = Contact::find($id);
        $stored->update($request->all());

        return $stored;
    }

    /**
     *
     * @param  \App\Models\Contact  $Contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Contact::find($id)->delete();

      return response(null, 204);
    }
}
