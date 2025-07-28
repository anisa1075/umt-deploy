/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            Poppins: ['Poppins','sans-serif'],
            Cookie: ['Cookie', 'cursive'],
            Jost: ['Jost', 'sans-serif'],
            Alegreya: ['Alegreya Sans', 'sans-serif'],
            BeVietnamPro: ['Be Vietnam Pro', 'sans-serif'],
            Chelse: ['Chelsea Market', 'sans-serif'],
            Rasa: ['Rasa','sans-serif'],
            Inter: ['Inter', 'sans-serif'],
          },

          fontSize: {
            '70': '70px',
            '40': '40px',
            '42': '42px',
          },

          colors: {
            'e2f0d9': '#E2F0D9', // Menambahkan warna FF90BC dengan nilai hex
            '537938': '#537938',
            '395723': '#395723', // Menambahkan warna FF90BC dengan nilai hex
            'eaffd4': '#EAFFD4', // Menambahkan warna FF90BC dengan nilai hex
            '65894b': '#65894B', // Menambahkan warna FF90BC dengan nilai hex
            'd9d9d9a1': '#D9D9D9A1', // Menambahkan warna FF90BC dengan nilai hex
            '6f6e6e': '#6F6E6E', // Menambahkan warna FF90BC dengan nilai hex
            '3f3e3e': '#3F3E3E', // Menambahkan warna FF90BC dengan nilai hex
            'e9ede7': '#E9EDE7', // Menambahkan warna FF90BC dengan nilai hex
            'eaebea': '#EAEBEA', // Menambahkan warna FF90BC dengan nilai hex
            'bbbcba': '#BBBCBA', // Menambahkan warna FF90BC dengan nilai hex
          },
          fontWeight: {
            '2000': '2000',
            '900': '900',
          },
          margin: {
            '64': '64rem',
            '24': '24rem',
            '7': '7rem',
            '45': '45rem',
            '29': '29rem',
            '31': '31rem',
            '34': '34rem',
            '43': '43rem',
            '41': '41rem',
            '140px': '140px',
            '-27': '-27rem',
          },
          padding: {
            '17' : '17px',
            '1.85' : '1.85px',

          },
          width: {
            '30': '30rem', // Menambahkan lebar custom '80' dengan nilai 20rem
            '27': '27rem', // Menambahkan lebar custom '80' dengan nilai 20rem
          },
          height: {
            '20': '20rem', // Menambahkan lebar custom '80' dengan nilai 20rem
          },
    },
  },
  plugins: [],
}

