# Mailvelope

[![Build Status](https://travis-ci.org/mailvelope/mailvelope.svg?branch=master)](https://travis-ci.org/mailvelope/mailvelope)

Mailvelope is a browser extension for Google Chrome and Firefox that allows secure email communication based on the OpenPGP standard. 
It can be configured to work with arbitrary Webmail provider.

## Mailvelope Styleguide

This project is a simple styleguide to visualize changes scheduled in Mailvelope UI in 2017.
It uses grunt, bootstrap and less.

## Build instruction
```
npm install
grunt less
```
You can also use watch to trigger automatic build when changing files
```
grunt watch
```

## Pages available

### Pre-installation
* Landing page: {styleguide-base-url}/demo/landing-page.php
* Contextual menu: {styleguide-base-url}/demo/contextual-menu.php?setup
* Dashboard: {styleguide-base-url}/demo/dashboard-intermediary-before-install.php

### Post-installation
* Dashboard: {styleguide-base-url}/demo/dashboard.php
* Contextual menu (animated): {styleguide-base-url}/demo/contextual-menu.php?animated
* Contextual menu (static primary): {styleguide-base-url}/demo/contextual-menu.php
* Contextual menu (static advanced): {styleguide-base-url}/demo/contextual-menu.php?advanced
* Contextual menu (static advanced, variant with icons): {styleguide-base-url}/demo/contextual-menu.php?advanced-with-icons
* Key management: {styleguide-base-url}/demo/key-management.php
