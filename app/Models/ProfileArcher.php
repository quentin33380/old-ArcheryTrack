<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileArcher extends Model
{
    use HasFactory;

    protected $table = 'profile_archer';

    protected $fillable = [
        'user_id',
        'federation',
        'license_number',
        'eye_director',
        'elongate',
        'name',
        'first_name',
        'phone',
        'address',
        'postal_code',
        'city',
        'arrow_passage_white',
        'arrow_passage_black',
        'arrow_passage_blue',
        'arrow_passage_red',
        'arrow_passage_yellow',
        'feather_passage_white',
        'feather_passage_black',
        'feather_passage_blue',
        'feather_passage_red',
        'feather_passage_yellow',
    ];

    protected $casts = [
        'eye_director' => 'boolean',
        'arrow_passage_white' => 'boolean',
        'arrow_passage_black' => 'boolean',
        'arrow_passage_blue' => 'boolean',
        'arrow_passage_red' => 'boolean',
        'arrow_passage_yellow' => 'boolean',
        'feather_passage_white' => 'boolean',
        'feather_passage_black' => 'boolean',
        'feather_passage_blue' => 'boolean',
        'feather_passage_red' => 'boolean',
        'feather_passage_yellow' => 'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
