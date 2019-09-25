<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('client.contact');
    }

    public function listContact()
    {
        $contact = $this->contactService->getAllContact();

        return view('admin.contact.list_contact', compact('contact'));
    }

    public function store(Request $request)
    {
       $this->contactService->store($request);

       return redirect()->route('user.index')
           ->with('success', Lang::get('messages.success'));
    }

    public function update(Request $request)
    {
        $this->contactService->update($request);

        return redirect()->route('contact.list-contact')
            ->with('success', Lang::get('messages.success'));
    }
}
