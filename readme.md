# Glottos 

#### An Online Translation/Localization System for Laravel Web Artisans

Check [Glottos Admin](https://github.com/antonioribeiro/glottosAdmin), a full featured site translation system built with Glottos.

A quick overview of what you are able to do with it:

```php

// Use the Facade to set a locale

Glottos::setLocale('pt_BR');

// And just use it

Glottos::translate('Laravel is a PHP Framework');

// There's a helper

g('Laravel is a PHP Framework');

// Choose a particular locale

Glottos::translate('Laravel is a PHP Framework', 'pt_BR')

// or 

Glottos::translate('Laravel is a PHP Framework', 'pt-br')

// Glottos let you choose between keys and natural language:

Glottos::translate('key::home.describe.laravel') 
Glottos::translate('natural::Laravel is a PHP Framework') 

// or you can just define your default as natural and use:

Glottos::translate('Laravel is a PHP Framework') 

// It will break your paragraphs in sentences

Glottos::translate('Laravel is a PHP Framework. Laravel was written by Taylor Otwell.')

// To not repeat itself, it will it will store those two sentences in your database:

'Laravel is a PHP Framework'
'Laravel was written by Taylor Otwell'

// Removing punctuation and special chars.

// With a simple blade trick 

Blade::extend(function ($view) {

	return preg_replace('/{{\'((.|\s)*?)\'}}/', '<?php echo Glottos::translate("$1"); ?>', $view);

});

// You can use it beautifully in your Views:

<p>{{'Laravel is a PHP Framework'}}</p>

// You can still use the Lang Facade, Glottos has a compatible one

Lang::trans('Photography')

// And use choice

Lang::choice('Photography|Photographies', 100, array(), 'pt_BR')

Glottos::choice('Photography|Photographies', 100, array(), 'pt_BR')

// And dozens of other features, like importing your current language files

```

The idea behind this package is very simple: you need your web app to become multi-language fast so you better translate it all online, with some help from co-workers or the community.

### Installation

#### Requirements

- Any flavour of PHP 5.3.7+ should do
- [optional] PHPUnit to execute the test suite

#### With Composer

`composer require pragmarx/glottos dev-master`

Once this operation completes, add the service provider to your app/config/app.php:

```
'PragmaRX\Glottos\Vendor\Laravel\ServiceProvider',
```

Migrate Glottos tables:

```
php artisan migrate --env=development --package=pragmarx/glottos
```

Import your current language files:

```
php artisan glottos:import
```

And you should be good to go. Enjoy!

<a name="about-author"/>
### Author

Antonio Carlos Ribeiro - <acr@antoniocarlosribeiro.com> - <http://twitter.com/iantonioribeiro>

<a name="about-license"/>
### License

Glottos is licensed under the MIT License - see the `LICENSE` file for details

### Contributing

Pull requests and issues are more than welcome.