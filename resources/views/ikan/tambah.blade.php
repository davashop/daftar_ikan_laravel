@extends('layout')
@section('content')
    <h1>Tambah Ikan</h1>

    <form action="{{ route('ikan.store') }}" method="post">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Ikan..." required>
        </div>
        <div>
            <label for="asal">Asal</label>
            <input type="text" name="asal" id="asal" placeholder="Masukkan Asal Ikan..." required>
        </div>
        <div>
            <label for="karakteristik">Karakteristik</label>
            <textarea type="text" name="karakteristik" id="karakteristik" placeholder="Masukkan Karakteristik Ikan..." required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection