<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    static public function fake($user_id) {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->user_id = $user_id;
        $resultat->titre = $f->text();
        $resultat->contenu = $f->paragraph();
        return $resultat;
    }
}
