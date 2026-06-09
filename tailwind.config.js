/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                // Anda bisa mengganti font ini sesuai dengan yang ada di Figma nanti
                sans: ['Inter', 'sans-serif'], 
            },
            colors: {
                'adv-gold': '#D4A373',
                'adv-cream': '#FEFAE0',
                'adv-brown': '#603813',
                'adv-dark': '#1F1F1F',
            }
        },
    },
    plugins: [],
};