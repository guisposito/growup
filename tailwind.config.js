/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}"],
  theme: {
    extend: {},
    container: {
      padding: {
        DEFAULT: '2rem',
        sm: '2rem',
        lg: '4rem',
        xl: '8rem',
        '2xl': '12rem',
      },
    },
  },
  plugins: [],
}

