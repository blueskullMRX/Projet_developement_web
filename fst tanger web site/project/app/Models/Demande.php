<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'CNE',
        'Destinataire',
        'Contenue',
        'Objet',
        'Type_dem',

    ];
    
    protected $table = 'demande';

    public $timestamps = false;

    protected $softDelete = false;

}
