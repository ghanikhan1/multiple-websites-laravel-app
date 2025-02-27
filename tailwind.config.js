const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class", // ✅ Enables dark mode globally

    content: [
        "./app/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],

    theme: {
        extend: {
            colors: {
                darkBlue: "hsl(217, 28%, 15%)",
                darkBlue1: "hsl(218, 28%, 13%)",
                darkBlue2: "hsl(216, 53%, 9%)",
                darkBlue3: "hsl(219, 30%, 18%)",
                accentCyan: "hsl(176, 68%, 64%)",
                accentBlue: "hsl(198, 60%, 50%)",
                lightRed: "hsl(0, 100%, 63%)",
            },
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
                raleway: ["Raleway", "sans-serif"],
                opensans: ["Open Sans", "sans-serif"],
                josefin: ["Josefin Sans", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                alata: ["Alata", "sans-serif"],
            },
            backgroundImage: {
                "logo-dark-mode": "url('../../public/assets/fylo/images/logo-dark-mode.svg')",
                "logo-light-mode": "url('../../public/assets/fylo/images/logo-light-mode.svg')",
                "curvy-dark-mode": "url('../../public/assets/fylo/images/bg-curvy-dark-mode.svg')",
                "curvy-light-mode": "url('../../public/assets/fylo/images/bg-curvy-light-mode.svg')",
            },
        },
    },

    variants: {
        extend: {
            backgroundImage: ["dark"],
            backgroundColor: ["active"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
