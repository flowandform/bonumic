var merge = require("webpack-merge");
var path = require("path");
var FileManagerPlugin = require("filemanager-webpack-plugin");

module.exports = merge(require("./webpack.common.js"), {
  mode: "development",
  watch: true,

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
            source: "./src/assets/js",
            destination: "./html/wp-content/themes/bonumic/assets/js",
          },
          {
            source: "./src/*.php",
            destination: "./html/wp-content/themes/bonumic",
          },
        ],
        delete: ["./dist/main.js"],
      },
    }),
  ],
  output: {
    path: path.resolve(__dirname, "../", "html/wp-content/themes/bonumic"),
    publicPath: "/",
  },
});
