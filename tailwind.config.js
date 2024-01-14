/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        tundora: '#4A4A4A',
        royalPurple: '#6C32A6',
        gigas: '#58328C',
        cerulean: '#04B2D9',
        persianGreen: '#03A6A6',
        dawnPink: '#EFE7DC',
        whiteLinen: '#F9F3EA'  
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
        serif: ['Poppins', 'sans-serif'],
        heading: ['"Playfair Display"', 'sans-serif'],
      }
    }
  },
  plugins: [],
}

