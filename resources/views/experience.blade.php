@extends('layouts.app')

@section('content')
<div class="container py-5 experience-section">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 mb-4">Experiencia Laboral</h1>

            <!-- Geprom -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h2 class="h4 mb-1">Técnico Implantador industria 4.0</h2>
                            <h3 class="h5 text-muted">Geprom Part of Telefonica Tech</h3>
                        </div>
                        <span class="badge bg-primary">Marzo 2023 - Actualidad</span>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Desarrollo e implementación de aplicaciones industriales a medida en CakePHP</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Creación e integración de APIs (propias y de terceros) para automatización de procesos</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Implementación de SCADA/MES Legato en proyectos industriales (SEAT, VW, Ravago, etc.)</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Creación de informes productivos mediante consultas SQL</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Administración y despliegue de servidores en diferentes entornos</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Diseño y gestión de bases de datos Oracle, MySQL y PostgreSQL</li>
                    </ul>
                </div>
            </div>

            <!-- Ormon -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h2 class="h4 mb-1">Desarrollador Full Stack & Responsable del Departamento de Informática</h2>
                            <h3 class="h5 text-muted">Ormon Global Asesores Logísticos</h3>
                        </div>
                        <span class="badge bg-primary">Junio 2021 - Marzo 2023</span>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Desarrollo y mantenimiento de la aplicación web principal en PHP, JavaScript, jQuery, CSS y Bootstrap</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Administración de servidores web mediante cPanel y bases de datos MySQL</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Integración con operadores logísticos mediante APIs REST/SOAP</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Desarrollo de una nueva aplicación en Laravel, SCSS, Bootstrap y JavaScript</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Coordinación del departamento de informática, optimizando recursos y procesos</li>
                    </ul>
                </div>
            </div>

            <!-- Avanttic -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h2 class="h4 mb-1">Consultor Forms & Reports</h2>
                            <h3 class="h5 text-muted">Avanttic ConsultoriaTecnológica</h3>
                        </div>
                        <span class="badge bg-primary">Abril 2019 - Junio 2020</span>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Mantenimiento de la aplicación interna de gestión de vacaciones</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Migraciones de Oracle Forms, trabajando con PL/SQL</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Desarrollo de aplicaciones en Oracle APEX</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 