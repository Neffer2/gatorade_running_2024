<div class="container py-1">
    <div class="card">
        <div class="card-header">
            <h3>Lista de corredores</h3>
        </div>
        <div class="card-body">
            <div class="row gy-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>N&uacute;mero</th>
                            <th>Correo</th>
                            <th>Foto</th>
                            <th class="text-center">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($corredores as $key => $corredor)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $corredor->name }}</td>
                                    <td>{{ $corredor->document }}</td>
                                    <td>{{ $corredor->phone }}</td>
                                    <td>{{ $corredor->email }}</td>
                                    <td>{{ $corredor->picture }}</td>
                                    <td class="text-center">
                                        <button wire:click="deleteCorredor({{ $corredor->id }})" wire:confirm="Estás seguro de eliminar a: {{ $corredor->name }}?" class="btn btn-danger">
                                            X
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $corredores->links() }}
            </div>
        </div> 
    </div> 
</div>
