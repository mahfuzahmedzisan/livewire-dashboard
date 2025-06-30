<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.layouts.includes.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col">
    <x-frontend::header />
    <div class="flex flex-1">
        {{-- Sidebar --}}
        <x-frontend::sidebar />

        {{-- Main Content Area --}}
        <main class="flex-grow">
            {{ $slot }}
        </main>

    </div>
    <x-frontend::footer />

    @include('frontend.layouts.includes.scripts')
</body>

</html>
