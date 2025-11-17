@extends('layouts.app')

@section('title','Hasil Pencarian')

@section('content')
<div class="px-4 lg:px-14 py-12">
  <h1 class="font-bold text-2xl">Hasil Pencarian</h1>
  <p class="text-slate-500 mt-4">Menampilkan hasil untuk: <strong>...</strong></p>
  <!-- results list -->
  <div class="mt-6 grid sm:grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="border p-4 rounded">Contoh hasil</div>
  </div>
</div>

@endsection
