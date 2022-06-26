/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
        extend: {
            colors: {
                "red": "#C4170C",
                "subtitle": "#333333",
                "container": "#F9F9F9",
                "article-border": "#E1E1E1"
            },
            backgroundImage: {
                'test': "url('/test.webp')",
            }
        },
  },
  plugins: [],
}
