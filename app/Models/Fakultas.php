<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'dekan', 'singkatan'];

    // protected $table = 'fakultas';

    // protected $primaryKey = 'id';
// protected $fillable = ['id'];


}
