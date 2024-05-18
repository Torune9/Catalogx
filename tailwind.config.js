/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily :{
        "deca": "Lexend Deca, sans-serif",
        "poppins" : "Poppins,sans-serif",
        "barlow": "Barlow, sans-serif",
        "roboto" : "Roboto, sans-serif",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}