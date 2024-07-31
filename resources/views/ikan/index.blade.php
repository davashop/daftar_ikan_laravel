@extends('layout')
@section('content')
    <style type="text/css">
        .back{
            width: 40%;
            padding: 10%;
            margin-left: 20%;
        }
    </style>
    <div class="back">
    <h1>DAFTAR IKAN</h1>
        <a href="{{ route('ikan.create') }}">+ Tambah +</a>
        <br>
        <br>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Asal</td>
                <td>Karakteristik</td>
                <td>Opsi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($ikans as $ikan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ikan->nama }}</td>
                <td>{{ $ikan->asal }}</td>
                <td>{{ $ikan->karakteristik }}</td>
                <td>
                    <a href="{{ url("/ikan/{$ikan->id}") }}">Edit</a>
                        ||
                    <form action="{{ url("/ikan/{$ikan->id}") }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection