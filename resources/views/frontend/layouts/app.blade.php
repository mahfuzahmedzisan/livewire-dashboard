<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.includes.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">

    <x-frontend::header />
    <x-frontend::sidebar />
    <flux:main>
        {{ $slot }}
        <x-frontend::footer />
    </flux:main>
    @fluxScripts()
    @include('frontend.layouts.includes.scripts')
</body>

</html>
