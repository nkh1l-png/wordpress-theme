# wordpress-theme

This repository contains a simple WordPress theme.

## Local Setup

You need a local WordPress installation to run the theme. Two common approaches are using Docker or running WordPress on a local web server.

### Using Docker

1. Install [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/).
2. Create a `docker-compose.yml` with a WordPress and MySQL service. Mount a `themes` directory so you can place this theme inside `wp-content/themes`.
3. Place this repository inside that `themes` directory and run `docker-compose up`.
4. Open `http://localhost:8000` in a browser and complete the WordPress installation.

You can find a full example in the [official WordPress Docker documentation](https://developer.wordpress.org/apis/handbook/docker/).

### Using a Local Web Server

1. Download WordPress from [wordpress.org](https://wordpress.org/download/).
2. Extract it into your web server's document root (XAMPP, MAMP or any PHP server).
3. Copy or clone this repository into `wp-content/themes`.
4. Access the installer via `http://localhost` (or your configured host) and finish the setup.

## Activating and Testing the Theme

1. Log in to your local WordPress admin (e.g. `http://localhost/wp-admin`).
2. Go to **Appearance \u203a Themes**.
3. Find **wordpress-theme** and click **Activate**.
4. Visit your site to verify the theme loads correctly.
5. Optionally import the [Theme Unit Test data](https://github.com/WPTT/theme-unit-test) to try different content types.
