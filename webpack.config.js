const path = require('path');
const defaults = require('@wordpress/scripts/config/webpack.config.js');

module.exports = {
	...defaults,
	entry: {
		front: path.resolve(process.cwd(), 'src', 'front.tsx'),
		admin: path.resolve(process.cwd(), 'src', 'admin.tsx'),
	},
	output: {
		filename: '[name].js',
		path: path.resolve(process.cwd(), 'build'),
	},
	module: {
		...defaults.module,
		rules: [
			...defaults.module.rules,
			{
				test: /\.tsx?$/,
				use: [
					{
						loader: 'ts-loader',
						options: {
							configFile: 'tsconfig.json',
							transpileOnly: true,
						},
					},
				],
				exclude: /(node_modules|bower_components)/, // JavaScript files to be ignored.
			},
		],
	},
	resolve: {
		extensions: ['.ts', '.tsx', ...(defaults.resolve ? defaults.resolve.extensions || ['.js', '.jsx'] : [])],
	},
};
