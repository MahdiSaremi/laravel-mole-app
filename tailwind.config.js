import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import colors from 'tailwindcss/colors';

/** @type {import('tailwindcss').Config} */
export default {
    daisyui: {
        themes: [
            {
                default: {
                    "primary": "#e11d48",
                    "secondary": "#c026d3",
                    "accent": "#38bdf8",
                    "neutral": "#dbeafe",
                    "base-100": "#ffffff",
                    "info": "#67e8f9",
                    "success": "#6ee7b7",
                    "warning": "#fcd34d",
                    "error": "#dc2626",
                },
            },
        ],
    },
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/views/**/*.blade.php',
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.rose
            }
        },
    },

    plugins: [
		forms,
		require("daisyui")
	],
};
