var merge = require("webpack-merge");
var path = require("path");
var BrowserSyncPlugin = require("browser-sync-webpack-plugin");
var FileManagerPlugin = require("filemanager-webpack-plugin");
var CopyPlugin = require("copy-webpack-plugin");

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
        ],
      },
    }),
    new CopyPlugin({
      patterns: [
        { from: "./src/templates", to: "./html/wp-content/themes/bonumic" },
      ],
    }),
    new BrowserSyncPlugin(
      {
        host: "localhost",
        port: 3000,
        proxy: "localhost:8000", // devserver
        files: ["./html/wp-content/themes/bonumic/*.php", "./src"],
      },
      {
        // prevent BrowserSync from reloading the page
        // and let Webpack Dev Server take care of this
        reload: true,
      }
    ),
  ],
  output: {
    path: path.resolve(__dirname, "../", "html/wp-content/themes/bonumic"),
    publicPath: "/",
  },
  devServer: {
    contentBase: "./src",
    writeToDisk: true,
    hot: true,
    host: "0.0.0.0",
    port: 8000,
  },
});
