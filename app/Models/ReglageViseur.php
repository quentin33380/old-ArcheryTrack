<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReglageViseur extends Model
{
    protected $table = 'reglage_viseur';
    use HasFactory;

    protected $fillable = [
        'arc_id',
        'distance',
        'reglage'
    ];

    public function arc()
    {
        return $this->belongsTo(Arcs::class);
    }
}
