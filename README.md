galt-control
============

Symfony based ticket and user pannel system

## Requirements ##

You need to have these dependencies installed:

 - `php >= 5.4` with extensions enabled: `intl`, `mysql` or `sqlite`
 - Composer: [Download composer](http://getcomposer.org/download/)
 - Node.js stable version: [Install Node.js](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager)
 - Gulp.js: Install it with `npm install -g gulp` (as superuser)
 - Sass: [Install Sass](http://sass-lang.com/install)

## Install ##
Make sure you have the **Requirements** listed above installed.

 1. Clone the repo

    `git clone https://github.com/milardovich/galt-control.git
     cd galt-control`

 2. Install dependencies using composer:
   `composer.phar install `

 3. Create from template config file set up the database connection:

   3.1. `cp app/config/parameters.yml.dist app/config/parameters.yml`

   3.2. Open `app/config/parameters.yml` with a text editor and set your database parameters.

   3.3. Create the database:
       3.3.1.`php app/console doctrine:database:create`
       3.3.1.`php app/console doctrine:schema:create`

 4. Install node dependencies and run grunt tasks.

   4.1.  Install node dependencies `npm install`.

   4.2.  Install bower dependencies: `gulp install`.

 5.  Run the app
        `php app/console server:run`
