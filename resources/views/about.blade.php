@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 mb-4 text-white">Sobre Mí</h1>
            
            <!-- Información Personal -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3 text-white">Información Personal</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nombre:</strong> Hector Garcia</p>
                            <p><strong>Email:</strong> hector.d998@gmail.com</p>
                            <p><strong>Teléfono:</strong> +34-667-059-742</p>
                            <p><strong>Ubicación:</strong> Avinguda Pompeu Fabra, Barcelona</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Idiomas:</strong></p>
                            <ul class="list-unstyled">
                                <li>Castellano y catalán: Nativo</li>
                                <li>Inglés: Nivel B1</li>
                            </ul>
                            <p><strong>Otros:</strong></p>
                            <ul class="list-unstyled">
                                <li>Carné de conducir A y B</li>
                                <li>Vehículo propio</li>
                                <li>Disponibilidad total</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biografía -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3 text-white">Biografía</h2>
                    <p>Apasionado por la informática y el desarrollo tecnológico, con experiencia en desarrollo full stack, implantación de soluciones industriales y gestión de equipos. Me motiva el aprendizaje continuo y la optimización de procesos mediante tecnologías innovadoras.</p>
                    <p>Actualmente, trabajo como Técnico Implantador en Geprom (parte de Telefónica Tech), donde implemento soluciones de software personalizadas para la industria 4.0.</p>
                </div>
            </div>

            <!-- Formación Académica -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-3 text-white">Formación Académica</h2>
                    <div class="timeline">
                        <div class="timeline-item mb-4">
                            <h3 class="h5 text-primary">Grado Superior de desarrollo de aplicaciones web</h3>
                            <p class="text-light">Centro de estudios Politécnicos, Salesians de Sarrià</p>
                            <p class="text-light-50">Septiembre 2020 - Mayo 2021</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h3 class="h5 text-primary">Grado Superior de desarrollo de aplicaciones multiplataforma</h3>
                            <p class="text-light">Salesians de Sarrià</p>
                            <p class="text-light-50">Septiembre 2018 - Mayo 2020</p>
                        </div>
                        <div class="timeline-item">
                            <h3 class="h5 text-primary">Bachillerato Tecnológico</h3>
                            <p class="text-light">Salesians de Sarrià</p>
                            <p class="text-light-50">Septiembre 2016 - Mayo 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 