/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'accent': '#0d6efd',
                'accent-light': '#60a5fa',
                'background-dark': '#1a1a1a',
                'text-light': '#d4d4d4',
            },
            fontFamily: {
                'code': ['Fira Code', 'monospace'],
                'sans': ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
} 