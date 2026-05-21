/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'premium': '#fbf9f6',
        'midnight': '#0a1424',
        'midnight-muted': '#16243a',
        'champagne': '#c5a880',
        'champagne-hover': '#b3956d',
      },
      fontFamily: {
        title: ['"Playfair Display"', 'serif'],
        body: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}