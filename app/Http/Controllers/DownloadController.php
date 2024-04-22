<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($document)
    {
        // Vérifier si le fichier existe
        if (Storage::disk('local')->exists($document)) {
            // Renvoyer le fichier en tant que téléchargement
            return Storage::download($document);
        } else {
            // Si le fichier n'existe pas, rediriger l'utilisateur avec un message d'erreur
            return redirect()->back()->with('error', 'Le document demandé n\'existe pas.');
        }
    }
}
