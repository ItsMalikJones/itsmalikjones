const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['General Sans', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            "commonwealth-navy": "#23376D",
            "aqua": "#63D6D7",
            "bluehorse": "#2D5DB2",
        }
    },
  },
  plugins: [],
}
