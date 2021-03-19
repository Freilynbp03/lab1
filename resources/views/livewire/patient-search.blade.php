<div class="relative">
    <input
        type="text"
        class="form-input"
        placeholder="Search Contacts..."
        wire:model="query"
        wire:keydown.escape="reset"
        wire:keydown.tab="reset"
        wire:keydown.ArrowUp="decrementHighlight"
        wire:keydown.ArrowDown="incrementHighlight"
        wire:keydown.enter="selectContact"
    />

    <div wire:loading class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>

    @if(!empty($query))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="reset"></div>

        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
            @if(!empty($patients))
                @foreach($patients as $i => $patient)
                    <a
                        href="{{ route('show-patient', $patient['id']) }}"
                        class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                    >{{ $patient['name'] }}</a>
                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>