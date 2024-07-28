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
            {{-- <img src="{{ asset('assets/Rayo.svg') }}" class="rayos"> --}}
            <div class="card-header">
                C&Eacute;DULA
            </div>
            <div class="card-body">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-12">
                        <input id="documento" type="text" class="form-control" placeholder="C.C" wire:model.change="documento">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center" style="position: relative">
                        <img src="{{ asset('assets/Buscar.svg') }}" height="15" style="position: absolute; left: 25%; bottom: 25%;">
                        <button class="btn btn-primary" wire:click="getRecuerdo">BUSCAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @isset($recuerdo)
        <div class="foto-container">
            <div class="foto" style="background-image: url({{ asset('assets/'.$recuerdo->picture.'.jpg') }});"></div>
        </div>
        <div class="download-container">
            <a class="btn btn-primary mt-3" style="position: relative;">
                <img src="{{ asset('assets/Descargar.svg') }}" height="15" style="position: absolute; left: 25%; bottom: 25%;">
                DESCARGAR
            </a>
        </div>
        <div class="social-container">
            <img src="{{ asset('assets/X.svg') }}">
            <img src="{{ asset('assets/IG.svg') }}">
            <img src="{{ asset('assets/FB.svg') }}">
        </div>
        <div class="separator"></div>
        <div class="copy-container">
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolorum velit, iusto facilis ab ullam, distinctio aspernatur magnam laborum, id non mollitia. Sapiente laborum veniam possimus provident voluptatibus eligendi quod.
            </p>
        </div>
    @else 
        <div style="height: 50vh;"></div>
    @endisset
</div>
