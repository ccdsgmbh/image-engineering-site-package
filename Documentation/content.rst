Content Structure
=================

The Fluid templates expose the following content areas:

Home page
---------

* ``Announcement Banner`` (``colPos = 5``) – slim ribbon above the hero for campaign teasers.
* ``Hero Area`` (``colPos = 10``) – primary messaging with headline, copy and CTAs.
* ``Industries Highlights`` (``colPos = 20``) – cards or grids for industry verticals.
* ``News & Insights`` (``colPos = 30``) – short news teaser list.
* ``Standards & Expertise`` (``colPos = 40``) – badges, logos or trust builders.
* ``General Content`` (``colPos = 0``) – long form content below the fold.
* ``Footer Widgets`` (``colPos = 80``) – newsletter forms or rich footer content.

Default page
------------

* ``Page Header`` (``colPos = 10``) – hero or breadcrumb area.
* ``Main Content`` (``colPos = 0``) – primary page content.
* ``Sidebar`` (``colPos = 60``) – secondary navigation or teasers.
* ``Footer Content`` (``colPos = 80``) – bottom call-to-action tiles.

Menus
-----

Navigation is rendered automatically via TypoScript ``HMENU`` definitions. Use the page tree to control main, utility and footer menus.
