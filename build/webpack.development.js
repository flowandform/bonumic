var merge = require("webpack-merge");
var path = require("path");
const chokidar = require("chokidar");
var FileManagerPlugin = require("filemanager-webpack-plugin");

module.exports = merge(require("./webpack.common.js"), {
  mode: "development",
  watch: true,
  devtool: "eval-source-map",

  plugins: [
    new FileManagerPlugin({
      onEnd: {
        copy: [
          {
            source: "./src/assets/favicon",
            destination: "./html/wp-content/themes/bonumic/assets/favicon",
          },
          {
            source: "./src/assets/images",
            destination: "./html/wp-content/themes/bonumic/assets/images",
          },
          {
            source: "./src/screenshot.png",
            destination: "./html/wp-content/themes/bonumic/screenshot.png",
          },
          {
            source: "./src/*.php",
            destination: "./html/wp-content/themes/bonumic",
          },
        ],
        mkdir: ["./html/wp-content/themes/bonumic/assets/js"],
        move: [
          {
            source: "./html/wp-content/themes/bonumic/main.js",
            destination: "./html/wp-content/themes/bonumic/assets/js/main.js",
          },
        ],
      },
    }),
  ],
  output: {
    path: path.resolve(__dirname, "../", "html/wp-content/themes/bonumic"),
    publicPath: "/",
  },
  devServer: {
    contentBase: path.resolve(__dirname, "../", "src"),
    compress: true,
    port: 8000,
  },
});
