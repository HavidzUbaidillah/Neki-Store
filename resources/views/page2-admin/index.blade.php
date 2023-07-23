<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neki Store : Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .sidebar {
            transform: translateX(-100%);
        }
        .sidebar.open {
            transform: translateX(0);
        }
        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
        .submenu.open {
            max-height: 200px;
        }
    </style>
</head>
<body>
<section id="header" class="z-10">
    <button class="absolute text-white text-3xl top-9 -left-3 cursor-pointer transition-opacity duration-1000 ease-in-out"
            onclick="openSidebar()" id="sidebar-open-button">
        <i class="bi bi-chevron-double-right px-2.5 py-1 bg-gray-900 rounded-md"></i>
    </button>

    <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-72 overflow-y-auto text-center bg-gray-900 transition-transform duration-500" style="z-index: 1000;">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
                <img src="{{asset('assets/img/home/neki-logo.png')}}" class="px-2 bg-gray-900 rounded-md" width="80" height="auto">
                <h1 class="font-bold text-gray-200 text-[15px] ml-3">Neki Store</h1>
                <button class="absolute text-black text-2xl top-9 left-60 cursor-pointer"
                        onclick="openSidebar()" id="sidebar-close-button">
                    <i class="bi bi-chevron-double-right px-2 py-1 bg-gray-200 rounded-md"></i>
                </button>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
        </div>
        <div class="my-3 bg-gray-600 h-[1px]"></div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
             onclick="dropdown()">
            <i class="bi bi-bag-fill"></i>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Products</span>
                <span class="text-sm rotate-0"  id="icon-dropdown">
            <i  class="bi bi-chevron-down"></i>
          </span>
            </div>
        </div>
        <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu" id="submenu">
            <h1 class="flex items-center justify-between cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                <span>Add New Product</span>
                <i class="bi bi-bag-plus text-xl"></i>
            </h1>
            <h1 class="flex items-center justify-between cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                <span>All Product</span>
                <i class="bi bi-bag text-xl"></i>
            </h1>
        </div>
        {{--//--}}
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
             onclick="dropdown1()">
            <i class="bi bi-emoji-heart-eyes-fill"></i>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Web Content</span>
                <span class="text-sm rotate-0"  id="icon-dropdown1">
            <i class="bi bi-chevron-down"></i>
          </span>
            </div>
        </div>
        <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold submenu" id="submenu1">
            <h1 class="flex items-center justify-between cursor-pointer mx-auto p-2 hover:bg-blue-600 rounded-md mt-1">
                <span>Top Product</span>
                <i class="bi bi-bag-heart text-xl"></i>
            </h1>
            <h1 class="flex items-center justify-between cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                <span>New Product</span>
                <i class="bi bi-basket-fill text-xl"></i>
            </h1>
            <h1 class="flex items-center justify-between cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                <span>Categories</span>
                <i class="bi bi-card-list text-xl"></i>
            </h1>
        </div>
        <div class="my-3 bg-gray-600 h-[1px]"></div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </div>
    </div>
</section>


<section id="header">
    <div class="w-full h-full">
        <div class="flex w-full bg-gray-700 h-20">
            <div class="w-50 mt-5 transition-opacity duration-100" id="header-logo">
             <div class="flex ml-12 text-2xl text-gray-50">
                 <img class="relative h-12" src="{{asset('assets/img/home/neki-logo.png')}}">
                 <span class="ml-2 mt-1"> Neki Store </span>
             </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full">
    <div class="relative">
        <div class="dark:bg-gray-800 dark:text-gray-50">
            <form method="post" action="#" class="py-8 grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
                <!-- Bagian input gambar -->
                <div class="my-auto py-6 md:py-0 md:px-6">
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md" id="image-container">
                        <div class="text-center">
                            <div class="mt-10" id="uploaded-image">
                                <i class="bi bi-image text-white text-4xl"></i>
                            </div>
                            <div class="flex text-sm mt-20 text-gray-600" id="caption-upload">
                                <label for="file-upload" class="relative px-3 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span class="">Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*">
                                </label>
                                <p class="pl-1 text-white">or drag and drop</p>
                            </div>
                            <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                <!-- Bagian form -->
                <div class="flex flex-col py-6 space-y-8 md:py-0 md:px-6">
                    <div class="py-8 text-base leading-6 space-y-8 text-gray-700 dark:text-white sm:text-lg sm:leading-7">
                        <div class="relative mt-3">
                            <input autocomplete="off" id="nama_produk" name="nama_produk" type="text" class="peer placeholder-transparent bg-transparent h-10 w-full border-b-2 border-gray-300 dark:text-white text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="nama_produk" />
                            <label for="nama_produk" class="absolute left-0 -top-4 dark:text-white text-gray-600 text-sm">Nama Produk</label>
                        </div>
                        <div class="relative mt-8">
                            <label for="kategori_produk" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-50">Kategori Produk</label>
                            <div class="relative">
                                <select id="kategori_produk" name="kategori_produk" class="block w-full px-4 py-2 pr-8 text-base border border-gray-300 rounded-md appearance-none focus:outline-none focus:border-blue-600 dark:bg-gray-800 dark:text-white">
                                    <option value="" disabled selected>Pilih kategori</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="relative mt-8">
                            <label for="deskripsi_produk" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-50">Deskripsi Produk</label>
                            <textarea id="deskripsi_produk" rows="4" class="p-2.5 w-full text-md text-gray-900 dark:text-gray-50 bg-gray-50 dark:bg-gray-600 rounded-lg" placeholder="Ketik deskripsi produk disini..."></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>

    <script>
        const fileUpload = document.getElementById("file-upload");
        const imageContainer = document.getElementById("image-container");
        const uploadedImage = document.getElementById("uploaded-image");

        fileUpload.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    uploadedImage.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover rounded-md" alt="Uploaded Image">`;
                };
                reader.readAsDataURL(file);
            }
        });
        let submenu = document.querySelector("#submenu");
        let submenu1 = document.querySelector("#submenu1");

        function dropdown() {
            var iconDropdown = document.getElementById('icon-dropdown');
            if (submenu1.classList.contains('open')){
               dropdown1();
            }
            submenu.classList.toggle("open");
            iconDropdown.classList.toggle("rotate-180", submenu.classList.contains('open'));
        }
        function dropdown1() {
            var iconDropdown = document.getElementById('icon-dropdown1');
            if (submenu.classList.contains('open')){
                dropdown();
            }
            submenu1.classList.toggle("open");
            iconDropdown.classList.toggle("rotate-180", submenu.classList.contains('open'));
        }
        function openSidebar() {
            var sidebar = document.querySelector(".sidebar");
            var sidebarOpenButton = document.getElementById("sidebar-open-button");
            var sidebarCloseButton = document.getElementById('sidebar-close-button');
            sidebar.classList.toggle("open");
            sidebarOpenButton.style.opacity = sidebar.classList.contains("open") ? 0 : 1;
            setTimeout(function() {
                sidebarCloseButton.classList.toggle("rotate-180", sidebar.classList.contains("open"));
                document.getElementById('header-logo').classList.toggle('opacity-0');
            }, 50);
        }
    </script>
</body>
</html>
