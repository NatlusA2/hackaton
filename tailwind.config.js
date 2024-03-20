/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#0174BE',
        secondary: '#D2DE32',
        dark: '#0f172a',  
        biru: '#2B6FAD',
      },
      screens: {
        '2xl' : '1320px'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

