const path = require("path");
const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.common.js");

module.exports = merge(commonConfig,
  {
    mode: "development",
    devtool: "eval-cheap-module-source-map",
    devServer: {
      static: {
        directory: path.resolve(__dirname, "dist")
      },
      port: 8000,
      hot: true,
      open: false,
      watchFiles: ["src/**/*.ejs", "dist/**/*"]
    }
  }
);
