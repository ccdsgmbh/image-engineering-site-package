Development Notes
=================

SCSS and CSS
------------

The distributed CSS lives in ``Resources/Public/Styles/site.css``. Update the design in ``Resources/Private/Scss/site.scss`` and rebuild the compiled CSS (for small adjustments you can copy the SCSS to CSS).

JavaScript
----------

``Resources/Public/JavaScript/site.js`` contains a lightweight ES5 compatible script that handles the responsive navigation interactions. Extend this file for additional behaviour.

Fluid templates
----------------

* Layout: ``Resources/Private/Layouts/Default.html``
* Partials: ``Resources/Private/Partials/Shared`` (header and footer components)
* Page templates: ``Resources/Private/Templates/Page`` (``Home.html`` and ``Default.html``)

TypoScript
----------

TypoScript lives in ``Configuration/TypoScript``. ``setup.typoscript`` wires the Fluid templates and menu objects, while ``constants.typoscript`` exposes asset locations.

Testing
-------

A PHPUnit configuration is provided under ``Tests/phpunit.xml.dist``. Add your tests under ``Tests/Unit`` as the project evolves.
