<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Neki Store : Login Admin</title>
    <style>
        body{
            background-image: url("https://cdn.discordapp.com/attachments/1104037318521798746/1104424255053123625/Millennium_Campus.webp");
            background-size: cover;
        }
    </style>
</head>
<body>
<!-- component -->
<div class="min-h-screen bg-black bg-opacity-60 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white dark:bg-gray-700 shadow-lg border-2 border-black sm:rounded-3xl sm:p-20">
            <div class="w-72 mx-auto">
                <div class="relative start-28">
                    <h1 class="text-2xl dark:text-white font-semibold">Login</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 dark:text-white sm:text-lg sm:leading-7">
                        <div class="relative">
                            <input autocomplete="off" id="username" name="username" type="text" class="peer placeholder-transparent
                            bg-transparent h-10 w-full border-b-2 border-gray-300 dark:text-white text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Username" />
                            <label for="username" class="absolute left-0 -top-3.5 dark:text-white text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-450 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 dark:peer-focus:text-white peer-focus:text-sm">Username</label>
                        </div>
                        <div class="relative">
                            <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full
                            border-b-2 border-gray-300 dark:text-white bg-transparent text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                            <label for="password" class="absolute left-0 -top-3.5 dark:text-white text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 dark:peer-focus:text-white peer-focus:text-sm">Password</label>
                        </div>
                        <div class="relative">
                            <button id="submitButton" type="submit" class="relative -mx-1 mt-8 start-28 inline-flex items-center px-4 py-2 leading-6 text-sm shadow rounded-md text-white bg-indigo-500
                            hover:bg-indigo-400 transition ease-in-out duration-150">
                                <svg id="loadingSpinner" class="hidden animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span id="submitText">Login</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('submitButton').addEventListener('click', function (){
        var submitText = document.getElementById('submitText');
        var loadingSpinner = document.getElementById('loadingSpinner');
        this.disabled = true;
        this.classList.remove('start-28');
        this.classList.remove('-mx-1');
        this.classList.add('-mx-2');
        this.classList.add('start-20');
        this.classList.add('cursor-not-allowed');
        loadingSpinner.classList.remove('hidden');
        submitText.textContent = 'Processing...';
    });
    function submitClick() {
        submitButton = document.getElementById('submitButton');
    }
</script>
</body>
</html>
