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
            'DMSans': ['DM Sans', 'sans-serif'],
        },
        colors: {
            'color': '#5D5A88',
        },
    }
  },
  plugins: [],
}

