// Dependencies
let path = require('path');
let ExtractTextPlugin = require('extract-text-webpack-plugin')
let CopyWebpackPlugin = require('copy-webpack-plugin')
let ImageminWebpackPlugin = require('imagemin-webpack-plugin').default
let CleanWebpackPlugin = require('clean-webpack-plugin')
let BrowserSyncPlugin = require('browser-sync-webpack-plugin')
let autoprefixer = require('autoprefixer')

let isProduction = process.env.NODE_ENV === 'production';
let sourceMapCss = !isProduction ? 'sourceMap: true' : '';

// Config
module.exports = {
	entry: {
		bundle: './resources/js/app.js'
	},
	output: {
		path: path.resolve(__dirname, './assets/js'),
		filename: 'bundle.js'
	},
	devtool: 'cheap-module-source-map',
	module:{
		rules:[
			{ // Javasripts
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['env']
					}
				}
			},
			{ // SCSS
				test: /\.(sass|scss)$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use:[
						{
							loader: 'css-loader',
							options: {
								sourceMap: true
							}
						},
						{
							loader: 'postcss-loader',
							options: {
								sourceMap: true,
								plugins: () => [
										require('autoprefixer')(),
								]
							}
						},
						{
							loader: 'sass-loader',
							options:{
								sourceMap: true
							}
						}
					]
				})
			}
		]
	},
	plugins: [
		new BrowserSyncPlugin(
			{
				proxy: 'huleoscss.dev',
				open: true,
				notify: false,
				online: false,
				reloadDelay: 300,
				reloadDebounce: 200,
				files: [
					'site',
					'content',
					'./resources/**/*.js',
					'./resources/**/*.scss',
					'./resources/images/**/*'
				]
			}
		),
		new CleanWebpackPlugin(
			'./assets',
			{
				exclude:  ['avatars'],
				verbose: false
			}
		),
		new ExtractTextPlugin({
			filename: '../css/[name].css',
			allChunks: true
		}),
		new ExtractTextPlugin({
			filename: '../../css/huleos.css',
			allChunks: true
		}),
		new CopyWebpackPlugin([
			{
				from: './resources/images',
				to: '../images'
			},
			{ from: './resources/js/prism.js'},
			{ from: './resources/scss/vendor/prism.css', to: '../css' },
			{ from: './resources/scss/vendor/theme.css', to: '../css' },
		],
			{
				ignore: [
					'.DS_Store'
				]
			}
		),
		new ImageminWebpackPlugin({
			disable: process.env.NODE_ENV !== 'production',
			test: /\.(jpe?g|png|gif|svg)$/i
		})
	]
};