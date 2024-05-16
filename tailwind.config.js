const defaultTheme = require('tailwindcss/defaultTheme')

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
        'moon': ['Moon Dance', ...defaultTheme.fontFamily.sans],
        'montserrat': ['Montserrat Alternates', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [],
}

