const mix = require('laravel-mix')
require('@tinypixelco/laravel-mix-wp-blocks')
require('laravel-mix-purgecss')
require('laravel-mix-copy-watched')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('./dist').browserSync('https://jcfny.test')

mix
  .sass('resources/assets/styles/main.scss', 'styles')
  .sass('resources/assets/styles/login.scss', 'styles')
  .sass('resources/assets/styles/block-editor.scss', 'styles')
  .purgeCss({
    extractorPattern: /[a-zA-Z0-9-:_/!]+/g,
    whitelist: [
      'sub-menu',
      'sub',
      'sup',
      'errMsg',
      'screen-reader-text',
      'pagination',
      'next',
      'prev',
      'input',
      'button',
      'select',
      'textarea',
      'label',
      ...require('purgecss-with-wordpress').whitelist,
      ...require('purgecss-whitelister')([
        `node_modules/react-slidedown/lib/slidedown.css`,
        `resources/assets/styles/common/_global.scss`,
        `resources/assets/styles/components/_block-editor.scss`,
        `resources/assets/styles/components/_forms.scss`,
        `resources/assets/styles/components/_login.scss`,
        `resources/assets/styles/components/_modals.scss`,
        `resources/assets/styles/components/_nav.scss`,
        `resources/assets/styles/components/_wp-blocks.scss`,
        `resources/assets/styles/components/_wp-classes.scss`,
        `resources/assets/styles/layouts/_pages.scss`,
      ]),
    ],
    whitelistPatterns: [
      ...require('purgecss-with-wordpress').whitelistPatterns,
      /^modal(-.*)?$/,
      /^menu(-.*)?$/,
      /^nav(-.*)?$/,
      /^page(-.*)?$/,
      /^align(.*)?$/,
      /^size(-.*)?$/,
      /^gform(_.*)?$/,
      /^ginput(_.*)?$/,
      /^gf(_.*)?$/,
    ],
  })

mix
  .js('resources/assets/scripts/main.js', 'scripts')
  .js('resources/assets/scripts/login.js', 'scripts')
  .js('resources/assets/scripts/customizer.js', 'scripts')
  // .blocks('resources/assets/scripts/editor.js', 'scripts')
  .extract()

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  .copyWatched('resources/assets/fonts/**', 'dist/fonts')

// mix.autoload({
//   jquery: ['$', 'window.jQuery'],
// })

mix.webpackConfig({
  externals: {
    jquery: 'jQuery',
    react: 'React',
    'react-dom': 'ReactDOM',
  },
})

mix
  .autoload({
    jquery: ['$', 'window.jQuery'],
  })
  .options({ processCssUrls: false })
  .sourceMaps(false, 'source-map')
  .version()
