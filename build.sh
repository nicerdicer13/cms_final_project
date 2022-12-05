#!/bin/sh
cp ./src/php/*.* ./public/wp-content/themes/theme_folder/
cp -R ./src/images ./public/wp-content/themes/theme_folder
cp -R ./src/fonts ./public/wp-content/themes/theme_folder
cp -R ./src/favicons ./public/wp-content/themes/theme_folder
npx sass ./src/sass/style.scss ./public/wp-content/themes/theme_folder/style.css
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/theme_folder/main.js  --minify