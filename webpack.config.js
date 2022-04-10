/**
 * WordPress Dependencies.
 *
 * see, node_modules/@wordpress/scripts/config/webpack.config.js
 */
const glob = require('glob');
const path = require('path');
const defaultWordPressWebpackConfig = require( '@wordpress/scripts/config/webpack.config.js' );

// Append specifically to the default config, adding in the webpack import glob loader config.
defaultWordPressWebpackConfig.module.rules = [
	{
		test: /\.js$/,
		use: 'webpack-import-glob-loader'
	},
	{
		test: /\.scss$/,
		use: 'webpack-import-glob-loader'
	},
	...defaultWordPressWebpackConfig.module.rules,
];

/**
 * This determines if the built blocks are combined into single asset files, or multiple asset files,
 * being one set of asset files per block.
 *
 * TODO, s
 *
 * @type {boolean}
 */
const multipleEntryPoint = true;

let entry = {};

if ( multipleEntryPoint ) {
	entry = glob.sync( './blocks/*' )
		.reduce( function( obj, el ) {
			obj[ path.parse( el ).name ] = el;
			return obj
		}, {} );
} else {
	// Use the default entry point.
	entry = defaultWordPressWebpackConfig.entry();
}

module.exports = {
	...defaultWordPressWebpackConfig,
	// Add any overrides to the default here.
	entry,
}