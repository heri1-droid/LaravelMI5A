<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    public function fakultas(){
        return $this-> belongsTo(  Fakultas::class, 'fakultas_id', 'id');
    }

    protected $fillable = ['nama', 'kaprodi', 'singkatan', 'fakultas_id'];

}
    