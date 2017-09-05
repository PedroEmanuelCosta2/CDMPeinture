<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'contact_id', 'prixUnitaire', 'stock', 'unite', 'produit'
    ];

    public function contact()
    {
        return $this->belongsTo("App\Contact");
    }
}
