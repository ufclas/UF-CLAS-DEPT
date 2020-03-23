UF CLAS EMILY Theme
==================

Theme for the College of Liberal Arts and Sciences homesite

```
Theme URI:    http://mediaservices.clas.ufl.edu
Description:  Theme for the College of Liberal Arts and Sciences homesite
Author:       Yash Singh
Author URI:   https://comms.clas.ufl.edu/the-team/
Template:     twentyseventeen
```

Documentation
-------------

### Page Templates

The page templates in this theme can be applied to pages and posts.

- Featured Story
- Full Width Post
- Home slider/image template
- Image Header
- Left Sidebar
- Right Sidebar
- Magazine Article
- Members Only
    1. Activate "Advanced Custom Fields" plugin
    2. In dashboard, on the desired Page, under "Page Attributes" > "Template", select "Members Only" template
    3. On same Page, Under "Page Visibility Options", from dropdown, select "GatlorLink Users"
- News Article

### Sidebars and Widgets

By default the sidebars have been removed from this theme's templates.

In order to make sidebars visible for pages and posts, you have to select a page template that supports it.

Pages that support sidebars and widgets:

- Left Sidebar page template
- Right Sidebar page template
- Archive pages (index.php)

To make the sidebar appear for category and tag pages, you have to select the option in the Customizer > Layout > Show widgets in archives.

### Menus

The menu location areas below require a menu:

- Top Menu - displays 3 levels of links
- Quick Links - displays 1 level of links
- Footer Column 1
- Footer Column 2
- Footer Column 3

#### Accessibility

Keyboard users can use the tab key to navigate through the menus, links, and buttons on the page. Users will see an outline around the current link/element.

### Footer

#### Menus
Add navigation menus to the Footer Column 1, Footer Column 2, and Footer Column 3 Menu Locations.

#### Department Address
This can be changed by going to Appearance > Customize > CLAS DEPT Theme Options > General.

#### Social Links
This can be changed by going to the Appearance > Customize > CLAS DEPT Theme Options > Social.

### Category and Tag Pages

The options to control whether the pages display the full content or excerpt, featured images, and dates, or display sidebars are under Appearance > Customize > CLAS DEPT Theme Options > Layout.

### Theme Options / Customizer

The theme adds a 'CLAS DEPT Theme Options' panel to the Customizer screen.

Users with previous theme versions need to copy their settings to the Customizer. They will see the deprecated settings page under Appearance > Customize > CLAS DEPT Theme Settings, but these settings do not affect anything.

### Custom Fields

This theme can display the built-in WordPress custom fields and ACF Fields if they exist.

Page Templates with custom fields:

- Featured Story Page Template: sub_head
- Magazine Article Page Template: sub_head, byline
- Image Header: sub_head, header_image

Featured image custom field (caption is a WP field):

- photo_credit_txt

Developer Info
--------------

### Theme Edits

[Grunt](https://gruntjs.com) files are included to compile and minify the CSS and JavaScript.

Edits can be done directly to the non-minified versions and then minified using any other tool.

### Theme Updates

If there are templates and functions in the Twenty Seventeen parent theme that have the same name, the files in this theme override them.

Some files may need to be updated to support new features or fixes in Twenty Seventeen beyond v2.1.


### SVG Icons & Images

This theme uses a customized version of the ``twentyseventeen_get_svg`` function in its inc/icon-functions folder, which overrides the file/function in the parent theme.

SVGs are all separate symbols in assets/images/ufl.svg. All new SVG icons should be displayed in pages using the twentyseventeen_get_svg() function for consistency.

#### Fallback images
If a fallback png is needed for older browsers, it should be defined in the symbol using the ``<image>`` tag workaround. Note: this is not valid HTML markup. See [CSS Tricks: A Complete Guide to SVG Fallbacks](https://css-tricks.com/a-complete-guide-to-svg-fallbacks/).

#### Accessible SVGs

SVG images that are not used as buttons or images are hidden by default. As a fallback for screenreaders, the theme uses hidden ``<span class="SVGaltText">`` after the SVG element.

See the inline SVG technique mentioned in [Accessible SVGs](https://css-tricks.com/accessible-svgs/).

### Stylesheets

Parent theme styles are not used. The theme includes these stylesheets:

- style.min.css - minified child theme styles
- assets/css/inline.min.css - minified inline styles from advancement.clas.ufl.edu (unclear where these styles are used)

**Note: When updating any styles, be sure to search and update each breakpoint.**

The main stylesheet divides the styles into sections with media queries. Since these styles are redefined for each breakpoints instead of overriding previous styles, styles appear multiple times for each breakpoint.


### JavaScript

The JS files are minified and combined in the main JS file, script.min.js.

Custom JS file:

- theme.js

Modified versions of parent theme files:

- global.js
- jquery.scrollTo.js
- navigation.js
- skip-link-focus-fix.js

Included from the parent theme:

- html5.js

### Shortcodes
- Glyphicon shortcode
  - Example - `[ufl-icon name="asterisk" xclass="img-icon img-icon-alt"]`

### The Events Calendar
- Custom templates created in folders tribe-events and tribe.
- Shortcode created to display upcoming events
  - `[events-calendar category="featured" image="yes" eventtotal="10" excerpt="yes"]`
  - category will pull in that event category
  - image="yes" will display featured image
  - eventotal will set the amount of events to show
  - excerpt will display the excerpt

### IssueM
- This theme includes custom templates for IssueM. They are located in inc/issuem.

### List Category Plugin
- This theme includes custom templates for the List Category plugin. Template files are located in folder list-category-posts
  - featured-large.php will pull in random post from assigned category.
  - image-left-excerpt-right.php will display the featured image on the left hand side and the excerpt and date on the right.
  - image-title-date.php will show the image on the top and exceprt on the bottom.
