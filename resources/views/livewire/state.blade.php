<div>
    <ul class="flex flex-col md:flex-row flex-wrap list-none pl-0 mb-4">
        <button wire:click="switch(1)" type="button" class="btn {{$active == 'crypto' ? 'bg-indigo-600 text-white'  :'text-indigo-600 border-indigo-600 bg-white' }} rounded-md mr-4" >
            Cryptocurrencies
        </button>
        <button wire:click="switch(2)" type="button" class="btn {{$active == 'etf' ? 'bg-indigo-600 text-white'  :'text-indigo-600 border-indigo-600 bg-white' }} rounded-md mr-4" >
            Stocks
        </button>
    </ul>
    @if($active == 'crypto')
    @livewire('crypto')
    @else
    @livewire('etf')
    @endif
</div>
