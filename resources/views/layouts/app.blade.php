<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tasks-list</title>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
            @apply flex-auto rounded-md mt-5 px-8 py-2 text-center font-medium text-slate-700 shadow-sm ring-2 ring-slate-700/10 hover:bg-slate-300 hover:text-slate-900
        }

        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500
        }
    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">@yield('title')</h1>

    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div>@yield('content')</div>
</body>

</html>
