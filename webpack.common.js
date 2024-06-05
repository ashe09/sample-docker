const webpack = require("webpack");
const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const HtmlWebpackHarddiskPlugin = require("html-webpack-harddisk-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");
const ESLintPlugin = require("eslint-webpack-plugin");
const RemoveEmptyScriptsPlugin = require("webpack-remove-empty-scripts");
const globule = require("globule");

const MODE = "development";
const enabledSourceMap = MODE === "development";

function generateHtmlPlugins(srcDir) {
  const srcFiles = globule.find(["**/*.ejs", "!**/_*.ejs"], { cwd: path.resolve(__dirname, srcDir) });
  return srcFiles.map(item => {
    const parts = item.split(".");
    const name = parts[0];

    return new HtmlWebpackPlugin({
      template: path.resolve(__dirname, `${srcDir}/${name}.ejs`),
      filename: `${name}.html`,
      inject: false,
      minify: false,
      alwaysWriteToDisk: true,
    });
  });
}
const htmlPlugins = generateHtmlPlugins("src/ejs/");

module.exports = {
  entry: {
    bundle: path.resolve(__dirname, "src/js/", "index.js"),
    "swiper-bundle": path.resolve(__dirname, "src/js/", "swiper.js"),
    style: path.resolve(__dirname, "src/scss/", "style.scss"),
  },
  output: {
    filename: "assets/js/[name].js",
    path: path.resolve(__dirname, "dist"),
    publicPath: "/",
    clean: {
      keep: /index.php/,
    },
  },
  mode: MODE,
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader",
        options: {
          presets: ["@babel/preset-env"],
        },
      },
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: {
              url: false,
              sourceMap: enabledSourceMap,
              importLoaders: 2,
            },
          },
          {
            loader: "postcss-loader",
            options: {
              sourceMap: enabledSourceMap,
              postcssOptions: {
                plugins: [
                  require("autoprefixer")({
                    grid: true,
                  }),
                ],
              },
            },
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: enabledSourceMap,
              sassOptions: {
                outputStyle: "expanded",
              },
            },
          },
        ],
      },
      {
        // test: /node_modules\/(.+)\.css$/,
        test: /\.css/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: { url: false },
          },
        ],
        sideEffects: true,
      },
      {
        test: /\.(jpe?g|gif|png|svg|mp4)$/,
        type: "asset/resource",
        use: [
          {
            options: {
              name: "[name].[ext]",
            },
          },
        ],
      },
      {
        test: /\.ejs$/,
        use: [
          {
            loader: "html-loader",
            options: {
              sources: false,
              minimize: false,
            },
          },
          {
            loader: "ejs-plain-loader",
          },
        ],
      },
    ],
  },
  plugins: [
    new RemoveEmptyScriptsPlugin(),
    new MiniCssExtractPlugin({
      filename: "assets/css/[name].css",
    }),
    new ESLintPlugin({
      extensions: "js",
      exclude: "node_modules",
      fix: true,
    }),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
    }),
    new CopyWebpackPlugin({
      patterns: [
        { from: "src/images/", to: "assets/images/" },
        { from: "src/meta/", to: "" },
        { from: "src/setup/", to: "" },
      ],
    }),
    new HtmlWebpackHarddiskPlugin(),
  ].concat(htmlPlugins),
  optimization: {
    minimizer: [
      new ImageMinimizerPlugin({
        minimizer: {
          implementation: ImageMinimizerPlugin.imageminMinify,
          options: {
            plugins: [
              ["gifsicle", { interlaced: true }],
              ["jpegtran", { progressive: true }],
              ["optipng", { optimizationLevel: 5 }],
              [
                "svgo",
                {
                  plugins: [
                    {
                      name: "preset-default",
                      params: {
                        overrides: {
                          removeViewBox: false,
                          addAttributesToSVGElement: {
                            params: {
                              attributes: [{ xmlns: "http://www.w3.org/2000/svg" }],
                            },
                          },
                        },
                      },
                    },
                  ],
                },
              ],
            ],
          },
        },
      }),
    ],
  },
  target: ["web", "es5"],
};
