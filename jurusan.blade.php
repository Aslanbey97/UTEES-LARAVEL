@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>jurusan</h1>
@stop
@section('content')
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pengembangan Perangkat Lunak (PPL)
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ol>
          <li>Aplikasi Office</li>
          <li>HTML & CSS</li>
          <li>Database MySQL</li>
          <li>Javascript</li>
          <li>PHP Laravel</li>
          <li>Reac Native</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Digital Marketing
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <ol>
          <li>Copywriting</li>
          <li>Inkscape</li>
          <li>Content Creator</li>
          <li>Searce Engine Optimization(SEO)</li>
          <li>Searce Engine Marketing(SEM)</li>
          <li>Multimedia</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Pengelola Sistam Jaringan (PSJ)
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <ol>
          <li>Linux Fundamental</li>
          <li>Microtic</li>
          <li>Content Creator</li>
          <li>Otomatisasi Administrasi Server</li>
          <li>Keamanan Sistem Dan Jaringan</li>
          <li>Komutasi Awan</li>
          <li>Administrasi Jaringan Linux</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script> console.log('Hi!'); </script>
@stop