<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'CNE',
        'ID_user',
        'ID_fil',
        'is_délégué',
    ];
    
    protected $table = 'etudiant';

    public $timestamps = false;

    protected $softDelete = false;

}
