const autoprefixer = require('autoprefixer')

module.exports = {
  plugins: [
    autoprefixer({ browsers: ['last 10 versions', 'Explorer >= 8', 'Firefox > 3']})
  ]
}
