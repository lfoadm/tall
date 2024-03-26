<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="cursor-pointer text-2xl" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" class="w-36 ">
        </a>
    </div>
    <div class="flex-none">
        <button class="btn btn-warning btn-sm mr-3" onclick="AddPrizeModal.showModal()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
             SORTEIO</button>
        <x-common.themeSwitch />
        <div class="dropdown dropdown-end ml-3">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    {{-- <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a> --}}
                </li>
                <li><a>Configurações</a></li>
                <li><a class="text-red-500" href="#" onclick="logoutModal.showModal()">Sair</a></li>
            </ul>
        </div>
    </div>
    <livewire:auth.logout />
    <livewire:prizes.add-prize />
</div>