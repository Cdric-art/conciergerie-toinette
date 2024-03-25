import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbite from "flowbite/plugin";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        colors: {
        },
        fontFamily: {
            sans: ['Folks', 'ui-sans-serif'],
        },
        extend: {
            colors: {
                blk: '#595959',
                wht: '#FFE6FF',
                purple: '#660939',
                pinkDark: '#B31166',
                pinkLight: '#E0147E'
            }
        },
    },

    plugins: [
        forms,
        flowbite,
    ]
};
