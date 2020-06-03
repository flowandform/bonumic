var merge = require("webpack-merge");
var path = require("path");
var FileManagerPlugin = require("filemanager-webpack-plugin");
var LiveReloadPlugin = require("webpack-livereload-plugin");

module.exports = merge(require("./webpack.common.js"), {
  mode: "production",

  plugins: [
    new LiveReloadPlugin(),
    new FileManagerPlugin({
      onEnd: {
        copy: [
          {
            source: "./src/assets/favicon",
            destination: "./dist/assets/favicon",
          },
          {
            source: "./src/assets/images",
            destination: "./dist/assets/images",
          },
          {
            source: "./src/screenshot.png",
            destination: "./dist/screenshot.png",
          },
          { source: "./src/assets/js", destination: "./dist/assets/js" },
          { source: "./src/*.php", destination: "./dist" },
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
