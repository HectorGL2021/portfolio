@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4 mb-4">Habilidades Técnicas</h1>

            <!-- Lenguajes de Programación -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3">Lenguajes de Programación</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-php fa-3x text-primary mb-2"></i>
                                <h3 class="h6">PHP</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-js fa-3x text-primary mb-2"></i>
                                <h3 class="h6">JavaScript</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-html5 fa-3x text-primary mb-2"></i>
                                <h3 class="h6">HTML5</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-css3-alt fa-3x text-primary mb-2"></i>
                                <h3 class="h6">CSS</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-java fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Java</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-csharp fa-3x text-primary mb-2"></i>
                                <h3 class="h6">C#</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Frameworks -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3">Frameworks</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-laravel fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Laravel</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-vuejs fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Vue.js</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-bootstrap fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Bootstrap</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-react fa-3x text-primary mb-2"></i>
                                <h3 class="h6">React</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-angular fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Angular</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bases de Datos -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-3">Bases de Datos</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-database fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Oracle</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-database fa-3x text-primary mb-2"></i>
                                <h3 class="h6">MySQL</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-database fa-3x text-primary mb-2"></i>
                                <h3 class="h6">PostgreSQL</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Herramientas y Otros -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-3">Herramientas y Otros</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fab fa-git-alt fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Git</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-code-branch fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Sourcetree</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-industry fa-3x text-primary mb-2"></i>
                                <h3 class="h6">SCADA/MES</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skill-item text-center p-3">
                                <i class="fas fa-server fa-3x text-primary mb-2"></i>
                                <h3 class="h6">Linux</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 