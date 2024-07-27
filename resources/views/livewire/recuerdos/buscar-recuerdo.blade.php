<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="navbrand-container">
            <img src="{{ asset('assets/Logo_Team_GatoradePersonajes.png') }}" alt="">
        </div>
    </nav>
    <div class="hero">
        <img src="{{ asset('assets/SigueSudando_1@2x.png') }}" alt="">
    </div>
    <div class="form-container">
        <p>INGRESA Y ENCUENTRA <b>TU FOTO</b></p>
        <div class="card">
            <img src="{{ asset('assets/Rayo.svg') }}" class="rayos">
            <div class="card-header">
                C&Eacute;DULA
            </div>
            <div class="card-body">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-4">
                        <input id="documento" type="text" class="form-control" placeholder="C.C" wire:model.change="documento">
                    </div>
                    <div class="col-md-2 d-flex justify-content-center" style="position: relative">
                        <img src="{{ asset('assets/Buscar.svg') }}" height="15" style="position: absolute; left: 25%; bottom: 25%;">
                        <button class="btn btn-primary" wire:click="getRecuerdo">BUSCAR</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{-- <img src="{{ asset('assets/Logo_Team_GatoradePersonajes.png') }}" alt=""> --}}
        </div>
    </div> 
    <div class="foto-container">
        <div class="foto">
            <img src="{{ asset('assets/example.jpg') }}" alt="">
        </div>
    </div>
</div>
