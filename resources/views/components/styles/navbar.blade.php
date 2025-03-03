@props(['class' => ''])

<style>
    /* Navbar */
    .navbar {
        background-color: var(--secondary-color);
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
        backdrop-filter: blur(10px);
        background-color: rgba(30, 30, 30, 0.95);
    }

    .navbar-brand {
        color: #ffffff !important;
        font-weight: 600;
    }

    .nav-link {
        color: #ffffff !important;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        opacity: 1;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: var(--text-secondary);
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: var(--text-primary);
    }

    .navbar-dark .navbar-nav .nav-link.active {
        color: var(--accent-color);
    }

    .navbar-dark .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--accent-color);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .navbar-dark .navbar-nav .nav-link:hover::after,
    .navbar-dark .navbar-nav .nav-link.active::after {
        width: 80%;
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar-toggler-icon {
        background-image: none;
        position: relative;
        width: 24px;
        height: 2px;
        background-color: var(--text-primary);
        transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
        content: '';
        position: absolute;
        width: 24px;
        height: 2px;
        background-color: var(--text-primary);
        transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before {
        top: -6px;
    }

    .navbar-toggler-icon::after {
        bottom: -6px;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        background-color: transparent;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
        transform: rotate(45deg);
        top: 0;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
        transform: rotate(-45deg);
        bottom: 0;
    }
</style> 