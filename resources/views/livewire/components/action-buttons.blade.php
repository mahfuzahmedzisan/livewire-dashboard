<div class="flex flex-wrap items-center justify-center gap-3" x-data="{ open: false }">
    <!-- Drag icon -->
    <span class="reorder cursor-move text-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-layout-grid-icon lucide-layout-grid">
            <rect width="7" height="7" x="3" y="3" rx="1" />
            <rect width="7" height="7" x="14" y="3" rx="1" />
            <rect width="7" height="7" x="14" y="14" rx="1" />
            <rect width="7" height="7" x="3" y="14" rx="1" />
        </svg>
    </span>

    <!-- Dropdown container -->
    <div class="relative dropdown">
        <!-- Toggle button -->
        <button type="button" class="action-btn btn btn-ghost btn-circle text-black dark:text-white"
            @click="open = !open" @click.outside="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-settings-icon lucide-settings">
                <path
                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <ul class="menu menu-sm dropdown-content bg-base-100 dark:bg-gray-900 text-gray-800 dark:text-white rounded-box shadow min-w-44 w-fit mt-2 right-0 z-50 transition-all duration-200 ease-in-out"
            x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" style="display: none;">
            @foreach ($processedMenuItems as $menuItem)
                <li>
                    <a href="{{ $menuItem['href'] }}" target="{{ $menuItem['target'] ?? '' }}"
                        title="{{ $menuItem['title'] ?? '' }}"
                        class="px-4 py-2 text-sm rounded-md text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-150 ease-in-out {{ $menuItem['className'] ?? '' }} block"
                        @if ($menuItem['is_delete']) @click="open = false; confirmDelete(() => document.getElementById('{{ $menuItem['div_id'] }}').submit())"
                        @elseif ($menuItem['is_p_delete'])
                            @click="open = false; confirmPermanentDelete(() => document.getElementById('{{ $menuItem['div_id'] }}').submit())"
                        @elseif ($menuItem['is_issue'])
                            @click="open = false; confirmBookIssue(() => window.location.href = '{{ $menuItem['route'] }}')" @endif
                        @if (isset($menuItem['data-id'])) data-id="{{ $menuItem['data-id'] }}" @endif>
                        {{ __($menuItem['label']) }}
                    </a>

                    @if ($menuItem['is_delete'] || $menuItem['is_p_delete'])
                        <form id="{{ $menuItem['div_id'] }}" action="{{ $menuItem['route'] }}" method="POST"
                            class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
    });
</script>
