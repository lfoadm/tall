<div>
    <div class="px-2 flex justify-center flex-col items-center">
        <div class="grid grid-cols-1 md:grid-col-2 xl:grid-cols-3 gap-2">
            @if(count($prizes) > 0)
            @foreach($prizes as $prize)

            <div class="card w-96 bg-base-300 shadow-xl">
                <a href="{{ route('show.prize', ['id' => $prize->id]) }}" wire:navigate>
                    <figure>
                        <img src="{{ asset('storage/'.$prize->image) }}" alt="file" class="h-60 object-cover w-full" />
                    </figure>
                </a>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $prize->title }}
                        
                        <div class="badge badge-success">NOVO</div>
                    </h2>
                    <p class="text-sm">{{ $prize->created_at->format('d/m/Y h:m:s') }}</p>
                    
                    
                    <a class="btn btn-warning w-full mt-6" href="{{ route('show.prize', ['id' => $prize->id]) }}" wire:navigate><div class="badge badge-outline">Concorra!</div></a>
                </div>
            </div>
            @endforeach
            @else
            <p>Sem promoçÕes cadastradas.</p>
            @endif
        </div>
    </div>
</div>