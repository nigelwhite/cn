brew upgrade ddev/ddev/ddev
structure_sync is installed so

- ea cex commit

node content max width 1280px

ddev import-db --file=~/Downloads/nwhite.sql
ddev composer require drupal/core-recommended:xxx --with-all-dependencies
ddev composer update drupal/* --with-all-dependencies [watch out: md would insert an extra \]

CEX / CIM
Should be safe to cex in local and cim in remote for recaptcha_v3.settings because
- set up like http://oyster-d9.ddev.site:86/node/1525 ie
- config split in /sync and git ignore should prevent secret keys getting into repo
- config ignore should prevent remote setting being overwritten


theme docs are in web/themes/custom/b5subtheme/readmeNW.md

Bootstrap breakpoints https://getbootstrap.com/docs/5.0/layout/breakpoints/
@include media-breakpoint-up(lg) { ... }

    terminal 1: in root of project
        ddev start
        open the project in browser. OK to be logged in here and make config changes
        use terminal 1 for git, ddev composer and ddev drush
    terminal 2: in root of project
        ddev browsersync
        open the external link. You won't be logged in - handy for dev tools and responsive states
        don't try to log in here or you get an error
    terminal 3
        cd to theme folder
        npx mix watch
