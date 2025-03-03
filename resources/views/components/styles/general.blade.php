@props(['class' => ''])

<style>
    :root {
        /* Paleta de colores principal */
        --primary-color: #2d3436;      /* Fondo principal */
        --secondary-color: #1e1e1e;    /* Fondo secundario */
        --accent-color: #0984e3;       /* Color de acento (azul) */
        --accent-hover: #0773c5;       /* Color de acento hover */
        --text-primary: #ffffff;       /* Texto principal */
        --text-secondary: #b2bec3;     /* Texto secundario */
        --text-muted: #636e72;         /* Texto atenuado */
        
        /* Colores de acento */
        --accent-blue: #0984e3;        /* Azul principal */
        --accent-blue-light: #74b9ff;  /* Azul claro */
        --accent-purple: #6c5ce7;      /* Púrpura */
        --accent-pink: #e84393;        /* Rosa */
        
        /* Colores de estado */
        --success: #0984e3;            /* Azul */
        --warning: #fdcb6e;            /* Amarillo */
        --danger: #d63031;             /* Rojo */
        --info: #0984e3;               /* Azul */
    }

    body {
        background-color: #1a1a1a;
        color: #d4d4d4;
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        padding-top: 76px; /* Altura de la navbar */
    }

    /* Estilos de texto unificados */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Fira Code', monospace;
        color: var(--text-primary);
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    /* Títulos de sección */
    .display-4 {
        font-family: 'Fira Code', monospace;
        font-size: 2.5rem;
        font-weight: 600;
        color: var(--accent-blue-light);
        margin-bottom: 2rem;
        padding-top: 1rem;
        position: relative;
    }

    .display-4::before {
        content: '// ';
        color: var(--accent-color);
        opacity: 0.8;
    }

    .display-4::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        left: 0;
        width: 60px;
        height: 2px;
        background: var(--accent-color);
        box-shadow: 0 0 8px var(--accent-color);
        border-radius: 1px;
    }

    h1 {
        font-size: 2.75rem;
        font-weight: 600;
        color: var(--accent-blue-light);
    }

    h2 {
        font-size: 2rem;
        font-weight: 600;
        color: var(--accent-color);
    }

    h3 {
        font-size: 1.5rem;
        font-weight: 500;
        color: #ffffff;
    }

    h4 {
        font-size: 1.25rem;
        font-weight: 500;
        color: var(--text-secondary);
    }

    p {
        color: var(--text-secondary);
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
    }

    .lead {
        color: var(--text-secondary);
        font-size: 1.25rem;
        font-weight: 300;
    }

    /* Enlaces */
    a {
        color: var(--accent-color);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: var(--accent-hover);
    }

    /* Cards */
    .card {
        background-color: var(--secondary-color);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 2rem;
    }

    /* Iconos */
    .fas, .fab {
        color: var(--accent-color);
    }

    /* Secciones */
    section, 
    .container {
        padding-top: 2rem;
    }

    /* Contenedores */
    .container {
        max-width: 1200px;
        padding: 0 2rem;
    }

    /* Botones */
    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
        color: var(--text-primary);
    }

    .btn-primary:hover {
        background-color: var(--accent-hover);
        border-color: var(--accent-hover);
        transform: translateY(-2px);
    }

    .btn-outline-light {
        border: 2px solid var(--text-primary);
        color: var(--text-primary);
    }

    .btn-outline-light:hover {
        background-color: var(--text-primary);
        color: var(--primary-color);
        transform: translateY(-2px);
    }

    /* Utilidades de texto */
    .text-primary {
        color: var(--accent-color) !important;
    }

    .text-secondary {
        color: var(--text-secondary) !important;
    }

    .text-muted {
        color: var(--text-muted) !important;
    }

    /* Logo personalizado estilo programador */
    .logo {
        font-family: 'Fira Code', monospace;
        font-weight: 700;
        font-size: 1.5rem;
        color: var(--text-primary);
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .logo::before {
        content: '<';
        color: var(--accent-color);
        font-size: 1.8rem;
        line-height: 1;
    }

    .logo::after {
        content: '/>';
        color: var(--accent-color);
        font-size: 1.8rem;
        line-height: 1;
    }

    .logo span {
        position: relative;
        z-index: 1;
        color: var(--accent-color);
        text-shadow: 0 0 10px rgba(9, 132, 227, 0.3);
    }

    .logo span::before {
        content: '$';
        color: var(--accent-blue-light);
        margin-right: 0.2rem;
        font-weight: 400;
    }

    .logo:hover span {
        color: var(--accent-blue-light);
        text-shadow: 0 0 15px rgba(9, 132, 227, 0.5);
    }

    .logo:hover::before,
    .logo:hover::after {
        color: var(--accent-blue-light);
    }

    /* Animaciones */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 0.6s ease forwards;
    }

    /* Contenedor principal */
    main {
        min-height: calc(100vh - 76px);
    }
</style> 