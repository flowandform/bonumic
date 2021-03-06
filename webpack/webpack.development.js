var merge = require("webpack-merge");
var path = require("path");
const CopyPlugin = require("copy-webpack-plugin");
var FileManagerPlugin = require("filemanager-webpack-plugin");

module.exports = merge(require("./webpack.common.js"), {
  mode: "development",
  watch: true,
  devtool: "source-map",

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
            source: "./src/assets/screenshot/screenshot.png",
            destination: "./html/wp-content/themes/bonumic/screenshot.png",
          },
          {
            source: "./src/templates/*.php",
            destination: "./html/wp-content/themes/bonumic",
          },
          {
            source: "./src/scripts/main.js",
            destination: "./html/wp-content/themes/bonumic/assets/js/main.js",
          },
          {
            source: "./src/assets/archives",
            destination: "./html/wp-content/themes/bonumic/assets/archives",
          },
          {
            source: "./src/template-parts",
            destination: "./html/wp-content/themes/bonumic/template-parts",
          },
        ],
      },
    }),
    new CopyPlugin({
      patterns: [
        { from: "./src/templates", to: "./html/wp-content/themes/bonumic" },
        {
          from: "./src/scripts/main.js",
          to: "./html/wp-content/themes/bonumic/assets/js/main.js",
        },
      ],
    }),
  ],
  output: {
    path: path.resolve(__dirname, "../", "html/wp-content/themes/bonumic"),
    publicPath: "/",
  },
});
