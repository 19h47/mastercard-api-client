/**
 *
 * @file webpack.config.common.js
 * @author Jérémy Levron <jeremylevron@19h47.fr> (http://19h47.fr)
 */

// Plugins
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const WebpackNotifierPlugin = require("webpack-notifier");

const resolve = require("./webpack.utils");

module.exports = {
	entry: {
		dist: resolve("src/index.js"),
	},
	output: {
		filename: "../[name]/main.js",
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: "babel-loader",
			},
			{
				parser: {
					amd: false,
				},
			},
		],
	},
	plugins: [
		new CleanWebpackPlugin({
			cleanOnceBeforeBuildPatterns: [resolve("dist")],
		}),
		new WebpackNotifierPlugin({
			title: "Webpack",
			excludeWarnings: true,
			alwaysNotify: true,
		}),
	],
};
