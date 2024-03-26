<div class="flex justify-center px-30 lg:px-96">
    <div class="card w-96 bg-secondary-200 shadow-xl">
        <figure><img src="{{ asset('storage/'.$prize->image) }}" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="text-3xl font-bold text-warning">{{ $prize->title }}</h2>

            @if ($prize->first_prize)
            <div>
                <h2 class="text-lg font-bold">Cotas premiadas <strong class="text-blue-300">R$ 100,00</strong></h2>
                <p class="text-sm">{{ $prize->first_prize }}</p>
            </div>
            @endif
            @if ($prize->second_prize)
            <div>
                <h2 class="text-lg font-bold">Cotas premiadas <strong class="text-blue-300">R$ 200,00</strong></h2>
                <p class="text-sm">{{ $prize->second_prize }}</p>
            </div>
            @endif

            @if ($prize->third_prize)
            <div>
                <h2 class="text-lg font-bold">Cotas premiadas <strong class="text-blue-300">R$ 300,00</strong></h2>
                <p class="text-sm">{{ $prize->third_prize }}</p>
            </div>
            @endif

            @if ($prize->fourth_prize)
            <div>
                <h2 class="text-lg font-bold">Cotas premiadas <strong class="text-blue-300">R$ 400,00</strong></h2>
                <p class="text-sm">{{ $prize->fourth_prize }}</p>
            </div>
            @endif

            @if ($prize->fifth_prize)
            <div>
                <h2 class="text-lg font-bold">Cotas premiadas <strong class="text-blue-300">R$ 300,00</strong></h2>
                <p class="text-sm">{{ $prize->fifth_prize }}</p>
            </div>
            @endif

            <div class="stats shadow">
                <div class="stat bg-slate-100">
                    <div class="stat-figure text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-title">Likes</div>
                    <div class="stat-value text-primary">25K</div>
                    <div class="stat-desc">21% vendido</div>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <div >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus"><path d="M5 12h14"/></svg>
                </div>
                    <input type="text" class="input input-bordered w-full m-3" />
                    @error('second_prize')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                </div>
            </div>

            <div class="card-actions justify-end">
                <button class="btn btn-warning text-xl w-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
                    Participar <strong>R$0,99</strong></button>
            </div>
        </div>
    </div>


</div>

{{-- <div class="px-10 lg:px-32">
    <p class="text-2xl font-bold">{{ $prize->title }}</p>
    <p class="text-sm">{{ $prize->created_at->format('d/m/Y h:m:s') }}</p>
    <img src="{{ asset('storage/'.$prize->image) }}" alt="{{ $prize->title }}"
        class="w-100 rounded-lg object-contain mt-4" />
</div> --}}