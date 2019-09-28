<?php
namespace App\Services;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactService
{
    public function getAllContact()
    {
        $contact = Contact::all();
        return $contact;
    }
    public function store(Request $request)
    {
        $data = $request->except('__token');
        $contact = Contact::create($data);

        return $contact;
    }
    public function update(Request $request)
    {
        $data = $request->except('__token', $request->id);
        $contact = Contact::find($request->id);
        $contact->update($data);

        return $contact;
    }
}
