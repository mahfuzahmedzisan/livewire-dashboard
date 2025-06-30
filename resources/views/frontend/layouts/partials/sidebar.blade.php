<flux:sidebar stashable sticky
    class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
    <flux:brand href="{{ url('/') }}" wire:navigate logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
        class="px-2 dark:hidden" />
    <flux:brand href="{{ url('/') }}" wire:navigate logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
        name="Acme Inc." class="px-2 hidden dark:flex" />
    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="{{ url('/') }}" wire:navigate current>Home</flux:navlist.item>
        <flux:navlist.item icon="shopping-cart" href="#">Products</flux:navlist.item>
        <flux:separator variant="subtle" class="my-2" />
        <flux:navlist.group expandable heading="Categories" class="max-lg:hidden">
            <flux:navlist.item href="#">Electronics</flux:navlist.item>
            <flux:navlist.item href="#">Fashion</flux:navlist.item>
            <flux:navlist.item href="#">Home & Garden</flux:navlist.item>
            <flux:separator />
            <flux:navlist.item href="#">View all categories</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>
    <flux:spacer />
    <flux:navlist variant="outline">
        <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
    </flux:navlist>
</flux:sidebar>
