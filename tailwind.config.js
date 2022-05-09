module.exports = {
  mode: 'jit',
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/views/**/*.blade.php',
    './resources/views/tasks/**/*.blade.php',
    './resources/layouts/**/*.blade.php',
    './resources/js/**/*.vue',
  ],

  theme: {
    extend: {
    },
  },

  variants: {
    extend: {
    },
  },

  // plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};