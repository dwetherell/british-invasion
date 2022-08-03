# WordPress Starter Theme

Version: 4.2.2

## Author:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [collectivthkg.com](http://collectivthkg.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as a starting template for building custom themes. Uses SCSS and AutoPrefixr, HTML5 Boilerplate with Modernizr and Normalize.css, and Grunt for all processing tasks. Syncs changes across local development devices with BrowserSync. Tested up to WordPress 4.0 RC1.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile SCSS (with source maps), 
run it through [AutoPrefixr](https://github.com/ai/autoprefixer), lint, concatenate and 
minify JavaScript (with source maps), optimize images, and syncs changes across local 
development devices with [BrowserSync](https://github.com/shakyShane/browser-sync), with 
flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use 
[CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS
 and manage the JavaScript.

Rename folder to your theme name, change the `style.scss` intro block to your theme 
information. Open the theme directory in terminal and run `npm install` to pull in all 
Grunt dependencies. Run `grunt` to execute tasks. Code as you will.

If you are using MAMP or Vagrant, change the `proxy` option in the `grunt browserSync`
 task to match your vhost URL.

- Compile `assets/styles/style.scss` to `style.css`
- Compile `assets/styles/editor-style.scss` to `editor-style.css`
- Concatenate and minify plugins in `assets/js/vendor` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify and lint `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit
- Create sprites by adding PNGs to assets/images/sprites and use by referencing created classes in assets/styles/partials/_spritesheet.scss

To concatenate and minify your jQuery plugins, add them to the `assets/js/vendor` directory and add the `js` filename and path to the `Gruntfile` `uglify` task. Previous versions of the starter theme automatically pulled all plugins in the `vendor` directory, but this has changed to allow more granular control and for managing plugins and assets with bower.

### Bower

Supports [bower](https://github.com/bower/bower) to install and manage JavaScript dependencies in the `assets/js/vendor` folder.

