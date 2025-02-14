/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/sass/**/*.scss",
        "./resources/js/**/*.js"
    ],
    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
        },
        extend: {
            fontFamily: {
                sans: ['Josefin Sans', 'sans-serif'],
                alata: ['Alata', 'sans-serif'],
            },
            letterSpacing: {
                widest: '.3em',
            },
        },
    },
    plugins: [],
}
