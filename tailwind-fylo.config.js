/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/sass/**/*.scss",
        "./resources/js/**/*.js"
    ],
    darkMode: 'class',

    theme: {
        extend: {
            colors: {
                darkBlue: 'hsl(217, 28%, 15%)',
                darkBlue1: 'hsl(218, 28%, 13%)',
                darkBlue2: 'hsl(216, 53%, 9%)',
                darkBlue3: 'hsl(219, 30%, 18%)',
                accentCyan: 'hsl(176, 68%, 64%)',
                accentBlue: 'hsl(198, 60%, 50%)',
                lightRed: 'hsl(0, 100%, 63%)',
            },
            fontFamily: {
                sans: ['Raleway', 'sans-serif'],
                opensans: ['Open Sans', 'sans-serif'],
            },
            backgroundImage: {
                'logo-dark-mode': "url('../../public/assets/fylo/images/logo-dark-mode.svg')",
                'logo-light-mode': "url('../../public/assets/fylo/images/logo-light-mode.svg')",
                'curvy-dark-mode': "url('../../public/assets/fylo/images/bg-curvy-dark-mode.svg')",
                'curvy-light-mode': "url('../../public/assets/fylo/images/bg-curvy-light-mode.svg')",
            },
        },
    },
    variants: {
        extend: {
            backgroundImage: ['dark'],
        },
    },
    plugins: [],
}
