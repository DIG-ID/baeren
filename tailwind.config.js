/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './front-page.php',
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      poppins: ['Poppins', 'sans-serif'],
      utopia: [ 'utopia-std-subhead', 'serif']
    },

    extend: {
      letterSpacing: {
        //wide: '.038em',
        //wider: '.06em',
      },
      colors: {
        'brown-shade-1': '#F5F0EF',
        'brown-shade-2': '#E7DBD9',
        'brown-shade-3': '#8E827B',
        'brown-shade-4': '#34302D',
        'blue-shade-1': '#F2F4F6',
        'blue-shade-2': '#DDE3EA',
        'red': '#B63939',
        'green': '#95BE49',
        'orange': '#D7903B',
      },
      transitionTimingFunction: {
        //'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      },
      gridTemplateRows: {
        // Allow grid rows to auto size based on content
        'masonry': 'masonry',
      },
    },
  },
  plugins: [
  ],
}
