<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="w-full">
    <div class="relative bg-white overflow-hidden">
        <div class="w-full flex flex-col justify-center items-center banner">
            <h1 class="ml-8 text-5xl font-bold text-white">Welcome To Fruit Website</h1>
            <h2 class="text-2xl ml-8 lg:mt-8 lg:mb-8 font-medium text-white">Find fact any fruits for healthy life</h2>
        </div>
    </div>

    <h2 class="text-2xl text-center my-8 font-bold">Find Your Favorite Fruit</h2>



    <div class="mx-12 grid grid-cols-4 gap-8">
        @foreach ($data as $item)
            <div class="h-auto rounded-2xl hover:bg-black hover:text-white cursor-pointer fruit-card"
                data-modal-toggle="fruit-modal-{{ $item->name }}">
                <img class="rounded-t-2xl" src="{{ asset('images/hero-image.jpg') }}" alt="fruit">
                <h3 class="text-center font-bold my-4">{{ $item->name }}</h3>
                <div id="fruit-modal-{{ $item->name }}" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                            
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-black dark:text-gray-400">
                                    Name: {{$item->name}}
                                </p>
                                <p class="text-base leading-relaxed text-black dark:text-gray-400">
                                    Genus: {{$item->genus}}
                                </p>
                                <p class="text-base leading-relaxed text-black dark:text-gray-400">
                                    family: {{$item->family}}
                                </p>
                                <p class="text-base leading-relaxed text-black dark:text-gray-400">
                                    Order: {{$item->order}}
                                </p>
                                <p class="text-base leading-relaxed text-black dark:text-gray-400">
                                    Nutritions:
                                </p>
                                <ul class="pl-10 list-disc text-black">
                                    @foreach ($item->nutritions as $key => $value)
                                        <li>{{$value}} {{$key}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/flowbite.js') }}"></script>

</html>
