/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        eastern: {
          dpink: '#E51F66',
          dpink: '#1DA1DC',
          dpinkb: '#E51F66'
        },
      },
      fontFamily: {
        intReg: ['Inter-Regular'],
        intMed: ['Inter-Medium'],
        intBold: ['Inter-Bold'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
