@props(['route' => '', 'active' => '', 'logout' => false, 'name' => ''])

@if ($logout)
    <div class="border-t border-border-black/10 dark:border-border-white/10 my-2"></div>
    {{-- <a href="javascript:void(0)"
        class="block px-4 py-2 text-text-dark-secondary  hover:bg-bg-black/10 dark:hover:bg-bg-white/10 transition-colors mx-1 rounded-md"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ $name }}</a> --}}

    <form id="logout-form" action="{{ $route }}" method="POST" class="mx-1 block">
        @csrf

        <button type="submit" class="block w-full px-4 py-2 text-text-dark-secondary  hover:bg-bg-black/10 dark:hover:bg-bg-white/10 transition-colors rounded-md text-left">
            {{ $name }}
        </button>
        
    </form>
@else
    <a href="{{ $route }}" wire:navigate
        class="block px-4 py-2 text-text-dark-secondary  hover:bg-bg-black/10 dark:hover:bg-bg-white/10 transition-colors mx-1 rounded-md">{{ $name }}</a>
@endif
