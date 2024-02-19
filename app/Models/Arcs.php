<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arcs extends Model
{

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'puissance',
        'viseur_marque',
        'viseur_distance',
        'viseur_reglage',
        'poignee_marque',
        'poignee_dimensions',
        'branche_marque',
        'branche_dimensions',
        'band',
        'tiller',
        'stab_marque',
        'stab_taille',
        'stab_nb_poids',
        'stab_poids',
        'stab_laterales_marque',
        'stab_laterales_taille',
        'stab_laterales_nb_poids',
        'stab_laterales_poids',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
