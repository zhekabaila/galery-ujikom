<x-slot:title>
    Buat Akun
</x-slot:title>

<div class="flex flex-col my-20 max-w-md space-y-9 bg-white p-7 rounded-md mx-auto">
    <div class="space-y-1 w-full">
        <h1 class="text-primary text-3xl font-bold">Register</h1>
        <p class="text-black text-base font-normal">register terlebih dahulu untuk mendapatkan <br /> pengalaman yang lebih.</p>
    </div>
    <form wire:submit="register" class="space-y-3 w-full">
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Username</label>
            <input type="text" wire:model="username" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('username') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Email</label>
            <input type="email" wire:model="email" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('email') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Nama Lengkap</label>
            <input type="text" wire:model="nama_lengkap" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('nama_lengkap') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Alamat</label>
            <textarea wire:model="alamat" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none"></textarea>
            @error('alamat') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Password</label>
            <input type="password" wire:model="password" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('password') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Konfirmasi Password</label>
            <input type="password" wire:model="password_confirmation" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('password_confirmation') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <button type="submit" class="bg-primary text-white font-medium rounded-md px-5 py-1 w-full">Register</button>
        </div>
    </form>
    <div class="bg-mist h-0.5 w-full"></div>
    <p class="text-center">
        Sudah mempunyai akun? <a href="{{route('login')}}" wire:navigate class="text-primary underline">Login</a>
    </p>
</div>
