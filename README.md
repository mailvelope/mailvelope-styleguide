# Mailvelope

[![Build Status](https://travis-ci.org/mailvelope/mailvelope.svg?branch=master)](https://travis-ci.org/mailvelope/mailvelope)

Mailvelope is a browser extension for Google Chrome and Firefox that allows secure email communication based on the OpenPGP standard.
It can be configured to work with arbitrary Webmail provider.

## Mailvelope Styleguide

This project is a simple styleguide to visualize changes scheduled in Mailvelope UI in 2017.
It uses react, react-scripts, grunt, bootstrap and less.

## Build instruction
Build the application
```
npm install
npm run build
```

Follow the instructions given in the console.

## Development instruction
Watch any changes in less files to trigger an automatic build of the css.
```
grunt watch
```

In another console start the application in development mode.
```
npm start
```

It should start the application in a browser, any changes in less files or in the application source code should refresh the browser automatically.
