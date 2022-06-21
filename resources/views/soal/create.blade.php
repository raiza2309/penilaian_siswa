@extends("template")
@section("content")
<div class="container mt-3">
  <form action="{{url('guru/soal')}}" method="post">
    @csrf
    <div class="mb-3">
      <select class="form-select" name="tipe_soal">
        <option selected>Pilih jenis soal</option>
        <option value="1">Matematika</option>
        <option value="2">Bahasa Indonesia</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="soal" class="form-label">Soal</label>
      <input type="text" class="form-control" id="soal" name="soal" placeholder="Tulis Soal">
      @if($errors->has('soal'))
      <div class="invalid-feedback d-block">
        {{$errors->first('soal')}}
      </div>  
      @endif
    </div>
    <div class="mb-3">
      <label for="jawaban1" class="form-label">Opsi Jawaban 1</label>
      <input type="text" class="form-control" id="jawaban1" name="jawaban1" placeholder="Tulis jawaban 1">
      @if($errors->has('jawaban1'))
      <div class="invalid-feedback d-block">
        {{$errors->first('jawaban1')}}
      </div>  
      @endif
    </div>
    <div class="mb-3">
      <label for="jawaban2" class="form-label">Opsi Jawaban 2</label>
      <input type="text" class="form-control" id="jawaban2" name="jawaban2" placeholder="Tulis jawaban 2">
      @if($errors->has('jawaban2'))
      <div class="invalid-feedback d-block">
        {{$errors->first('jawaban2')}}
      </div>  
      @endif
    </div>
    <div class="mb-3">
      <label for="jawaban3" class="form-label">Opsi Jawaban 3</label>
      <input type="text" class="form-control" id="jawaban3" name="jawaban3" placeholder="Tulis jawaban 3">
      @if($errors->has('jawaban3'))
      <div class="invalid-feedback d-block">
        {{$errors->first('jawaban3')}}
      </div>  
      @endif
    </div>
    <div class="mb-3">
      <label for="jawaban" class="form-label">Jawaban benar</label>
      <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Tulis jawaban benar">
      @if($errors->has('jawaban'))
      <div class="invalid-feedback d-block">
        {{$errors->first('jawaban')}}
      </div>  
      @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection