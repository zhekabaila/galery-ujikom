<x-slot:title>
    Buat Postingan
</x-slot:title>

<div class="w-1/2 bg-white p-7 rounded-md my-12">
    <h1 class="text-3xl font-medium text-primary mb-10">Buat Postingan</h1>
    <form wire:submit='save_foto' class="space-y-4">
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Judul</label>
            <input type="text" wire:model="judul" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none" />
            @error('judul') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col space-y-1">
            <label class="text-black text-base font-medium">Deskripsi</label>
            <textarea wire:model="deskripsi" class="px-2 py-1 w-full rounded-md bg-white border border-primary focus:outline-none"></textarea>
            @error('deskripsi') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col ">
            <label class="text-black text-base font-medium">Foto</label>
            <input type="file" wire:model="lokasi_file" class="px-2 py-1 w-full bg-white {{$lokasi_file ? 'border-x-2 border-t-2 border-b-0 rounded-t' : 'border-2 rounded-md'}} border-dashed border-primary focus:outline-none" />
            @error('lokasi_file') <span class="text-red-600 text-sm font-normal indent-1">{{ $message }}</span> @enderror
            @if ($lokasi_file)
                <img src="{{$lokasi_file->temporaryUrl()}}" alt="" class="rounded-b-md border-x-2 border-t-0 border-b-2 border-dashed border-primary p-2" />
            @endif
        </div>
        <div class="flex">
            <button type="submit">
                <p class="bg-primary text-white font-medium rounded-md px-8 py-1">Simpan</p>
            </button>
        </div>
    </form>
</div>
