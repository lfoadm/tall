<div>
    <dialog id="logoutModal" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Confirme a sua saída!</h3>
        <p class="py-1">Esta ação finaliza sua sessão</p>
        <div class="modal-action">
            
            <button class="btn btn-error btn-sm" wire:click='logout'>Sair</button>
            
            <form method="dialog">
                <button class="btn btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
    </dialog>
</div>
