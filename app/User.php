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
        'prenom',
        'nom',
        'name',
        'tel',
        'adresse',
        'ville',
        'province',
        'codepostal',
        'citation',
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

    static public $regles = [
        'prenom' => 'required',
        'email' => 'email',
        'codepostal' => 'required|regex:/^[a-z][0-9][a-z][.-]?[0-9][a-z][0-9]$/i',
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
        $resultat->citation = $f->realText();
        return $resultat;
    }
    public function posts() {
        return $this->hasMany('App\Post');
    }
    public function getNomAdminAttribute() {
        return $this->nom . ", " . $this->prenom;
    }
    public function getNomCompletAttribute() {
        return $this->prenom . " " . $this->nom;
    }
    public function getNbPostsAttribute() {
        return $this->posts()->count();
    }
}
