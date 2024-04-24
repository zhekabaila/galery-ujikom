<x-slot:title>
    {{$post->judul_foto}}
</x-slot:title>

<div class="space-y-5 max-w-3xl bg-white rounded-md p-7 mx-auto my-12 w-full">
    {{-- Header --}}
    <div class="flex gap-x-3">
        <div>
            <a href="{{ route('profile') }}" class="flex items-center justify-center aspect-square bg-mist px-5 rounded-md text-xl font-medium uppercase">
                {{ substr($post->user->username, 0, 1) }}
            </a>
        </div>
        <div class="space-y-1">
            <h3 class="text-black text-base font-medium hover:text-primary hover:underline">
                <a href="{{ route('user.profile', $post->user->username) }}">{{$post->user->username}}</a>
            </h3>
            <p class="text-black text-xs font-light">{{ $post->tanggal_unggah }}</p>
        </div>
    </div>
    {{-- Header --}}

    {{-- Body --}}
    <div class="w-full">
        <img src="{{ Illuminate\Support\Facades\Storage::url($post->lokasi_file) }}" alt="" class="aspect-auto w-full h-auto rounded-md" />
    </div>
    <h3 class="font-medium">{{ $post->judul_foto }}</h3>
    <p>{{ $post->deskripsi_foto }}</p>
    <div class="flex items-center justify-between gap-x-8">
        <div class="flex items-center gap-x-8">
            @auth
                <button wire:click='like({{ $post->foto_id }})' class="flex items-center gap-x-2">
                    @if (App\Models\Like::where('user_id', auth()->user()->user_id)->where('foto_id', $post->foto_id)->exists())
                        <img src="{{asset('icons/HiHeart 1.svg')}}" />
                    @else
                    <img src="{{asset('icons/HiOutlineHeart 1.svg')}}" />
                    @endif
                        <p>{{ $post->like->count() }}</p>
                </button>
            @else
                <a href="{{route('login')}}" class="flex items-center gap-x-2">
                    <img src="{{asset('icons/HiOutlineHeart 1.svg')}}" />
                    <p>{{ $post->like->count() }}</p>
                </a>
            @endauth
            <label for="isi_komentar" class="flex items-center gap-x-2 cursor-pointer">
                <img src="{{ asset('icons/HiOutlineChatAlt 1.svg') }}" />
                <p>{{ $post->komentar->count() }}</p>
            </label>
        </div>
        @auth
            @if (auth()->user()->user_id === $post->user_id)
                <div class="flex items-center gap-x-8">
                    <a href="{{ route('update.post', $post->foto_id) }}">
                        <img src="{{ asset('icons/HiOutlinePencilAlt 1.svg') }}" alt="">
                    </a>
                    <a href="{{ route('delete.post', $post->foto_id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')">
                        <img src="{{ asset('icons/HiOutlineTrash 1.svg') }}" alt="">
                    </a>
                </div>
            @endif
        @endauth
    </div>

    <form wire:submit="save_komentar" class="flex items-center gap-x-3">
        <p class="flex items-center justify-center aspect-square bg-mist px-3 rounded-md text-lg font-medium uppercase">
                {{ substr(auth()->user()->username ?? 'A', 0, 1) }}
        </p>
        <input type="text" wire:model="isi_komentar" id="isi_komentar" class="px-2 py-1 w-full rounded-full bg-white border border-primary focus:outline-none" />
        <button type="submit">
            <img src="{{asset('icons/HiPaperAirplane 1.svg')}}" alt="" class="flex items-center justify-center bg-primary rounded-md p-2" />
        </button>
    </form>

    <div class="space-y-2 flex flex-col items-center">
        <h2 class="text-mist text-xl font-medium">Komentar</h2>
        <div class="bg-mist h-0.5 w-full"></div>
    </div>

    <div class="flex flex-col gap-y-8 w-1/2">
        @foreach ($post->komentar()->latest('komentar_id')->get() as $komen)
            <div class="flex gap-x-4">
                <div>
                    @if ($komen->user_id)
                        <a href="{{ route('user.profile', $komen->user->username) }}" class="flex items-center justify-center aspect-square bg-mist px-3 rounded-md text-lg font-medium uppercase">
                            {{ substr(auth()->user()->username ?? 'A', 0, 1) }}
                        </a>
                    @else
                        <p class="flex items-center justify-center aspect-square bg-mist px-3 rounded-md text-lg font-medium uppercase">
                            {{ substr(auth()->user()->username ?? 'A', 0, 1) }}
                        </p>
                    @endif
                </div>
                <div class="space-y-4">
                    @if ($komen->user_id)
                        <h4 class="text-black font-medium">
                            <a href="{{route('user.profile', $komen->user->username)}}">
                                {{$komen->user->username}}
                            </a>
                        </h4>
                    @else
                        <h4 class="text-black font-medium">Anonymous</h4>
                    @endif
                    <p class="text-xs font-light">{{$komen->tanggal_komentar}}</p>
                    <div>
                        <p>{{$komen->isi_komentar}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Body --}}
</div>
