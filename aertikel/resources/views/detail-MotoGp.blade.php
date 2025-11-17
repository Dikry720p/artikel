@extends('layouts.app')

@section('title','Detail MotoGP')

@section('content')
<div class="px-4 lg:px-14 py-12">
  <a href="{{ url('/') }}" class="text-sm text-primary">&larr; Kembali</a>
  <h1 class="font-bold text-2xl mt-4">MotoGp 2025 Akan Diadakan Di Sirkuit Mandalika</h1>
  <p class="text-slate-400 mt-2">22 Januari 2024</p>
  <img src="{{ asset('img/Berita-Motor.png') }}" alt="" class="w-full rounded-xl my-6">
  <p class="text-base text-slate-700">(Isi artikel...)</p>
</div>

@endsection
