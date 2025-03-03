@props(['class' => ''])

<style>
    /* Code Window */
    .code-window {
        background-color: #1e1e1e;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2),
                    0 4px 8px rgba(0, 0, 0, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    .code-window::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            rgba(255, 255, 255, 0.1) 0%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0.1) 100%);
    }

    .code-header {
        background: linear-gradient(to bottom, #2d2d2d, #252525);
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .code-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .code-button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        position: relative;
        transition: transform 0.2s ease;
    }

    .code-button:hover {
        transform: scale(1.1);
    }

    .code-button.red { 
        background-color: #ff5f56;
        box-shadow: 0 0 8px rgba(255, 95, 86, 0.5);
    }
    .code-button.yellow { 
        background-color: #ffbd2e;
        box-shadow: 0 0 8px rgba(255, 189, 46, 0.5);
    }
    .code-button.green { 
        background-color: #27c93f;
        box-shadow: 0 0 8px rgba(39, 201, 63, 0.5);
    }

    .code-content {
        padding: 2rem;
        position: relative;
        font-size: 1.1rem;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    .code-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, 
            rgba(255, 255, 255, 0.05) 0%,
            rgba(255, 255, 255, 0.1) 50%,
            rgba(255, 255, 255, 0.05) 100%);
    }

    .code-content pre {
        margin: 0;
        font-family: 'Fira Code', monospace;
        line-height: 1.8;
        position: relative;
        white-space: pre;
        overflow-x: hidden;
    }

    .code-content code {
        color: #d4d4d4;
        text-shadow: none;
    }

    /* Resaltado de sintaxis estilo VS Code */
    .code-content .keyword { 
        color: #569cd6; /* Palabras clave en azul */
        font-weight: 500;
    }
    .code-content .string { 
        color: #ce9178; /* Strings en naranja */
        font-style: italic;
    }
    .code-content .comment { 
        color: #6a9955; /* Comentarios en verde */
        font-style: italic;
    }
    .code-content .function { 
        color: #dcdcaa; /* Funciones en amarillo */
        font-weight: 500;
    }
    .code-content .class { 
        color: #4ec9b0; /* Clases en turquesa */
        font-weight: 500;
    }
    .code-content .variable { 
        color: #9cdcfe; /* Variables en azul claro */
    }
    .code-content .number { 
        color: #b5cea8; /* Números en verde claro */
    }
    .code-content .operator { 
        color: #d4d4d4; /* Operadores en blanco */
    }
    .code-content .punctuation { 
        color: #d4d4d4; /* Puntuación en blanco */
    }
    .code-content .property { 
        color: #9cdcfe; /* Propiedades en azul claro */
    }
    .code-content .method { 
        color: #dcdcaa; /* Métodos en amarillo */
    }
    .code-content .constant { 
        color: #4fc1ff; /* Constantes en azul */
    }
    .code-content .type { 
        color: #4ec9b0; /* Tipos en turquesa */
    }

    /* Colores específicos para PHP */
    .code-content .php-variable { 
        color: #9cdcfe; /* Variables PHP ($) en azul claro */
    }
    .code-content .php-array { 
        color: #b5cea8; /* Arrays en verde claro */
    }
    .code-content .php-constant { 
        color: #4fc1ff; /* Constantes PHP en azul */
    }
    .code-content .php-function { 
        color: #dcdcaa; /* Funciones PHP en amarillo */
    }
    .code-content .php-class { 
        color: #4ec9b0; /* Clases PHP en turquesa */
    }
    .code-content .php-namespace { 
        color: #569cd6; /* Namespaces en azul */
    }
    .code-content .php-use { 
        color: #569cd6; /* Use statements en azul */
    }
    .code-content .php-return { 
        color: #569cd6; /* Return en azul */
    }
    .code-content .php-public { 
        color: #569cd6; /* Public en azul */
    }
    .code-content .php-private { 
        color: #569cd6; /* Private en azul */
    }
    .code-content .php-protected { 
        color: #569cd6; /* Protected en azul */
    }
    .code-content .php-static { 
        color: #569cd6; /* Static en azul */
    }
    .code-content .php-this { 
        color: #569cd6; /* $this en azul */
    }
    .code-content .php-self { 
        color: #569cd6; /* self en azul */
    }
    .code-content .php-parent { 
        color: #569cd6; /* parent en azul */
    }
    .code-content .php-true { 
        color: #569cd6; /* true en azul */
    }
    .code-content .php-false { 
        color: #569cd6; /* false en azul */
    }
    .code-content .php-null { 
        color: #569cd6; /* null en azul */
    }
    .code-content .php-array-key { 
        color: #9cdcfe; /* Claves de array en azul claro */
    }
    .code-content .php-string-concat { 
        color: #d4d4d4; /* Concatenación de strings en blanco */
    }
    .code-content .php-arrow { 
        color: #d4d4d4; /* Flecha de método en blanco */
    }

    /* Efecto de línea actual */
    .code-content pre::before {
        content: '';
        position: absolute;
        left: -2rem;
        right: -2rem;
        top: 0;
        bottom: 0;
        background: linear-gradient(90deg,
            rgba(255, 255, 255, 0.03) 0%,
            rgba(255, 255, 255, 0.05) 50%,
            rgba(255, 255, 255, 0.03) 100%);
        pointer-events: none;
    }

    /* Efecto de hover en líneas */
    .code-content pre:hover::before {
        background: linear-gradient(90deg,
            rgba(255, 255, 255, 0.05) 0%,
            rgba(255, 255, 255, 0.08) 50%,
            rgba(255, 255, 255, 0.05) 100%);
    }

    /* Scrollbar personalizada */
    .code-content::-webkit-scrollbar {
        height: 8px;
    }

    .code-content::-webkit-scrollbar-track {
        background: #1e1e1e;
    }

    .code-content::-webkit-scrollbar-thumb {
        background: #3d3d3d;
        border-radius: 4px;
    }

    .code-content::-webkit-scrollbar-thumb:hover {
        background: #4d4d4d;
    }
</style> 