<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neki Store : Login Admin</title>
    <link rel="icon" href="https://cdn.discordapp.com/attachments/1104037466035466250/1132363566649987113/illust_108131235_20230619_132348.png">
    <style>
        body{
            background-image: url("https://cdn.discordapp.com/attachments/1104037466035466250/1132355100065681458/20230522_194233.jpg");
            background-size: cover;
        }
    </style>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body>
<div class="min-h-screen bg-black bg-opacity-60 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white dark:bg-gray-700 shadow-lg border-2 border-black sm:rounded-3xl sm:p-20">
            <div class="w-72 mx-auto">
                <div class="relative start-28">
                    <h1 class="text-2xl dark:text-white font-semibold">Login</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 dark:text-white sm:text-lg sm:leading-7">
                        <form id="loginForm">
                            @csrf
                            <div class="relative mt-3">
                                <input autocomplete="off" id="username" name="username" type="text" class="peer placeholder-transparent bg-transparent h-10 w-full border-b-2 border-gray-300 dark:text-white text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Username" />
                                <label for="username" class="absolute left-0 -top-3.5 dark:text-white text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-450 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 dark:peer-focus:text-white peer-focus:text-sm">Username</label>
                            </div>
                            <div class="relative mt-8">
                                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 dark:text-white bg-transparent text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                <button id="showHidePasswordBtn" type="button" class="absolute inset-y-0 right-1 flex items-center">
                                    <i id="passwordIcon" class="bi bi-eye-fill"></i>
                                </button>
                                <label for="password" class="absolute left-0 -top-3.5 dark:text-white text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 dark:peer-focus:text-white peer-focus:text-sm">Password</label>
                            </div>
                            <div class="relative mt-10 -mb-10">
                                <button id="submitButton" type="submit" class="relative -mx-1 mt-8 start-28 inline-flex items-center px-4 py-2 leading-6 text-sm shadow rounded-md text-white bg-indigo-500 hover:bg-indigo-400 transition ease-in-out duration-150">
                                    <svg id="loadingSpinner" class="hidden animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span id="submitText">Login</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('showHidePasswordBtn').addEventListener('click', togglePasswordVisibility);
    document.getElementById('submitButton').addEventListener('click', submitLoginForm);

    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('bi-eye-fill');
            passwordIcon.classList.add('bi-eye-slash-fill');
        } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('bi-eye-slash-fill');
            passwordIcon.classList.add('bi-eye-fill');
        }
    }

    async function submitLoginForm() {
        const form = document.getElementById('loginForm');
        let formData = new FormData(form);

        let submitText = document.getElementById('submitText');
        let loadingSpinner = document.getElementById('loadingSpinner');
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.classList.remove('start-28');
        submitButton.classList.remove('-mx-1');
        submitButton.classList.add('-mx-2');
        submitButton.classList.add('start-20');
        submitButton.classList.add('cursor-not-allowed');
        loadingSpinner.classList.remove('hidden');
        submitText.textContent = 'Processing...';

        try {
            let response = await fetch('/login-auth', { <!--GANTI SESUAI URL ROUTE::POST KALIAN-->
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(formData),
            });

            if (response.ok) {
                window.location.href = '/dashboard';  <!--GANTI SESUAI URL ROUTE untuk DASHBOARD KLEAN -->
            } else {
                resetLoginForm();
                const responseData = await response.json();
                const errorMessage = responseData.error;
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal',
                    text: errorMessage,
                })
            }
        } catch (error) {
            resetLoginForm();
            Swal.fire({
                icon: 'error',
                title: 'Login gagal',
                text: 'Terjadi Kesalahan saat mengirim permintaan',
            })
        }
    }

    function resetLoginForm() {
        let submitButton = document.getElementById('submitButton');
        let form = document.getElementById('loginForm');
        form.reset();
        submitButton.disabled = false;
        submitButton.classList.add('start-28');
        submitButton.classList.add('-mx-1');
        submitButton.classList.remove('-mx-2');
        submitButton.classList.remove('start-20');
        submitButton.classList.remove('cursor-not-allowed');
        let loadingSpinner = document.getElementById('loadingSpinner');
        loadingSpinner.classList.add('hidden');
        let submitText = document.getElementById('submitText');
        submitText.textContent = 'Login';
    }
</script>
</body>
</html>
