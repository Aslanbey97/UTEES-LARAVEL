@extends('adminlte::page')
@section('title','Data mahasantuy')
@section('content_header')
    <h1>Data mahasantuy</h1>
@stop
@section('content') 
{{-- Isi Konten Data mahasantuy --}}
@php
$ar_judul = ['No','NIM','Nama','Jurusan','Alamat','Kota','Provinsi','Email'];
$no = 1;
@endphp
<a class="btn btn-primary btn-md"
href="{{ route('mahasantuy.create') }}" role="button">Tambah mahasantuy</a><br/><br/>
<table class="table table-striped">    
    <thead>
        <tr>
        @foreach($ar_judul as $jdl)
        <th>{{ $jdl }}</th>
        @endforeach
        </tr>
    </thead>
    {{-- Lanjutan Isi Konten Data mahasantuy --}}
    <tbody>
    @foreach($ar_mahasantuy as $peg)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $peg->nim }}</td>
    <td>{{ $peg->nama }}</td>
    <td>{{ $peg->jurusan }}</td>
    <td>{{ $peg->alamat }}</td>
    <td>{{ $peg->kota }}</td>
    <td>{{ $peg->provinsi }}</td>
    <td>{{ $peg->email }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>