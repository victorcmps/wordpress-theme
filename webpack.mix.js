// This file is used by Laravel Mix to compile Sass files to CSS and bundle JS files.
let mix = require("laravel-mix");
mix.js("src/app.js", "js").sass("src/app.scss", "css").setPublicPath("dist");
