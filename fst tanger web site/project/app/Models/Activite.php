<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ID_mod',
        'jour',
        'ID_cre',
        'ID_loc',
    ];
    
    protected $table = 'activité';

    public $timestamps = false;

    protected $softDelete = false;

}
