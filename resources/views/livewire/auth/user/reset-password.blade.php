<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <x-auth-header :title="__('User Reset password')" :description="__('Please enter your new password below')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="resetPassword" class="flex flex-col gap-6">
                        <!-- Email Address -->
                        <flux:input wire:model="email" :label="__('Email')" type="email" required
                            autocomplete="email" />

                        <!-- Password -->
                        <flux:input wire:model="password" :label="__('Password')" type="password" required
                            autocomplete="new-password" :placeholder="__('Password')" viewable />

                        <!-- Confirm Password -->
                        <flux:input wire:model="password_confirmation" :label="__('Confirm password')" type="password"
                            required autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

                        <div class="flex items-center justify-end">
                            <flux:button type="submit" variant="primary" class="w-full">
                                {{ __('Reset password') }}
                            </flux:button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
