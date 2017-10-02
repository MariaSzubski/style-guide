![Style Guide Responsive Layout](https://github.com/MariaSzubski/Current-Portfolio/blob/revise_layout/img/style_guide/lg/showcase_style-guide.png)

This Style Guide is a template for a documentation website for a brand or project. It displays font styles, color palette, web components, pattern recommendations. It is built with AJAX and PHP and is responsive at all device sizes. If JavaScript is disabled the site works as standard HTML.

### AJAX
Page contents load dynamically with AJAX. This allows for a persistent nav menu that doesn't reload as the user clicks through content.

AJAX calls are loaded into the browser history to that users can step backward without backing out of the site. The page URL also updates easy copy/paste and bookmarking.

If JavaScript is disabled the site works as standard HTML.

### PX to REM Conversion
Users can choose between pixels or rem units. This selection is site-wide and is saved to the browser's local storage. The values are calculated on the fly with JavaScript.

### PHP
The navigation menu, scripts, CSS, unit switcher, and meta tags are loaded with PHP includes for basic templating.
The nav menu auto-selects the correct nav item based on the content's URL.

### Responsive Design
This style guide is responsive using flexbox to display the content at any screen size. On wide monitors the nav menu is pinned open by default and sites next to a multi-column spec layout. Below 1200px the nav menu collapses by default and can be opened on hover.

As the screen continues to scale down the content switches to a single column layout and the nav bar moves completely off the screen. On small handheld devices the page header is simplified to prevent overlapping content.
