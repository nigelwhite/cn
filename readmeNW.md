node content max width 1280px

theme docs are in web/themes/custom/b5subtheme/readmeNW.md

Store front green is #17342f in real life

Bootstrap breakpoints https://getbootstrap.com/docs/5.0/layout/breakpoints/
@include media-breakpoint-up(lg) { ... }

    terminal 1: in root of project
        ddev start
        open the project in browser. OK to be logged in here and make config changes
        use terminal 1 for git, ddev composer and ddev drush
    terminal 2: in root of project
        ddev browsersync
        open the external link. You won't be logged in - handy for dev tools and responsive states
    terminal 3
        cd to theme folder
        npx mix watch
