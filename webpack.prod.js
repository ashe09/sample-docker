const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.common.js");
const TerserPlugin = require("terser-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = merge(commonConfig,
  {
    mode: "production",
    optimization: {
      minimize: true,
      minimizer: [
        new TerserPlugin({
          extractComments: false,
          terserOptions: {
            compress: {
              drop_console: true
            },
            format: {
              comments: false
            }
          }
        }),
        new CssMinimizerPlugin({
          minify: CssMinimizerPlugin.cssoMinify
        })
      ]
    }
  }
);
