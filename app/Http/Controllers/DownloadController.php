<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($document)
    {
        // Vérifier si le fichier existe dans le répertoire de stockage public
        if (Storage::disk('public')->exists($document)) {
            // Télécharger le fichier
            return Storage::disk('public')->download($document);
        } else {
            // Si le fichier n'existe pas, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Le document demandé n\'existe pas.');
        }
    }
}
