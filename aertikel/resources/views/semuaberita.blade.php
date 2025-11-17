@extends('layouts.app')

@section('title','Semua Berita')

@section('content')
<div class="w-full">
  <!-- Nav -->
  <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
    <div class="flex gap-10 w-full">
      <!-- Logo dan Menu -->
      <div class="flex items-center justify-between w-full lg:w-auto">
        <!-- Logo -->
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="w-8 lg:w-10">
          <p class="text-lg lg:text-xl font-bold">MOCO</p>
        </div>
        <button class="lg:hidden text-primary text-2xl focus:outline-none" id="menu-toggle">☰</button>
      </div>

      <!-- Menu Navigasi -->
      <div id="menu" class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-10 w-full lg:w-auto mt-5 lg:mt-0">
        <ul class="flex flex-col lg:flex-row items-start lg:items-center gap-4 font-medium text-base w-full lg:w-auto">
          <li><a href="{{ url('/') }}" class="hover:text-primary">Beranda</a></li>
          <li><a href="{{ url('gayahidup') }}" class="hover:text-primary">Gaya Hidup</a></li>
          <li><a href="{{ url('olahraga') }}" class="hover:text-primary">Olahraga</a></li>
          <li><a href="{{ url('kesehatan') }}" class="hover:text-primary">Kesehatan</a></li>
          <li><a href="{{ url('politik') }}" class="hover:text-primary">Politik</a></li>
          <li><a href="{{ url('pariwisata') }}" class="hover:text-primary">Pariwisata</a></li>
        </ul>
      </div>
    </div>

    <!-- Search dan Login -->
    <div class="hidden lg:flex items-center gap-2 mt-4 lg:mt-0 w-full lg:w-auto relative">
      <div class="relative w-full lg:w-auto">
        <input type="text" placeholder="Cari berita..." class="border border-slate-300 rounded-full px-4 py-2 pl-8 w-full text-sm font-normal lg:w-auto focus:outline-none focus:ring-primary focus:border-primary" id="searchInput" />
        <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
          <img src="{{ asset('img/search.png') }}" alt="search" class="w-4">
        </span>
      </div>
      <a href="{{ url('login') }}" class="bg-primary px-8 py-2 rounded-full text-white font-semibold h-fit text-sm lg:text-base">Masuk</a>
    </div>
  </div>

  <!-- Menu Dropdown untuk Mobile -->
  <div id="dropdown-menu" class="hidden absolute top-0 left-0 w-full h-screen bg-white z-40 px-8 py-12 text-lg font-semibold shadow-md">
    <a href="{{ url('/') }}" class="hover:text-primary">Beranda</a>
    <a href="{{ url('gayahidup') }}" class="hover:text-primary">Gaya Hidup</a>
    <a href="{{ url('olahraga') }}" class="hover:text-primary">Olahraga</a>
    <a href="{{ url('kesehatan') }}" class="hover:text-primary">Kesehatan</a>
    <a href="{{ url('politik') }}" class="hover:text-primary">Politik</a>
    <a href="{{ url('pariwisata') }}" class="hover:text-primary">Pariwisata</a>
    <a href="{{ url('login') }}" class="hover:text-primary">Masuk</a>
  </div>

  <!-- Header -->
  <div class="w-full mb-16 bg-[#F6F6F6]">
    <h1 class="text-center font-bold text-2xl p-24">Semua Berita</h1>
  </div>

  <!-- Berita -->
  <div class=" flex flex-col gap-5">
    <!-- (items omitted for brevity) -->
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const dropdownMenu = document.getElementById("dropdown-menu");

      menuToggle.addEventListener("click", () => {
        if (dropdownMenu.classList.contains("hidden")) {
          dropdownMenu.classList.remove("hidden");
          dropdownMenu.classList.add("flex", "flex-col");
        } else {
          dropdownMenu.classList.remove("flex", "flex-col");
          dropdownMenu.classList.add("hidden");
        }
      });
    });
  </script>

</div>

@endsection
