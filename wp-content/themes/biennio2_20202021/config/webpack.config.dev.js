const path = require('path')
const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const extractScss = new ExtractTextPlugin('css/index.css')
const CopyWebpackPlugin = require('copy-webpack-plugin')

module.exports = {
  entry: {
    main: ['./src/js/main.js', './src/scss/index.scss'],
  },
  devtool: 'source-map',
  output: {
    publicPath: "../",
    filename: 'bundle.js',
    path: path.resolve(__dirname, '../dist')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['env']
          }
        }
      },
      {
        test: /\.(jpg|gif|svg|png|eot|svg|ttf|woff|woff2)$/,
        loader: 'file-loader?name=[path][name].[ext]'
      },
      {
        test: /\.scss$/,
        loader: extractScss.extract({
          // fallback: 'style-loader',
          use: [{
            loader: "css-loader", options: {
              sourceMap: true
            }
          },
          {
            loader: 'resolve-url-loader'
          },
          {
            loader: "postcss-loader", options: {
              config: path.resolve(__dirname, 'postcss.config.js')
            }
          },
          {
            loader: "sass-loader", options: {
              sourceMap: true
            }
          }]
        })
      }]
  },
  resolve: {
    alias: {
      "TweenLite": path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
      "TweenMax": path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
      "TimelineLite": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineLite.js'),
      "TimelineMax": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
      "ScrollMagic": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
      "animation.gsap": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
      "debug.addIndicators": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
    }
  },
  plugins: [
    extractScss,
    new CopyWebpackPlugin([
      { 
        from: 'assets', 
        to: 'assets',
        cache: true
      },
    ]),
  ],
}
