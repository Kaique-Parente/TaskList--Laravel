<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Tasks-list</title>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
            @apply flex-auto rounded-md mt-5 px-8 py-2 text-center font-medium text-slate-700 shadow-sm ring-2 ring-slate-700/50 hover:bg-slate-300 hover:text-slate-900
        }

        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500
        }

        label {
            @apply block uppercase text-slate-700 mb-2 font-bold
        }

        input, textarea{
            @apply shadow-sm appearance-none outline-2 w-full py-2 px-3 text-slate-700 rounded-md focus:outline-slate-400 transition-colors duration-250
        }

        .error{
            @apply text-red-700 text-sm font-medium mt-1
        }

    </style>
    {{-- blade-formatter-enable --}}
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">@yield('title')</h1>

    <div x-data="{ flash: true }">
        @if (session()->has('success'))
            <div x-show="flash"
                class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
                role="alert">

                <strong class="font-bold">Sucess!</strong>
                <div>{{ session('success') }}</div>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg @click="flash = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" @click="flash = false" stroke="currentColor" class="h-6 w-6 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
        @endif

        <div>@yield('content')</div>
    </div>
</body>

</html>
