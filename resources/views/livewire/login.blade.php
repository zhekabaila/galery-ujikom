<x-slot:title>
    Login
</x-slot:title>

<div class="flex flex-col mt-20 max-w-md space-y-9 bg-white p-7 rounded-md mx-auto">
        <div class="space-y-1 w-full">
            <h1 class="text-primary text-3xl font-bold">Login</h1>
            <p class="text-black text-base font-normal">login terlebih dahulu untuk mendapatkan <br /> pengalaman yang lebih.</p>
        </div>
        <form wire:submit="login" class="space-y-3 w-full">
            <div class="flex flex-col space-y-1">
                <label class="text-black text-base font-medium">Email</label>
                <input type="email" wire:model="email" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
                @error('email') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label class="text-black text-base font-medium">Password</label>
                <input type="password" wire:model="password" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
                @error('password') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col space-y-1">
                <button type="submit">

                    <p class="bg-primary text-white font-medium rounded-md px-5 py-1 w-full">Login</p>
                </button>
            </div>
        </form>
        <div class="bg-mist h-0.5 w-full"></div>
        <p class="text-center">
            Belum mempunyai akun? <a href="{{route('register')}}" wire:navigate class="text-primary underline">Register</a>
        </p>
</div>
