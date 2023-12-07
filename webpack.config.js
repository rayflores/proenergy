/**
 * External Dependencies
 */
const path = require( 'path' );

/**
 * WordPress Dependencies
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config.js' );

module.exports = {
	...defaultConfig,
	...{
		entry: {
			main: path.resolve( process.cwd(), 'src/scss', 'style.scss' ),
			mainjs: path.resolve( process.cwd(), 'src/js', 'mainjs.js' ),
		},
	},
	plugins: [ ...defaultConfig.plugins ],
};