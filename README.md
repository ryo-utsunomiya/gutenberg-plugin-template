# gutenberg-plugin-template

A template for WordPress plugin that extends Gutenberg editor.

## Requirements

- [WordPress](https://wordpress.org/) + [Gutenberg](https://wordpress.org/plugins/gutenberg/)
- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/) + [PHP 5.3.2 or higher](http://php.net/)(for Composer)

## Includes

- [webpack](https://webpack.js.org/) + [babel](https://babeljs.io/): Build JSX + ESNext
- [eslint](https://eslint.org/): Lint JavaScript
- [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer): Lint PHP

## Usage

1. Download zip
2. `npm install` or `yarn`
3. `composer install`
4. Start your awesome project👍

## Build

- `npm run build` for full build
- `npm run dev` for iteration of partial build (a.k.a "watch" mode)

## Lint

- `npm run lint` for JavaScript
- `npm run lint -- --fix` for fixing JavaScript errors
- `./vendor/bin/phpcs` for PHP
- `./vendor/bin/phpcbf` for fixing PHP errors

## Todo

- [ ] Create generator for Gutenberg plugin template(like [react-create-app](https://github.com/facebookincubator/create-react-app))
