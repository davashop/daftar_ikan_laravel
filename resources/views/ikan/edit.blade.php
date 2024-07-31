@extends('layout')
@section('content')
    <h1>Edit Merk</h1>
    <form action="{{ route('ikan.update', $ikan->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="nama">Merk</label>
            <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ $ikan->nama }}" required>
        </div>
        <br>
        <div>
            <label for="asal">Asal</label>
            <input type="text" name="asal" id="asal" placeholder="Asal" value="{{ $ikan->asal }}" required>
        </div>
        <br>
        <div> 
            <label for="karakteristik">Karakteristik</label>
            <textarea type="text" name="karakteristik" id="karakteristik" placeholder="karakteristik" value="{{ $ikan->karakteristik }}" required>{{ $ikan->karakteristik }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection