<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neki-Store : Home</title>
    @vite('resources/css/app.css')
</head>
<body>
<section id="header">
    <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="/" class="flex items-center">
                <img src="{{asset('assets/img/home/neki-logo.png')}}" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Neki Store</span>
            </a>
            <button data-collapse-toggle="nav-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div id="nav-menu" class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="nav-dropdown-button" data-dropdown-toggle="dropdown-content" data-dropdown-trigger="hover" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-900 rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"  fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Top Product</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Catalog</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Visit Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="dropdown-menu" class="hidden animate-fade-in mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white dark:md:bg-gray-600 border-y dark:bg-gray-800 dark:border-gray-600">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content1</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content1.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content2</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content2.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content3</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content3.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content4</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content4.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content5</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content5.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Content6</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Field Content6</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section id="main" class="w-full">
    <div class="w-1/2 border-2 border-amber-400">
        Moh.Alu
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.querySelector('[data-collapse-toggle="nav-menu"]');
        const navbar = document.getElementById('nav-menu');
        const navMenu = document.getElementById('dropdown-menu');

        button.addEventListener('click', function() {
            if (!navMenu.classList.contains('hidden')){
                navMenu.classList.add('hidden');
            }
            navbar.classList.toggle('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('nav-dropdown-button');
        const dropdown = document.getElementById('dropdown-menu');
        let timeoutId;

        function showDropdown() {
            clearTimeout(timeoutId);
            if (window.innerWidth >= 768) {
                dropdown.classList.remove('hidden');
                dropdown.classList.remove('animate-fade-out');
            }
        }

        function hideDropdown() {
            timeoutId = setTimeout(function() {
                if (window.innerWidth >= 768) {
                    dropdown.classList.add('animate-fade-out');
                    setTimeout(function() {
                        dropdown.classList.add('hidden');
                        dropdown.classList.remove('animate-fade-out');
                    }, 100);
                }
            }, 100);
        }

        function toggleDropdown() {
            if (window.innerWidth < 768) {
                dropdown.classList.toggle('hidden');
                dropdown.classList.remove('animate-fade-out');
            }
        }

        button.addEventListener('click', toggleDropdown);
        button.addEventListener('mouseover', showDropdown);
        button.addEventListener('mouseout', hideDropdown);
        dropdown.addEventListener('mouseover', showDropdown);
        dropdown.addEventListener('mouseout', hideDropdown);

        window.addEventListener('resize', function() {
            hideDropdown();
        });
    });

</script>

</body>
</html>
