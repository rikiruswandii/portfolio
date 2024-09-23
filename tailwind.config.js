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
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                color: {
                    primary: '#263371',
                    secondary: '#f2bb18',
                    base: '#FEF9D9',
                    dark: '#181C14',
                    light: '#FCF8F3',
                },
            }
        },
    },

    plugins: [forms],
};
