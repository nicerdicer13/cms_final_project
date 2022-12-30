#!/bin/sh
cp ./src/php/*.* ./public/wp-content/themes/rick/
cp -R ./src/images ./public/wp-content/themes/rick
cp -R ./src/fonts ./public/wp-content/themes/rick
cp -R ./src/favicons ./public/wp-content/themes/rick
npx sass ./src/sass/style.scss ./public/wp-content/themes/rick/style.css
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/rick/main.js  --minify