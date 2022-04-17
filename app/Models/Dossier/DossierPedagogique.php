<?php

namespace App\Models\Dossier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierPedagogique extends Model
{
    use HasFactory;
    protected $table ='dossier_pedagogiques';
    protected $fillable=[
        'id',
        'nom',
        'etat_dossier',
        'user_id',
        'nom_prof',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
