/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'galaxy-black': '#000000',
        'dark-blue': '#1D2D50',
        'dark-purple': '#3A0D6D',
        'nebula-blue': '#4B2D77',
        'meteor-blue': '#3F51B5',
        'galaxy-aqua': '#00B2A9',
        'star-blue': '#6CC3F0',
        'nebula-red': '#FF0044',
      },
    },
  },
  plugins: [],
}
