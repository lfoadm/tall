<div>
    <!-- Open the modal using ID.showModal() method -->
    {{-- <button class="btn" onclick="my_modal_1.showModal()">open modal</button> --}}
    <dialog id="logoutModal" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Confirme a sua saída!</h3>
        <p class="py-1">Esta ação finaliza sua sessão</p>
        <div class="modal-action">
            
            <button class="btn btn-error btn-sm" wire:click='logout'>Sair</button>
            
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
    </dialog>
</div>
