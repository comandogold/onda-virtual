@extends('layouts.app')

@section('content')
<style>
    .link-services{
        display: inline-block;
        position: absolute;
        float: left;
    }
</style>
    <div class="container">
        <h2>Servicios</h2>
        <hr>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Registro de Sociedades" src="/img/SERVICIOS/Registro_de_Sociedades.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">
                    <a class="text-dark" href="#">Registro de Decisiones Judiciales, Administrativas o Arbitrales</a>
                  </h4>
                  <p class="card-text mb-auto">La Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes  de inscripción de las Decisiones Judiciales, Administrativas o Arbitrales.</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">Solicitud de Certificación de Sociedades de Gestión Colectiva y Asuntos Judiciales.</h4>
                  <p class="card-text mb-auto">la Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes  de inscripción de los Convenios o contratos que celebren las Sociedades de Gestión...</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Solicitud de Certificación de Sociedades de Gestión Colectiva y Asuntos Judiciales." src="/img/SERVICIOS/IMAGENES(PORTAL ONDA)-22.jpg" data-holder-rendered="true">
              </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Registro de Sociedades" src="/img/SERVICIOS/REGISTRO DE PROGRAMA TV, RADIO PUBLICIDAD.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">
                    <a class="text-dark" href="#">Registro Programa TV</a>
                  </h4>
                  <p class="card-text mb-auto">La Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes&nbsp; de inscripción de Programa TV, dando fe de su existencia, con el fin...</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">Registro de Proyectos Arquitectónicos</h4>
                  <p class="card-text mb-auto">la Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes  de inscripción de los Convenios o contratos que celebren las Sociedades de Gestión...</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Solicitud de Certificación de Sociedades de Gestión Colectiva y Asuntos Judiciales." src="/img/SERVICIOS/PROYECTOS ARQUITECTONICOS.jpg" data-holder-rendered="true">
              </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Registro de Sociedades" src="/img/SERVICIOS/REGISTRO DE LETRA DE UNA CANCION.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">
                    <a class="text-dark" href="#">Registro de Canción (publicada)</a>
                  </h4>
                  <p class="card-text mb-auto">La Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes  de inscripción de obras, dando fe de su existencia, con el fin de concederle a lo...</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">Registro Programa de Radio</h4>
                  <p class="card-text mb-auto">La Oficina Nacional de Derecho de Autor (ONDA), por esta vía ofrece la tramitación de solicitudes  de inscripción de Programas de Radio, dando fe de su existencia, con el fin...</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Solicitud de Certificación de Sociedades de Gestión Colectiva y Asuntos Judiciales." src="/img/SERVICIOS/ESTACION DE RADIODIFUSORA SONORA.jpg" data-holder-rendered="true">
              </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Registro de Sociedades" src="/img/SERVICIOS/GUION CINEMATOGRAFICA.jpg">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">
                    <a class="text-dark" href="#">Registro de Guión Cinematográfico</a>
                  </h4>
                  <p class="card-text mb-auto">Este servicio de registro es el relato escrito de lo que va a suceder en la película. .</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                
              </div>
            </div>

            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h4 class="mb-0">Registro de Tesis</h4>
                  <p class="card-text mb-auto">Servicio que ofrece ONDA para el registro de Tesis, trabajo escrito de investigación.</p>
                  <a href=" {{ Route('formularios.index') }}">Registrar &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" alt="Solicitud de Certificación de Sociedades de Gestión Colectiva y Asuntos Judiciales." src="/img/SERVICIOS/REGISTRO DE TESIS.jpg" data-holder-rendered="true">
              </div>
            </div>
        </div>
        
        
    </div>
        
@endsection
