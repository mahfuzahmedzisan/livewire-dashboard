<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.layouts.includes.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col">
    
    <div class="flex flex-1">
        {{-- Sidebar --}}
        <x-frontend::sidebar :page_slug="$page_slug ?? null" />

        {{-- Main Content Area --}}
        <div class="flex-grow">
            {{ $slot }}
        </div>

    </div>
    <x-frontend::footer />

    @include('frontend.layouts.includes.scripts')
</body>

</html>
