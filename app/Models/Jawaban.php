<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = "jawaban";

    protected $fillable = [
      "id_soal",
      "jawaban1",
      "jawaban2",
      "jawaban3",
    ];
}
