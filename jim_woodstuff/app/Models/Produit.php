<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nom', 'prix', 'description', 'image', 'dispo', 'created_at', 'updated_at','categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
