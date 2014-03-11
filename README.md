= Tags Example =

![Tags](assets/screenshot.png)

== Running the demo ==

On your project root

* git clone https://github.com/bravado/objectiveweb.git
* Setup your /ow-config.php file based on objectiveweb/ow-config.sample.php
    * Set database details
    * Add register_app('tags'); to ow-config.php

This should be your final layout

    /objectiveweb
    /ow-config.php
    /tags
        _init.php
        index.html
        ...

== Application Structure ==

The /tags directory contains our application, the only required file is `_init.php` on which we define our data domains.

We'll be using metaproject for the ui, to install it, run

    bower install bravado/metaproject

* All dependencies are loaded on the `index.html` file.
* Application modules are stored on the `modules` folder
    * Models are embedded on the main page using the `include` data-binding
* URLs are defined on the parent element, in this demo
    <div class="container page" data-bind="include: 'modules/items.html', url : 'items'"></div>

