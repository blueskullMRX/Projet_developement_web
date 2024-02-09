<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_dem';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ID_dep',
        'ID_fil',
        'ID_mod',
        'Etat_ann',
        'Contenue',
        'Objet',

    ];
    
    protected $table = 'annonces';

    public $timestamps = false;

    protected $softDelete = false;

}
