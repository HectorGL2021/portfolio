@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold mb-4 text-white">Hector Garcia</h1>
                        <h2 class="h3 mb-4 text-white-50">Desarrollador Full Stack</h2>
                        <p class="lead mb-4 text-white-50">Apasionado por la informática y el desarrollo tecnológico, especializado en soluciones web y aplicaciones industriales.</p>
                        <div class="d-flex gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contactar</a>
                            <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Sobre Mí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <x-code-window />
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Desarrollo Web</h3>
                            <p>Experiencia en desarrollo full stack con Laravel, Vue.js y tecnologías modernas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-industry fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Industria 4.0</h3>
                            <p>Implementación de soluciones industriales y sistemas SCADA/MES.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-database fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Bases de Datos</h3>
                            <p>Experiencia con Oracle, MySQL y PostgreSQL en entornos empresariales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 