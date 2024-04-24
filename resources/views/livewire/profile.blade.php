<x-slot:title>
    Profile
</x-slot:title>

<div class="space-y-10 my-10">
    <div class="flex gap-8 max-w-3xl bg-white p-7 rounded-md mx-auto">
        <p class="basis-1/3 flex items-center justify-center aspect-square bg-mist px-8 rounded-md text-6xl font-medium uppercase">
            {{ substr($data->username, 0, 1) }}
        </p>
        <div class="basis-2/3 space-y-2 w-full">
            <div class="space-y-0.5 border-b border-b-black w-full">
                <h4 class="text-black font-medium">Username</h4>
                <p class="p-0.5">{{ $data->username }}</p>
            </div>
            <div class="space-y-0.5 border-b border-b-black w-full">
                <h4 class="text-black font-medium">Email</h4>
                <p class="p-0.5">{{ $data->email }}</p>
            </div>
            <div class="space-y-0.5 border-b border-b-black w-full">
                <h4 class="text-black font-medium">Nama Lengkap</h4>
                <p class="p-0.5">{{ $data->nama_lengkap }}</p>
            </div>
            <div class="space-y-0.5 border-b border-b-black w-full">
                <h4 class="text-black font-medium">Alamat</h4>
                <p class="p-0.5">{{ $data->alamat }}</p>
            </div>
        </div>
    </div>

    @foreach ($data->foto()->latest('foto_id')->get() as $item)
        <livewire:post-card :data="$item" />
    @endforeach
</div>
