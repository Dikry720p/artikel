@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="w-full">
  <!-- Nav -->
  <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
    <div class="flex gap-10 w-full">
      <!-- Logo dan Menu -->
      <div class="flex items-center justify-between w-full lg:w-auto">
        <!-- Logo -->
        <a href="{{ url('/') }}">
          <div class="flex items-center gap-2">
            <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="w-8 lg:w-10">
            <p class="text-lg lg:text-xl font-bold">Moco</p>
          </div>
        </a>
        <button class="lg:hidden text-primary text-2xl focus:outline-none" id="menu-toggle">
          ☰
        </button>
      </div>

      <!-- Menu Navigasi -->
      <div id="menu"
        class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-10 w-full lg:w-auto mt-5 lg:mt-0">
        <ul
          class="flex flex-col lg:flex-row items-start lg:items-center gap-4 font-medium text-base w-full lg:w-auto">
          <li><a href="{{ url('/') }}" class="text-primary hover:text-gray-600">Beranda</a></li>
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
        <input type="text" placeholder="Cari berita..."
          class="border border-slate-300 rounded-full px-4 py-2 pl-8 w-full text-sm font-normal lg:w-auto focus:outline-none focus:ring-primary focus:border-primary"
          id="searchInput" />
        <!-- Icon Search -->
        <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
          <img src="{{ asset('img/search.png') }}" alt="search" class="w-4">
        </span>
      </div>
      <a href="{{ url('login') }}"
        class="bg-primary px-8 py-2 rounded-full text-white font-semibold h-fit text-sm lg:text-base">
        Masuk
      </a>
    </div>
  </div>

  <!-- Menu Dropdown untuk Mobile -->
  <div id="dropdown-menu"
    class="hidden absolute top-0 left-0 w-full h-screen bg-white z-40 px-8 py-12 text-lg font-semibold shadow-md">
    <a href="{{ url('/') }}" class="block w-full py-2 hover:text-primary">Beranda</a>
    <a href="{{ url('gayahidup') }}" class="block w-full py-2 hover:text-primary">Gaya Hidup</a>
    <a href="{{ url('olahraga') }}" class="block w-full py-2 hover:text-primary">Olahraga</a>
    <a href="{{ url('kesehatan') }}" class="block w-full py-2 hover:text-primary">Kesehatan</a>
    <a href="{{ url('politik') }}" class="block w-full py-2 hover:text-primary">Politik</a>
    <a href="{{ url('pariwisata') }}" class="block w-full py-2 hover:text-primary">Pariwisata</a>
    <a href="{{ url('login') }}" class="block w-full py-2 hover:text-primary">Masuk</a>
  </div>

  <!-- swiper -->
  <div class="swiper mySwiper mt-9">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <a href="{{ url('detail-MotoGp') }}" class="block">
          <div
            class="relative flex flex-col gap-1 justify-end p-3 h-72 rounded-xl bg-[url('{{ asset('img/SW-Olahraga.png') }}')] bg-cover bg-center overflow-hidden">
            <div
              class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-[rgba(0,0,0,0.4)] to-[rgba(0,0,0,0)] rounded-b-xl">
            </div>
            <div class="relative z-10 mb-3" style="padding-left: 10px;">
              <div class="bg-primary text-white text-xs rounded-lg w-fit px-3 py-1 font-normal mt-3">Kesehatan</div>
              <p class="text-3xl font-semibold text-white mt-1">Cara Membuat Badan</p>
              <p class="text-3xl font-semibold text-white mt-1">Menjadi Ideal</p>
              <div class="flex items-center gap-1 mt-1">
                <img src="{{ asset('img/User.png') }}" alt="" class="w-5">
                <p class="text-white text-xs">Muhamad Rafli</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- (other slides omitted for brevity) -->

    </div>
  </div>

  <!-- (remaining content omitted for brevity) -->

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const dropdownMenu = document.getElementById("dropdown-menu");

      // Event untuk toggle dropdown menu (buka/close)
      menuToggle.addEventListener("click", () => {
        // If hidden, remove hidden and add flex + flex-col so layout is stacked; otherwise hide again
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
