<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neki-Store : Home</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="relative mx-auto w-full max-w-md sm:max-w-xl md:max-w-full pt-6">
    <div class="w-60 h-60 mx-auto rounded-full overflow-hidden border-4 border-blue-600">
        <div class="transform transition-transform
        duration-500 ease-in-out scale-110 hover:scale-150">
            <img src="{{asset('assets/img/home/noa-profile.jpg')}}" width="270" height="270">
        </div>
    </div>
    <div class="mt-2 sm:mt-10 sm:m-8 border-t border-gray-400 pt-3 text-center">
        <div class="border-b border-gray-400 pb-3">
            <p class="text-black start-1 font-bold md:text-center">Ushio <span class="text-sky-600"> Noa</span></p>
        </div>
        <div class="md:text-left md:mx-10 md:mt-3">
            Ushio Noa adalah siswa Millennium Sience School tahun ke-2, dia adalah seorang
            Sekretaris di klub Seminar Millennium dan merupakan murid kesayangan gwe &#9829;
        </div>
    </div>
</div>
</body>
</html>
