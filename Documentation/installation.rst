Installation
============

1. Add the package as a dependency in your project composer root::

       composer req image-engineering/ie-site-template

2. Activate the site package in the Extension Manager within the TYPO3 backend.
3. Include the static TypoScript template ``Image Engineering Site Template`` in your root template record.
4. Import the site configuration by copying the files from ``Configuration/Site/Default`` into the instance specific site configuration directory (usually ``config/sites``).
5. Flush all caches.

Once installed you can assign the provided backend layouts ``Home Page Layout`` and ``Default Page Layout`` to your pages and start placing content elements into the dedicated content areas.
