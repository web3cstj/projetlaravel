<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function installer() {
        // Vieille version :
        // $db = \DB::connection()->getDatabaseName();
        // Nouvelle version 2020 :
        $db = \database_path("blog.sqlite");
        file_put_contents($db, '');
        \Artisan::call("migrate");
        \Artisan::call("db:seed");
        return "La base de données a été installée";
    }
}
