const path = require('path');

const webpack  = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
// -- Entry where to get style, script
  entry: {
    script: './src/app.js',
  },
// -- Output where to put bundled script
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
// -- What kind of files to get
  module : {
    rules:[
      {
          test:/\.s[ac]ss$/i,
          use: [
            // Creates `style` nodes from JS strings
            "style-loader",
            // Translates CSS into CommonJS
            "css-loader",
            // Compiles Sass to CSS
            "sass-loader",
          ]
      },
    ],
  },
  
  plugins: [
    new webpack.ProvidePlugin({ // automatically adds jquery
        $: 'jquery',
        jQuery:'jquery'
    }),
    new MiniCssExtractPlugin() //  can delete?
  ],

}