var merge = require("webpack-merge");
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
            source: "./src/scripts/main.js",
            destination: "./dist/bonumic/assets/js/main.js",
          },
          {
            source: "./src/assets/screenshot/screenshot.png",
            destination: "./dist/bonumic/screenshot.png",
          },
          { source: "./src/templates/*.php", destination: "./dist/bonumic" },
          {
            source: "./src/assets/archives",
            destination: "./dist/bonumic/assets/archives",
          },
          {
            source: "./src/template-parts",
            destination: "./dist/bonumic/template-parts",
          },
        ],
        delete: ["./dist/bonumic/main.js", "./dist/bonumic/main.js.map"],
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
