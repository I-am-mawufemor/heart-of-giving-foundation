<?php

namespace App\Http\Controllers;

use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;

class Contact extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = ModelsContact::all();
        return view('contact.index')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'whatsApp' => 'nullable',
            'linkdin' => 'nullable',
        ]);

        // Check if a contact with the same details already exists
        $existingContact = ModelsContact::where([
            'address' => trim($request->address),
            'email' => trim($request->email),
            'telephone' => trim($request->telephone),
        ])->first();

        if ($existingContact) {
            return back()->with('error', 'Contact already exists. Click the delete button to remove the existing contact.');
        }

        // Create a new contact
        $post = new ModelsContact();
        $post->address = trim($request->address);
        $post->email = trim($request->email);
        $post->telephone = trim($request->telephone);
        $post->facebook = trim($request->facebook);
        $post->twitter = trim($request->twitter);
        $post->whatsApp = trim($request->whatsApp);
        $post->linkdin = trim($request->linkdin);

        if ($post->save()) {
            return back()->with('success', 'You have successfully added a new contact.');
        } else {
            return back()->with('error', 'Failed to add the contact.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = ModelsContact::find($id);
        return view('contact.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'address' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                'facebook' => 'nullable',
                'twitter' => 'nullable',
                'whatsApp' => 'nullable',
                'linkdin' => 'nullable',
            ],
            [
                'required' => 'The :attribute field is required.',
            ]
        );

        // create an edited contact
        $post = ModelsContact::find($id);
        $post->address = trim($request->address);
        $post->email = trim($request->email);
        $post->telephone = trim($request->telephone);
        $post->facebook = trim($request->facebook);
        $post->twitter = trim($request->twitter);
        $post->whatsApp = trim($request->whatsApp);
        $post->linkdin = trim($request->linkdin);
        $req = $post->save();
        if ($req) {
            # code...
            return back()->with('success', 'You have sucessefully edited your contacts');
        } else {
            return back()->with('error', 'Your have failed to edit your contact');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete contact
        $post = ModelsContact::find($id);
        $post->delete();
        return redirect('/contacts')->with('success', 'You have successfully deleted contact');
    }
}
