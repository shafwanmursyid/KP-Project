<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorHp extends Model
{
    use HasFactory;

    protected $table = 'nomor_hp';

    // Izinkan nomor_hp diisi
    protected $fillable = ['nomor_hp'];
}
