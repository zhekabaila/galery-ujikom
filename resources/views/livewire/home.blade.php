<x-slot:title>
    Home
</x-slot:title>

<div class="flex flex-col gap-y-12 py-20">
    @foreach($posts as $row)
        <livewire:post-card :data="$row" />
    @endforeach
</div>
