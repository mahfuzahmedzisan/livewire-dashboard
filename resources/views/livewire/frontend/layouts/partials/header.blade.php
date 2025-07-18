<section class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:header class="container mx-auto">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" />
        <flux:brand href="{{ url('/') }}" wire:navigate logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
            class="max-lg:hidden dark:hidden" />
        <flux:brand href="{{ url('/') }}" wire:navigate logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
            name="Acme Inc." class="max-lg:hidden! hidden dark:flex" />
        <flux:navbar class="-mb-px max-lg:hidden">

            <flux:navbar.item href="{{ url('/') }}" wire:navigate
                class="@if (isset($page_slug) && $page_slug == 'home') bg-red-500 !text-white @endif">
                Home
            </flux:navbar.item>
            <flux:navbar.item href="" wire:navigate>
                Products
            </flux:navbar.item>
            <flux:separator vertical variant="subtle" class="my-2" />
            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon:trailing="chevron-down">Categories</flux:navbar.item>
                <flux:navmenu>
                    <flux:navmenu.item href="#">Electronics</flux:navmenu.item>
                    <flux:navmenu.item href="#">Fashion</flux:navmenu.item>
                    <flux:navmenu.item href="#">Home & Garden</flux:navmenu.item>
                    <flux:navmenu.separator />
                    <flux:navmenu.item href="#">View all categories</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>
        <flux:spacer />
        <flux:navbar class="me-4">
            <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon="bell" badge="3" />
                <flux:navmenu>
                    <flux:navmenu.item href="#">New comment on your post</flux:navmenu.item>
                    <flux:navmenu.item href="#">New like on your photo</flux:navmenu.item>
                    <flux:navmenu.item href="#">New follower</flux:navmenu.item>
                    <flux:navmenu.separator />
                    <flux:navmenu.item href="#">View all notifications</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>
        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:menu>
                <flux:menu.item icon="user">Profile</flux:menu.item>
                <flux:menu.item icon="cog-6-tooth">Settings</flux:menu.item>
                <flux:menu.separator />
                <flux:menu.item icon="arrow-right-start-on-rectangle"
                    onclick="document.getElementById('logout').submit()">Logout</flux:menu.item>
                <form action="{{ route('logout') }}" method="POST" id="logout">
                    @csrf

                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>
</section>
