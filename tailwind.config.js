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
                fontawesome: ['FontAwesome'],
            },
            colors: {
                himaraGold: {
                    600: '#d8ba8e',
                    500: '#edcb9a',
                    400: '#f5dbb7',
                },
                'himaraGray': '#d7d8d9',
                himaraBlue: {
                    400: '#54d3fd',
                    500: '#1dc1f8',
                    600: '#1aadde',
                },
            },
            gridTemplateColumns: {
                // Simple 16 column grid

                '13': 'repeat(13, minmax(0, 1fr))',
                '14': 'repeat(14, minmax(0, 1fr))',
                '15': 'repeat(15, minmax(0, 1fr))',
                '16': 'repeat(16, minmax(0, 1fr))',
                '17': 'repeat(17, minmax(0, 1fr))',
                '18': 'repeat(18, minmax(0, 1fr))',
                '19': 'repeat(19, minmax(0, 1fr))',
                '20': 'repeat(20, minmax(0, 1fr))',
                '21': 'repeat(21, minmax(0, 1fr))',
                '22': 'repeat(22, minmax(0, 1fr))',
                '23': 'repeat(23, minmax(0, 1fr))',
                '24': 'repeat(24, minmax(0, 1fr))',
                '25': 'repeat(25, minmax(0, 1fr))',
                '26': 'repeat(26, minmax(0, 1fr))',
                '27': 'repeat(27, minmax(0, 1fr))',
                '28': 'repeat(28, minmax(0, 1fr))',
                '29': 'repeat(29, minmax(0, 1fr))',
                '30': 'repeat(30, minmax(0, 1fr))',
            },
        },
        // screens: {
        //     'xs': '450px',
        // }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['active', 'group-hover', 'group-focus', 'focus-within', 'checked'],
            textColor: ['active', 'group-hover', 'group-focus', 'focus-within', 'checked'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
