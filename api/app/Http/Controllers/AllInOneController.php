<?php

namespace App\Http\Controllers;

use App\Convoyeur;
use App\Trajet;

class AllInOneController extends Controller
{
    /* Nous utilisons l'ORM pour recuperer tout les Convoyeurs et nous associons la Table Mission */
    public function convoyeursMissions() {
      return Convoyeur::with('mission')->get();
      // Le retour est soit un array vide, soit un array d'objects
    }

    public function createTrajet(Request $req) {
      $data = $req->all();
      // Ajouter une validation des champs
      $trajet = new Trajet;
      $trajet->city_start = $data['city_start'];
      $trajet->city_end = $data['city_end'];
      $trajet->date_start = $data['date_start'];
      $trajet->date_end = $data['date_end'];
      $trajet->vehicle = $data['vehicle'];
      $trajet->client_id = $data['client_id'];
      $trajet->mission_id = $data['mission_id'];
      $trajet->save();

      return $trajet;
    }

    public function trajetByClient(Request $req, $client) {
      return Client::find($client)->trajets->with('convoyeur')->get();
    }
}
