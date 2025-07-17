brew upgrade ddev/ddev/ddev
structure_sync is installed so

- ea cex commit

node content max width 1280px

ddev import-db --file=~/Downloads/nwhite.sql
ddev composer require drupal/core-recommended:xxx -W
ddev composer update drupal/* -W

ddev drush updb
ddev drush cr

Looking at the latest release notes they had a recommended script
ddev composer require drupal/core-recommended:10.2.1 drupal/core-composer-scaffold:10.2.1 drupal/core-project-message:10.2.1 --update-with-all-dependencies

CEX / CIM
Should be safe to cex in local and cim in remote for recaptcha_v3.settings because
- set up like http://oyster-d9.ddev.site:86/node/1525 ie
- config split in /sync and git ignore should prevent secret keys getting into repo
- config ignore should prevent remote setting being overwritten


theme docs are in web/themes/custom/b5subtheme/readmeNW.md

Bootstrap breakpoints https://getbootstrap.com/docs/5.0/layout/breakpoints/
@include media-breakpoint-up(lg) { ... }

Browsersync
install:
    ddev add-on get ddev/ddev-browsersync // maybe have to do it again after upgrading ddev
    ddev restart

    terminal 1: in root of project
        ddev start
        open the project in browser. OK to be logged in here and make config changes
        use terminal 1 for git, ddev composer and ddev drush
    terminal 2: in root of project
        ddev browsersync
        https://cn.ddev.site:3000 You won't be logged in - handy for dev tools and responsive states
        This is where you'll see 'Browsersync connected' messages when you make changes to scss
        don't try to log in here or you get an error
    terminal 3
        cd web/themes/custom/b5subtheme
        npx mix watch

Trouble shoot
    cd ~
    nvm install node // uses nvm to install latest version of node
    nvm use <version> // maybe
    cd into project folder
    npm update

chmod 755 web/sites/default
chmod 644 web/sites/default/*settings.php
chmod 644 web/sites/default/*services.yml