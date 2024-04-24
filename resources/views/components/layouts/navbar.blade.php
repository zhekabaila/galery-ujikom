<header>
    <nav class="flex items-center justify-between bg-white py-5 px-40">
        <h1 class="text-primary text-2xl font-bold">
            <a href="{{ route('home') }}" wire:navigate>Galery</a>
        </h1>
        <div class="flex items-center gap-x-4">
            @auth
            <a href="{{ route('create.post') }}" wire:navigate class="bg-primary rounded-md px-8 py-1 text-white font-medium">Buat Postingan</a>
            <a href="{{ route('profile') }}" wire:navigate class="flex items-center justify-center aspect-square bg-mist px-3 rounded-md text-lg font-medium uppercase">
                {{ substr(auth()->user()->username, 0, 1) }}
            </a>
            <a href="{{ route('logout') }}" wire:navigate class="bg-heart rounded-md py-1 px-4 text-white font-medium">
                {{-- <img src="{{ asset('icons/HiOutlineLogout.svg') }}" alt=""> --}}
                Logout
            </a>
            @else
                <a href="{{ route('register') }}" wire:navigate class="bg-white border border-primary rounded-md px-8 py-1 text-primary font-medium">Daftar</a>
                <a href="{{ route('login') }}" wire:navigate class="bg-primary border border-primary rounded-md px-8 py-1 text-white font-medium">Masuk</a>
            @endauth
        </div>
    </nav>
</header>
