const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                display: ['Oswald', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                himaraGold: {
                    600: '#d8ba8e',
                    500: '#edcb9a',
                    400: '#f5dbb7',
                },
                'himaraGray' : '#d7d8d9',
                himaraBlue: {
                    400: '#54d3fd',
                    500: '#1dc1f8',
                    600: '#1aadde',
                },
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
