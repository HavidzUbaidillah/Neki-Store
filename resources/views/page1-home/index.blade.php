<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neki-Store : Home</title>
    @vite('resources/css/app.css')
    <style>
        .navbar ul li::after {
            content: '';
            height: 3px;
            width: 0;
            background: firebrick;
            position: absolute;
            left: 0;
            bottom: -7px;
            transition: 0.35s;
        }

        .navbar ul li:hover:after {
            width: 100%;
        }
    </style>
</head>
<body>
<section id="header">
    <nav class="border-gray-600 bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <div class="flex items-center">
                <img src="{{asset('assets/img/home/neki-logo.png')}}" class="h-9 mr-3" alt="Neki-Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Neki Store</span>
            </div>
            <div class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="relative inline-block group">
                            <span class="relative block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0 md:dark:hover:text-blue-400" aria-current="page">Home</span>
                            <span class="absolute w-full h-1 bg-blue-500 transform origin-left scale-x-0 transition-transform duration-200 ease-in-out group-hover:scale-x-100"></span>
                        </a>
                    </li>
                    <li>
                        <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white md:w-auto md:border-0
                                md:hover:text-blue-500 md:p-0 dark:text-white ">Categories
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="relative inline-block group">
                            <span class="relative block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0 md:dark:hover:text-blue-400" aria-current="page">Top Product</span>
                            <span class="absolute w-full h-1 bg-blue-500 transform origin-left scale-x-0 transition-transform duration-200 ease-in-out group-hover:scale-x-100"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative inline-block group">
                            <span class="relative block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0 md:dark:hover:text-blue-400" aria-current="page">Brand</span>
                            <span class="absolute w-full h-1 bg-blue-500 transform origin-left scale-x-0 transition-transform duration-200 ease-in-out group-hover:scale-x-100"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative inline-block group">
                            <span class="relative block py-2 pl-3 pr-4 text-white hover:text-blue-400 md:p-0 md:dark:hover:text-blue-400" aria-current="page">Official Store</span>
                            <span class="absolute w-full h-1 bg-blue-500 transform origin-left scale-x-0 transition-transform duration-200 ease-in-out group-hover:scale-x-100"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="dropdown1-menu" class="transition mt-1 border-gray-300 shadow-sm bg-cyan-50 border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu1</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu2</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu3</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu4</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu5</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Menu6</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Foo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>



{{--<div class="relative mx-auto w-full max-w-md sm:max-w-xl md:max-w-full pt-6">--}}
{{--    <div class="w-60 h-60 mx-auto rounded-full overflow-hidden border-4 border-blue-600">--}}
{{--        <div class="transform transition-transform--}}
{{--        duration-500 ease-in-out scale-110 hover:scale-150">--}}
{{--            <img src="{{asset('assets/img/home/noa-profile.jpg')}}" width="270" height="270">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="mt-2 sm:mt-10 sm:m-8 border-t border-gray-400 pt-3 text-center">--}}
{{--        <div class="border-b border-gray-400 pb-3">--}}
{{--            <p class="text-black start-1 font-bold md:text-center">Ushio <span class="text-sky-600"> Noa</span></p>--}}
{{--        </div>--}}
{{--        <div class="md:text-left md:mx-10 md:mt-3">--}}
{{--            Ushio Noa adalah siswa Millennium Sience School tahun ke-2, dia adalah seorang--}}
{{--            Sekretaris di klub Seminar Millennium dan merupakan murid kesayangan gwe &#9829;--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>

</html>
