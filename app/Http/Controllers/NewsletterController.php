<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeEmail = Newsletter::all();
        return view('newsletter.list', compact('listeEmail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        try {
            // Enregistrer l'e-mail dans la base de données
            $newsletter = Newsletter::create([
                'email' => $request->email
            ]);

            // Envoyer l'e-mail de confirmation
            Mail::to($request->email)->send(new ConfirmationMail());

            // Rediriger vers la page index avec un message de succès
            return view('index')->with('success', 'Votre inscription à la newsletter a bien été enregistrée.')->with('closeModal', true);
        }
        catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Une erreur est survenue lors de votre inscription à la newsletter.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
