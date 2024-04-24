/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0A66C2',
        matcha: '#01754F',
        cream: '#F4F2EE',
        mist: '#D9D9D9',
        heart: '#DF704D'
      }
    },
  },
  plugins: [],
}