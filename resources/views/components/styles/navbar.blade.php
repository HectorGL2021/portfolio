@props(['class' => ''])

<style>
    /* Navbar */
    .navbar {
        background-color: rgba(36, 36, 36, 0.98);
        padding: 1rem 0;
        border-bottom: 1px solid rgba(51, 51, 51, 0.5);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        padding: 0.5rem 0;
        background-color: rgba(36, 36, 36, 0.98);
    }

    .navbar-brand {
        color: #ffffff !important;
        font-weight: 700;
        font-size: 1.5rem;
        position: relative;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .navbar-brand i {
        font-size: 1.75rem;
        color: #3b82f6;
        margin-right: 0.5rem;
        transition: all 0.3s ease;
    }

    .navbar-brand:hover i {
        transform: rotate(360deg);
        color: #60a5fa;
    }

    .navbar-brand span {
        background: linear-gradient(45deg, #3b82f6, #60a5fa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 800;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-item {
        margin: 0 0.25rem;
        list-style: none;
        position: relative;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.9) !important;
        font-weight: 500;
        padding: 0.5rem 1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .nav-link i {
        margin-right: 0.5rem;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .nav-link:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #3b82f6;
        transform: translateX(-50%);
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #ffffff !important;
        background-color: rgba(59, 130, 246, 0.1);
    }

    .nav-link:hover:before {
        width: 80%;
    }

    .nav-link:hover i {
        transform: translateY(-2px);
        color: #3b82f6;
    }

    .nav-link.active {
        color: #ffffff !important;
        background-color: rgba(59, 130, 246, 0.15);
    }

    .nav-link.active:before {
        width: 80%;
        background: #3b82f6;
    }

    .nav-link.active i {
        color: #3b82f6;
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar-toggler i {
        font-size: 1.5rem;
        color: #3b82f6;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover i {
        color: #60a5fa;
        transform: scale(1.1);
    }

    @media (max-width: 991.98px) {
        .navbar-collapse.show {
            display: flex !important;
            position: absolute;
            top: 100%;
            left: 1rem;
            right: 1rem;
            background-color: rgba(36, 36, 36, 0.98);
            padding: 1rem;
            border-radius: 0.75rem;
            margin-top: 0.5rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            animation: slideDown 0.3s ease-out forwards;
        }

        @keyframes slideDown {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            gap: 0.25rem;
        }

        .nav-item {
            width: 100%;
            margin: 0.25rem 0;
        }

        .nav-link {
            padding: 0.75rem 1rem;
            width: 100%;
            border-radius: 0.5rem;
        }

        .nav-link:before {
            display: none;
        }

        .nav-link:hover {
            transform: translateX(5px);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });
</script> 