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
            source: "./src/assets/js",
            destination: "./html/wp-content/themes/bonumic/assets/js",
          },
          {
            source: "./src/*.php",
            destination: "./html/wp-content/themes/bonumic",
          },
        ],
        delete: ["./html/wp-content/themes/bonumic/main.js"],
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
    port: 9000,
    /**
     * Watch for changes to PHP files and reload the page when one changes.
     */
    before(app, server) {
      const files = ["src/*.php"];

      chokidar
        .watch(files, {
          alwaysStat: true,
          atomic: false,
          followSymlinks: false,
          ignoreInitial: true,
          ignorePermissionErrors: true,
          persistent: true,
          usePolling: true,
        })
        .on("all", () => {
          server.sockWrite(server.sockets, "content-changed");
        });
    },
  },
});
