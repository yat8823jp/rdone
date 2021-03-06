export default  {

	/**
	 *
	 * browserSync.
	 *
	 */
	browserSync: {
	//	 proxy: 'localhost:3000',
	proxy: 'rish-design.wp',
		files: [
			"./style.css",
			"./js/bundle.js",
			"./js/scroll.js",
			"./js/gallery.js",
			"./**/*.php",
			"./**/*.png",
			"./**/*.svg",
			"./**/*.jpg"
		]
	},

	/**
	 *
	 * sass Compile Option.
	 *
	 */
	sass: {
		src: './src/styles/**/*.{sass,scss}',
		dest: './',
		sourceRoot: './src/styles'
	},

	/**
	 *
	 * JavaScript.
	 *
	 */
	browserify: {
		bundleOption: {
			cache: {}, packageCache: {}, fullPaths: false,
			debug: true,
			// entries: './src/scripts/main.js',
			extensions: [ 'js' ]
		},
		dest: './',
		filename:  'js/bundle.js',
	},
};
