<div class="space-y-5 max-w-3xl bg-white rounded-md p-7 mx-auto w-full">
    {{-- Header --}}
    <div class="flex gap-x-3">
        <div>
            <a href="{{ route('profile') }}" wire:navigate class="flex items-center justify-center aspect-square bg-mist px-5 rounded-md text-xl font-medium uppercase">
                {{ substr($data->user->username, 0, 1) }}
            </a>
        </div>
        <div class="space-y-1">
            <h3 class="text-black text-base font-medium hover:text-primary hover:underline">
                <a href="{{ route('user.profile', $data->user->username) }}" wire:navigate>{{$data->user->username}}</a>
            </h3>
            <p class="text-black text-xs font-light">{{ $data->tanggal_unggah }}</p>
        </div>
    </div>
    {{-- Header --}}

    {{-- Body --}}
    <div class="w-full">
        <img src="{{ Illuminate\Support\Facades\Storage::url($data->lokasi_file) }}" alt="" class="aspect-auto w-full h-auto rounded-md" />
    </div>
    <h3 class="font-medium">{{ $data->judul_foto }}</h3>
    <p>{{ $data->deskripsi_foto }}</p>
    <div class="flex items-center justify-between gap-x-8">
        <div class="flex items-center gap-x-8">
            @auth
                <button wire:click='like({{ $data->foto_id }})' class="flex items-center gap-x-2">
                    @if (App\Models\Like::where('user_id', auth()->user()->user_id)->where('foto_id', $data->foto_id)->exists())
                        <img src="{{asset('icons/HiHeart 1.svg')}}" />
                    @else
                        <img src="{{asset('icons/HiOutlineHeart 1.svg')}}" />
                    @endif
                    <p>{{ $data->like->count() }}</p>
                </button>
            @else
                <a href="{{route('login')}}" class="flex items-center gap-x-2">
                    <img src="{{asset('icons/HiOutlineHeart 1.svg')}}" />
                    <p>{{ $data->like->count() }}</p>
                </a>
            @endauth
            <a href="{{ route('detail.post', $data->foto_id) }}" wire:navigate class="flex items-center gap-x-2">
                <img src="{{ asset('icons/HiOutlineChatAlt 1.svg') }}" />
                <p>{{ $data->komentar->count() }}</p>
            </a>
        </div>
        @auth
            @if (auth()->user()->user_id === $data->user_id)
                <div class="flex items-center gap-x-8">
                    <a href="{{ route('update.post', $data->foto_id) }}">
                        <img src="{{ asset('icons/HiOutlinePencilAlt 1.svg') }}" alt="">
                    </a>
                    <a href="{{ route('delete.post', $data->foto_id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')">
                        <img src="{{ asset('icons/HiOutlineTrash 1.svg') }}" alt="">
                    </a>
                </div>
            @endif
        @endauth
    </div>
    {{-- Body --}}
</div>
