[![License](https://poser.pugx.org/cvilleger/swaggeruibundle/license)](https://packagist.org/packages/cvilleger/swaggeruibundle)
[![Latest Unstable Version](https://poser.pugx.org/cvilleger/swaggeruibundle/v/unstable)](https://packagist.org/packages/cvilleger/swaggeruibundle)

SwaggeruiBundle
=================

Creates a SwaggerUI page in your Symfony application.

- Basic functionalities
- Customization

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require cvilleger/SwaggeruiBundle "dev-master"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Cvilleger\SwaggeruiBundle\CvillegerSwaggeruiBundle(),
        );

        // ...
    }

    // ...
}
```
Step 3: Routing
-------------------------

Add routing in the `app\config\routing.yml` file of your project:

```yaml
cvilleger_swaggerui:
    resource: "@CvillegerSwaggeruiBundle/Resources/config/routing.yml"
    prefix:   /doc
```

Step 4: Parameters (optional)
-------------------------

Add parameters in the `app\config\parameters.yml` file of your project:

```yaml
swaggerui:
    - title: 'SwaggeruiBundleProject'
    - url: 'http://petstore.swagger.io/v2/swagger.json' || 'swaggerJsonRouteName'
```

