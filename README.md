# wordpress-theme

Wordpress theme from scratch.

This is a simple WordPress theme with a static front page.

The menu, title and favicon are dynamic, you can edit on WordPress admin.

IMPORTANT: The menu is only rendered if you add some links to him.

# Development

- Firstly, you need to create a WordPress environment to run this theme. You can get one very quickly using <a href="https://localwp.com/">Local WP.</a>
- Clone this project inside the themes directory on WordPress (/wp-content/themes/)
- Go to Appearance > Themes and activate the theme.

In order to compile the Sass/Bundle the Javascript, you need to run `npm run watch`, so everytime a sass/js file changes, it build the files again.

# Production

To build SASS/JS files to production, run the command `npm run prod`.

# Prettier

To run prettier, run the command `npm run prettier`.

# ESLint

To run ESLint, run the command `npm run eslint`.
