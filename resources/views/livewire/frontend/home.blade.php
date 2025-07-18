<main class="h-full">
    <div class="container mx-auto h-full flex items-center justify-center flex-col">
        <div class="text-center p-6 bg-white dark:bg-zinc-800 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-zinc-900 dark:text-white mb-4">Welcome to {{ config('app.name') }}!
            </h1>
            <p class="text-zinc-700 dark:text-zinc-300">This is a sample content area.</p>
        </div>
        <div class="text-center p-6 bg-white dark:bg-zinc-600 rounded-lg shadow-lg mt-4">
            <flux:heading size="xl">Authentication Area</flux:heading>
            <p class="text-zinc-700 dark:text-zinc-300">Please log in or register to continue.</p>
            <flux:button.group class="mt-4 justify-center">

                @auth('web')
                    <flux:button wire:navigate href="{{ route('dashboard') }}" variant="primary" color="emerald">
                        User Dashboard
                    </flux:button>
                @else
                    <flux:button wire:navigate href="{{ route('login') }}" variant="primary">Login</flux:button>
                    <flux:button wire:navigate href="{{ route('register') }}">Register</flux:button>
                @endauth
                @auth('admin')
                    <flux:button wire:navigate href="{{ route('admin.dashboard') }}" variant="primary" color="violet">
                        Admin
                        Dashboard
                    </flux:button>
                @else
                    <flux:button wire:navigate href="{{ route('admin.login') }}" variant="danger">Admin Login</flux:button>
                @endauth              
            </flux:button.group>
        </div>
    </div>
</main>
