<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

//require_once __DIR__.'/../vendor/stripe/stripe-php/lib/Stripe.php';
//$loader->add('', __DIR__.'/../vendor/stripe/stripe-php/lib');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
