@props(['class' => ''])

<style>
    /* Hero Section */
    .hero-section {
        background-color: #1a1a1a;
        min-height: calc(100vh - 76px);
        display: flex;
        align-items: center;
        padding: 2rem 0;
        margin-top: -2rem;
    }

    .hero-content {
        padding: 2rem 0;
    }

    .hero-content h1 {
        font-family: 'Fira Code', monospace;
        font-size: 3.5rem;
        font-weight: 600;
        line-height: 1.1;
        margin-bottom: 1rem;
        color: var(--accent-blue-light);
        position: relative;
    }

    .hero-content h1::before {
        content: 'class ';
        color: #569cd6;
        font-size: 2rem;
        display: block;
        margin-bottom: 0.5rem;
    }

    .hero-content h1::after {
        content: ' {}';
        color: #d4d4d4;
        font-size: 3rem;
    }

    .hero-content h2 {
        font-family: 'Fira Code', monospace;
        font-size: 1.75rem;
        font-weight: 500;
        line-height: 1.3;
        margin-bottom: 1.5rem;
        color: var(--accent-color);
        margin-left: 2rem;
        position: relative;
    }

    .hero-content h2::before {
        content: '// ';
        color: #6a9955;
        opacity: 0.8;
    }

    .hero-content p {
        font-family: 'Inter', sans-serif;
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1.6;
        margin-bottom: 2rem;
        color: #d4d4d4;
        margin-left: 2rem;
        opacity: 0.9;
        max-width: 600px;
        position: relative;
    }

    .hero-content p::before {
        content: '/* ';
        color: #6a9955;
        font-family: 'Fira Code', monospace;
    }

    .hero-content p::after {
        content: ' */';
        color: #6a9955;
        font-family: 'Fira Code', monospace;
    }
</style> 