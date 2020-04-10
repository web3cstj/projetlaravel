<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Support\Str;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function fake() {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->prenom = $f->firstName();
        $resultat->nom = $f->lastName();
        $resultat->name = \Str::slug($resultat->prenom.$resultat->nom, '');
        $resultat->password = \Str::slug($resultat->prenom.$resultat->nom, '');
        $resultat->email = \Str::slug($resultat->prenom.$resultat->nom, '')
        .'@'.$f->domainName();
        $resultat->tel = $f->phoneNumber();
        $resultat->adresse = $f->streetAddress();
        $resultat->ville = $f->city();
        $resultat->province = $f->state();
        $resultat->codepostal = $f->postcode();
        $resultat->citation = $f->paragraph();
        return $resultat;
    }
}
