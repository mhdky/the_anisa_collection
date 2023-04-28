const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'],
                playfair: ['Playfair Display', 'serif'],
            },
            colors: {
                'black-primary': '#1E1E1E',
                'yellow-primary': '#DF9903',
                'yellow-hover': '#dfa423',
                'yellow-secondary': '#fdfdee',
                'black-hover': '#373737',
                'white-hover': '#ffffff29',
                'slate-primary': '#333333',
                'slate-secondary': '#555555',
                'gray-primary': '#C9C9C9',
                'gray-secondary': '#e9e9e9',
                'gray-th': '#d2d2d2',
            },
            screens: {
                'sm-350': '350px',
                'sm-360': '360px',
                'sm-366': '366px',
                'sm-375': '375px',
                'sm-400': '400px',
                'sm-423': '423px',
                'sm-440': '440px',
                'sm-479': '479px',
                'sm-500': '500px',
                'sm-570': '570px',
                'sm-601': '601px',
                'sm-640': '640px',
                'sm-645': '645px',
                'sm-653': '653px',
                'sm-679': '679px',
                'sm-740': '740px',
                'md-768': '768px',
                'md-786': '786px',
                'md-800': '800px',
                'md-830': '830px',
                'md-850': '850px',
                'md-880': '880px',
                'md-890': '890px',
                'md-900': '900px',
                'md-930': '930px',
                'md-950': '950px',
                'md-1000': '1000px',
                'lg-1100': '1100px',
                'lg-1130': '1130px',
                'lg-1280': '1280px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
