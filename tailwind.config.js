module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resource/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
}
