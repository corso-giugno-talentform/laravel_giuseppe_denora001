<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
     protected static  $projects = [
        [
            'id' => 1,
            'slug' => 'ecommerce-platform',
            'nome' => 'Piattaforma di E-commerce',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'dettagli' => 'Soluzione completa con carrello, checkout e gestione prodotti.',
            'immagine' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80'
        ],
        [
            'id' => 2,
            'slug' => 'task-app',
            'nome' => 'Applicazione Task',
            'descrizione' => 'Un\'app per organizzare e monitorare le attività giornaliere.',
            'dettagli' => 'Gestione attività con notifiche e calendario integrato.',
            'immagine' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
        ],
        [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Software Gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'dettagli' => 'Dashboard di analisi dati con report personalizzati.',
            'immagine' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
        ],
        [
            'id' => 4,
            'slug' => 'portfolio-creativo',
            'nome' => 'Portfolio Creativo',
            'descrizione' => 'Una vetrina personale per mostrare i propri lavori creativi.',
            'dettagli' => 'Galleria interattiva con sistema di vendita opere.',
            'immagine' => 'https://images.unsplash.com/photo-1463171379579-3fdfb86d6285?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
        ]
    ];


public function homepage(){
    return view('home');
}

public function contact(){
    return view('contatti');
}

public  function projects(){
    return view('progetti', ['projects' => self::$projects]);

}

public function project($slug){
    foreach(self::$projects as $element){
        if($element['slug'] == $slug) { // Confronto corretto con $slug
            return view('progetto', ['project' => $element]);
        }
    }

    abort(404);

}

}
