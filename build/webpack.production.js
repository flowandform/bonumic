var merge = require("webpack-merge");
var webpack = require("webpack");
var path = require("path");
var FileManagerPlugin = require("filemanager-webpack-plugin");

module.exports = merge(require("./webpack.common.js"), {
  mode: "production",
  devtool: "source-map",

  plugins: [
    new FileManagerPlugin({
      onEnd: {
        copy: [
          {
            source: "./src/assets/favicon",
            destination: "./dist/bonumic/assets/favicon",
          },
          {
            source: "./src/assets/images",
            destination: "./dist/bonumic/assets/images",
          },
          {
            source: "./src/screenshot.png",
            destination: "./dist/bonumic/screenshot.png",
          },
          { source: "./src/*.php", destination: "./dist/bonumic" },
        ],
        mkdir: ["./dist/bonumic/assets/js"],
        move: [
          {
            source: "./dist/bonumic/main.js",
            destination: "./dist/bonumic/assets/js/main.js",
          },
          {
            source: "./dist/bonumic/main.js.map",
            destination: "./dist/bonumic/assets/js/main.js.map",
          },
        ],
        archive: [
          { source: "./dist/bonumic", destination: "./dist/bonumic.zip" },
        ],
      },
    }),
  ],
  output: {
    path: path.resolve(__dirname, "../", "dist/bonumic"),
    publicPath: "/",
  },
});
