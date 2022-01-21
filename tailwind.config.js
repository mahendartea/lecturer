const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    // mode: 'jit',
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    options: {
        safelist: [
            /data-theme$/,
        ]
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            }
        }
    },

    variants: {
        extend: {
            opacity: ["disabled"]
        }
    },

    plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography"), require('daisyui')]
};
