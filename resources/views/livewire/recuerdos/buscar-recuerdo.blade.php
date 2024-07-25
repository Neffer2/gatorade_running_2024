<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input id="documento" type="text" class="form-control" placeholder="documento" wire:model.change="documento">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" wire:click="getRecuerdo">Buscar</button>
            </div>
        </div>
    </div>
</div>
