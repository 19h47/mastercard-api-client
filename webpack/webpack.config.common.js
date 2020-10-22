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
		library: "MastercardApiClient",
		libraryTarget: "umd",
		filename: "../[name]/main.js",
	},
	resolve: {
		alias: {
			"@": resolve("src"),
			Utils: resolve("src/utils"),
			model: resolve("src/model"),
			api: resolve("src/api"),
		},
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
