

<?php $__env->startSection('title', 'Author'); ?>

<?php $__env->startSection('content'); ?>
    <div class="">
        <!-- Nav -->
        <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
            <div class="flex gap-10 w-full">
                <!-- Logo dan Menu -->
                <div class="flex items-center justify-between w-full lg:w-auto">
                    <!-- Logo -->
                    <a href="<?php echo e(url('/')); ?>">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo e(asset('img/Logo.png')); ?>" alt="Logo" class="w-8 lg:w-10">
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
                        <li><a href="<?php echo e(url('/')); ?>" class="hover:text-primary">Beranda</a></li>
                        <li><a href="<?php echo e(url('gayahidup')); ?>" class="hover:text-primary">Gaya Hidup</a></li>
                        <li><a href="<?php echo e(url('olahraga')); ?>" class="hover:text-primary">Olahraga</a></li>
                        <li><a href="<?php echo e(url('kesehatan')); ?>" class="hover:text-primary">Kesehatan</a></li>
                        <li><a href="<?php echo e(url('politik')); ?>" class="hover:text-primary">Politik</a></li>
                        <li><a href="<?php echo e(url('pariwisata')); ?>" class="hover:text-primary">Pariwisata</a></li>
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
                        <img src="<?php echo e(asset('img/search.png')); ?>" alt="search" class="w-4">
                    </span>
                </div>
                <a href="<?php echo e(url('login')); ?>"
                    class="bg-primary px-8 py-2 rounded-full text-white font-semibold h-fit text-sm lg:text-base">
                    Masuk
                </a>
            </div>
        </div>

        <!-- Menu Dropdown untuk Mobile -->
        <div id="dropdown-menu"
            class="hidden absolute top-0 left-0 w-full h-screen bg-[#E3E3E3] z-40 px-8 py-12 text-lg font-semibold shadow-md">
            <a href="<?php echo e(url('/')); ?>" class="block w-full py-2 hover:text-primary">Beranda</a>
            <a href="<?php echo e(url('gayahidup')); ?>" class="block w-full py-2 hover:text-primary">Gaya Hidup</a>
            <a href="<?php echo e(url('olahraga')); ?>" class="block w-full py-2 hover:text-primary">Olahraga</a>
            <a href="<?php echo e(url('kesehatan')); ?>" class="block w-full py-2 hover:text-primary">Kesehatan</a>
            <a href="<?php echo e(url('politik')); ?>" class="block w-full py-2 hover:text-primary">Politik</a>
            <a href="<?php echo e(url('pariwisata')); ?>" class="block w-full py-2 hover:text-primary">Pariwisata</a>
            <a href="<?php echo e(url('login')); ?>" class="block w-full py-2 hover:text-primary">Masuk</a>
        </div>

        <!-- Author -->
        <div class="flex gap-4 items-center mb-10 text-white p-10 bg-[url('<?php echo e(asset('img/bg-profile.png')); ?>')] bg-cover">
            <img src="<?php echo e(asset('img/profile.png')); ?>" alt="profile" class="rounded-full max-w-28 ">
            <div class="">
                <p class="font-bold text-lg">Queen Fayola S</p>
                <p>Queen Fayola S, an expert content writer at Moco,
                    continually
                    acquires <br>
                    valuable knowledge in web
                    techonology, UI UX design, CEO, and business. <br>This knowledge is shared freely with the extensive
                    community
                    in indonesia</p>
            </div>
        </div>

        <!-- Berita -->
        <div class=" flex flex-col gap-5 px-4 lg:px-14">
            <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
                <a href="<?php echo e(url('pariwisata')); ?>">
                    <div
                        class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
                        <div
                            class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
                            Pariwisata</div>
                        <img src="<?php echo e(asset('img/Berita-Liburan.png')); ?>" alt="" class="w-full rounded-xl mb-3">
                        <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
                        <p class="text-slate-400">22 Januari 2024</p>
                    </div>
                </a>
                <a href="<?php echo e(url('politik')); ?>">
                    <div
                        class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
                        <div
                            class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
                            Politik</div>
                        <img src="<?php echo e(asset('img/Berita-Demo.png')); ?>" alt="" class="w-full rounded-xl mb-3">
                        <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
                        <p class="text-slate-400">22 Januari 2024</p>
                    </div>
                </a>
                <a href="<?php echo e(url('olahraga')); ?>">
                    <div
                        class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
                        <div
                            class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
                            Olahraga</div>
                        <img src="<?php echo e(asset('img/Berita-Motor.png')); ?>" alt="" class="w-full rounded-xl mb-3">
                        <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
                        <p class="text-slate-400">22 Januari 2024</p>
                    </div>
                </a>
                <a href="<?php echo e(url('gayahidup')); ?>">
                    <div
                        class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
                        <div
                            class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
                            Gaya Hidup</div>
                        <img src="<?php echo e(asset('img/Berita-Golf.png')); ?>" alt="" class="w-full rounded-xl mb-3">
                        <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
                        <p class="text-slate-400">22 Januari 2024</p>
                    </div>
                </a>
            </div>

            <!-- (Remaining repeated content omitted for brevity in this patch) -->
            <!-- Pagination -->
            <div class="w-full flex items-center justify-center gap-3 pt-12 mb-10">
                <p class="border border-slate-300 rounded-lg px-4 py-2 font-medium text-slate-300 hover:cursor-pointer">&lt;
                </p>
                <p
                    class="rounded-lg px-4 py-2 font-medium bg-primary text-white hover:bg-slate-300 hover:text-black hover:cursor-pointer">
                    1</p>
                <p
                    class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
                    2</p>
                <p
                    class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white hover:cursor-pointer">
                    3</p>
                <p class="border border-slate-300 rounded-lg px-4 py-2 font-medium">...</p>
                <p
                    class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white">
                    10</p>
                <p
                    class="border border-slate-300 rounded-lg px-4 py-2 font-medium hover:bg-primary hover:border-none hover:text-white">
                    ></p>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
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

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\OLDMAN\Documents\GitHub\artikel\aertikel\resources\views/author.blade.php ENDPATH**/ ?>