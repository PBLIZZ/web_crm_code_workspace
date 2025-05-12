/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.php", // Scans all .php files in public and its subdirectories
    "./public/assets/js/**/*.js", // If you use JS to add classes
    "./src/css/input.css",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          green: {
            500: '#006758',
            700: '#004e42',
            800: '#003e35', 
          },
          orange: {
            500: '#ff8700', 
            600: '#e67a00',
          },
          teal: { 
            400: '#2dd4bf', 
          }
        }
      },
      fontFamily: {
        sans: ['Poppins', 'Inter', 'system-ui', 'sans-serif'], // Body font (Poppins first)
        heading: ['Inter', 'Poppins', 'system-ui', 'sans-serif'] // Heading font (Inter first)
      }
    }
  },
  plugins: [],
}