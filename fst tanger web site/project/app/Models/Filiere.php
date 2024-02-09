<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Resp_fil',
        'OBJECTIFS',
        'PROGRAMME',
        'COMPETENCES',
    ];
    
    protected $table = 'filières';

    public $timestamps = false;

    protected $softDelete = false;

}
