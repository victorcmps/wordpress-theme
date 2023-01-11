# wordpress-theme

Wordpress theme from scratch.

This is a simple WordPress theme with a static front page.

The menu, title and favicon are dynamic, you can edit on WordPress admin.

IMPORTANT: The menu is only rendered if you add some links to him.

# Development

- Firstly, you need to create a WordPress environment to run this theme. You can get one very quickly using <a href="https://localwp.com/">Local WP.</a>
- Clone this project inside the themes directory on WordPress (/wp-content/themes/)
- Run `npm install` to install the dependencies. You can use pnpm or yarn too if you want to.
- Run `npm run watch` to compile the Sass/bundle the Javascript from the theme. Every modification you make at Sass/Js files, it will build the files again.
- Go to Appearance > Themes and activate the theme.
- You are ready to develop!

# Production

To build SASS/JS files to production, run the command `npm run prod`.

# Prettier

To run prettier, run the command `npm run prettier`.

# ESLint

To run ESLint, run the command `npm run eslint`.
