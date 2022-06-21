<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Soal;
use App\Models\Jawaban;

use Session;

class SoalController extends Controller
{
    public function create()
    {
      return view('soal.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'soal' => ['required'],
        'jawaban' => ['required'],
        'jawaban1' => ['required'],
        'jawaban2' => ['required'],
        'jawaban3' => ['required']
      ]);

      $soal = Soal::create($request->all());
      $request['id_soal'] = $soal->id;
      Jawaban::create($request->all());

      $request->session()->flash('success', "soal berhasil diinput");
      return redirect('guru/soal/create');
    }
}
