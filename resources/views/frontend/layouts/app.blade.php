<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <livewire:frontend.layouts.includes.head />
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col">
    <livewire:frontend.layouts.partials.header />
    <div class="flex flex-1">
        {{-- Sidebar --}}
        <livewire:frontend.layouts.partials.sidebar :page_slug="$page_slug ?? null" />

        {{-- Main Content Area --}}
        <div class="flex-grow">
            {{ $slot }}
        </div>

    </div>
    <livewire:frontend.layouts.partials.footer />

    <livewire:frontend.layouts.includes.scripts />
</body>

</html>
