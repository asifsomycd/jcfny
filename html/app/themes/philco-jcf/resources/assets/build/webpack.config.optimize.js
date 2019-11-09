'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const whitelister = require('purgecss-whitelister');
const purgecssWordpress = require('purgecss-with-wordpress');

const config = require('./config');

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: {
        plugins: [{ removeUnknownsAndDefaults: false }, { cleanupIDs: false }, { removeViewBox: false }],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: config.enabled.watcher,
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
      cache: true,
      parallel: 4,
    }),
    new PurgecssPlugin({
      paths: glob.sync(['app/**/*.php', 'resources/views/**/*.php', 'resources/assets/scripts/**/*.js']),
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
        ...purgecssWordpress.whitelist,
        ...whitelister([
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
        /^modal(-.*)?$/,
        /^menu(-.*)?$/,
        /^nav(-.*)?$/,
        /^page(-.*)?$/,
        /^align(.*)?$/,
        /^size(-.*)?$/,
        /^gform(_.*)?$/,
        /^ginput(_.*)?$/,
        /^gf(_.*)?$/,
        ...purgecssWordpress.whitelistPatterns,
      ],
    }),
  ],
};
