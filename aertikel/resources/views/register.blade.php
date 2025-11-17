@extends('layouts.app')

@section('title','Register')

@section('content')
<body class="flex items-center justify-center min-h-screen bg-[#FFF8F2]">
  <div class="flex flex-col items-center justify-center bg-white p-8 mt-8 mb-8 rounded-lg w-full max-w-lg py-20">
    <!-- Logo Section -->
    <a href="{{ url('/') }}">
      <div class="flex gap-4 items-center mb-6">
        <img src="{{ asset('img/Logo.png') }}" class="h-14" alt="Logo">
        <p class="font-bold text-3xl">Moco</p>
      </div>
    </a>
    <!-- Header -->
    <p class="font-bold text-2xl mb-2 text-center">Daftar Menjadi Author Moco</p>
    <p class="text-slate-500 text-base font-medium mb-6 text-center">
      Silahkan lengkapi data untuk melanjutkan
    </p>
    <!-- Form Section -->
    <div class="flex flex-col w-full mb-7 gap-y-3">
      <label for="nama" class="text-slate-400 font-semibold">Nama</label>
      <input type="text" id="nama" placeholder="Masukan Nama Kamu"
        class="p-2 rounded-xl font-medium border border-slate-300 focus:ring-1 focus:ring-primary focus:outline-none transition duration-300 ease-in-out">
    </div>
    <div class="flex flex-col w-full mb-7 gap-y-3">
      <label for="bio" class="text-slate-400 font-semibold">Bio</label>
      <textarea id="bio" placeholder="Ceritakan tentang dirimu.."
        class="p-2 rounded-xl font-medium h-36  border border-slate-300 focus:ring-1 focus:border-none focus:ring-primary focus:outline-none transition duration-300 ease-in-out"></textarea>
    </div>
    <div class="flex flex-col w-full mb-7 gap-y-3">
      <label for="email" class="text-slate-400 font-semibold">Email Address</label>
      <input type="email" id="email" placeholder="Masukan Email Kamu"
        class="p-2 rounded-xl font-medium focus:ring-1 focus:border-none  border border-slate-300 focus:ring-primary focus:outline-none transition duration-300 ease-in-out">
    </div>
    <div class="flex flex-col w-full mb-7 gap-y-3">
      <label for="password" class="text-slate-400 font-semibold">Password</label>
      <input type="password" id="password" placeholder="Ketik Password Kamu"
        class="p-2 rounded-xl font-medium border border-slate-300 focus:ring-1 focus:border-none focus:ring-primary focus:outline-none transition duration-300 ease-in-out">
    </div>
    <div class="flex flex-col w-full mb-7 gap-y-3">
      <label for="confirm-password" class="text-slate-400 font-semibold">Konfirmasi Password</label>
      <input type="confirm-password" id="confirm-password" placeholder="Ketik Ulang Password Kamu"
        class="p-2 rounded-xl font-medium border border-slate-300 focus:ring-1 focus:border-none focus:ring-primary focus:outline-none transition duration-300 ease-in-out">
    </div>
    <!-- Submit Button -->
    <a href="{{ url('/') }}"
      class="bg-primary rounded-xl text-white w-full text-center py-3 font-semibold hover:bg-primary-dark transition">
      Daftar
    </a>
  </div>
</body>

@endsection
