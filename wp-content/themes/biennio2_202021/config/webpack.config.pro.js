const path = require('path')
const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const extractScss = new ExtractTextPlugin('css/index.css')
const LoaderOptionsPlugin = require("webpack/lib/LoaderOptionsPlugin")
const CopyWebpackPlugin = require('copy-webpack-plugin')

module.exports = {
  entry: {
    main: ['./src/js/main.js', './src/scss/index.scss'],
  },
  output: {
    publicPath: "../",
    filename: 'bundle.js',
    path: path.resolve(__dirname, '../dist')
  },
  module: {
    loaders: [
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
          fallback: 'style-loader',
          use: [{
            loader: 'css-loader',
            options: {
              importLoaders: 1,
              minimize: true
            }
          },{
            loader: 'resolve-url-loader'
          },{
            loader: 'postcss-loader',
            options: {
              config: path.resolve(__dirname, 'postcss.config.js')
            }
          }, 'sass-loader']
        }),

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
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    }),
    new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false,
    }),
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        screw_ie8: true,
        warnings: false
      },
      mangle: {
        screw_ie8: true
      },
      output: {
        comments: false,
        screw_ie8: true
      }
    })
  ],
}
