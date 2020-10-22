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
		libraryTarget: "amd",
		filename: "../[name]/main.js",
	},
	devServer: {
		contentBase: resolve("/"),
		compress: true,
		port: 3000,
		inline: true,
		disableHostCheck: true,
		writeToDisk: true,
	},
	resolve: {
		alias: {
			"@": resolve("src"),
			Utils: resolve("src/utils"),
		},
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: "babel-loader",
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
