<div>
    <div class="h-screen flex justify-center items-center">
        <form class="w-[500px]" wire:submit='login'>
            <x-common.alert />
            <div class="my-2 flex justify-between items-center">
                <div>
                    <h1 class="text-5xl font-bold">Login</h1>
                    <p class="mt-3">Bem-vindo ao app</p>
                </div>
                <x-common.themeSwitch />
            </div>
            <div class="mb-2">
                <label for="email">E-mail</label>
                <input type="text" placeholder="E-mail" class="input input-bordered w-full mt-1" wire:model='email' />
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
                <button class="btn btn-warning w-full">Entrar</button>
            </div>
            <div class="text-center">
                <p> -- --  --</p>
                <p">Não tem conta? <a href="{{ route('register') }}" wire:navigate class="text-warning font-bold">Registre-se!</a></p>
            </div>
        </form>
    </div>
</div>
