<div>
    <dialog id="AddPrizeModal" class="modal" wire:ignore.self>
        <div class="modal-box">
            <!-- Header -->
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-lg">Adicionar novo sorteio</h3>
                <form method="dialog">
                    <button class="btn btn-xs btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"> <path d="M18 6 6 18" /> <path d="m6 6 12 12" /></svg>
                    </button>
                </form>
            </div>
            <!-- Body -->
            <div x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false"
            x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">

                <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            
                <form class="mt-4" wire:submit='store'>
                    <div class="mb-2">
                        {{-- <label for="title">Título</label> --}}
                        <input type="text" placeholder="Título" class="input input-bordered w-full mt-1" wire:model='title' />
                        @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-2">
                        <input type="text" placeholder="Cotas do 1º prêmio instantâneo" class="input input-bordered w-full mt-1" wire:model='first_prize' />
                        @error('first_prize')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <input type="text" placeholder="Cotas do 2º prêmio instantâneo" class="input input-bordered w-full mt-1" wire:model='second_prize' />
                        @error('second_prize')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <input type="text" placeholder="Cotas do 3º prêmio instantâneo" class="input input-bordered w-full mt-1" wire:model='third_prize' />
                        @error('third_prize')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <input type="text" placeholder="Cotas do 4º prêmio instantâneo" class="input input-bordered w-full mt-1" wire:model='fourth_prize' />
                        @error('fourth_prize')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <input type="text" placeholder="Cotas do 5º prêmio instantâneo" class="input input-bordered w-full mt-1" wire:model='fifth_prize' />
                        @error('fifth_prize')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image">Imagem</label>
                        <input type="file" class="file-input file-input-bordered w-full" wire:model='image' accept="image/png,image/jpeg,image/jpg,image/gif" />
                        @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        @if ($image) 
                            <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-md object-contain my-2">
                        @endif
                    </div>

                    <div class="mb-2">
                        <button class="btn btn-warning w-full">Publicar</button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
</div>