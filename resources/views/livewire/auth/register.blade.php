<div>
    <div class="h-screen flex justify-center items-center">
        <form wire:submit='register' class="w-[500px]">
            <div class="my-2 flex justify-between items-center">
                <div>
                    <h1 class="text-5xl font-bold">Registro</h1>
                    <p class="mt-3">Bem-vindo ao app</p>
                </div>
                <x-common.themeSwitch />
            </div>            
            <div class="mb-2">
                <label for="name">Nome</label>
                <input type="text" placeholder="Nome" class="input input-bordered w-full mt-1" id="name" wire:model='name' />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="email">E-mail</label>
                <input type="email" placeholder="E-mail" class="input input-bordered w-full mt-1" wire:model='email' />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Senha</label>
                <input type="password" placeholder="Senha" class="input input-bordered w-full mt-1" wire:model='password' />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Confirme a senha</label>
                <input type="password" placeholder="Confirme a senha" class="input input-bordered w-full mt-1" wire:model='password_confirmation' />
            </div>

            <div class="mb-2">
                <button class="btn btn-warning w-full">Entrar</button>
            </div>
            <div class="text-center">
                <p> -- --  --</p>
                <p">Já tem conta? <a href="{{ route('login') }}" wire:navigate class="text-warning font-bold">Entrar!</a></p>
            </div>
        </form>
    </div>
</div>