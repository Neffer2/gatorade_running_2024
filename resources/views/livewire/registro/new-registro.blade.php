<div class="container py-5">
    <div class="card">
        <div class="card-header">
            <h3>Registro de corredores</h3>
        </div>
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input id="nombre" type="text" class="form-control" placeholder="Nombre completo."
                        wire:model.change="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="documento" class="form-label">Documento de identidad: </label>
                        <input id="documento" type="text" class="form-control" placeholder="C.C."
                        wire:model.change="document">
                        @error('document')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numero" class="form-label">N&uacute;mero (WhatsApp): </label>
                        <input id="numero" type="text" class="form-control" placeholder="Tel&eacute;fono."
                        wire:model.change="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-label">Correo: </label>
                        <input id="email" type="text" class="form-control" placeholder="alguien@example.com"
                        wire:model.change="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="picture" class="form-label">C&oacute;digo de Foto: </label>
                        <input id="picture" type="text" class="form-control" placeholder="C&oacute;digo de Foto."
                        wire:model.change="picture">
                    </div>
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <button wire:click="store" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div> 
    </div>
</div>
