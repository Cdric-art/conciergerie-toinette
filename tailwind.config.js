import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            black: '#595959',
            white: '#FFE6FF',
        },
        fontFamily: {
            sans: ['Folks', 'ui-sans-serif'],
        },
        extend: {
            colors: {
                purple: '#660939',
                pinkDark: '#B31166',
                pinkLight: '#E0147E'
            }
        },
    },

    plugins: [forms],
};
