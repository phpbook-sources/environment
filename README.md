    
+ [About Environment](#about-environment)
+ [Composer Install](#composer-install)
+ [Declare Configurations](#declare-configurations)

### About Environment

- A PHP library to control server environments variables.

### Composer Install

	composer require phpbook/environment

### Declare Configurations

```php
<?php

/********************************************
 * 
 *  Declare Configurations
 * 
 * ******************************************/


/* Assign a environment variable with description */
\PHPBook\Environment\Variable::assign('APP-NAME', 'Application Name');

/* Assign a environment variable with description */
\PHPBook\Environment\Variable::assign('APP-VERSION', 'Application Version');

/* Get environment variable value */
$name = \PHPBook\Environment\Variable::get('APP-NAME');
if ($name) { // returns if assigned or null
	$name->getName(); $name->getDescription(); $name->getValue();
};

/* Get environment variable value */
$version = \PHPBook\Environment\Variable::get('APP-VERSION');
if ($version) { // returns if assigned or null
	$version->getName(); $version->getDescription(); $version->getValue();
};

/* Get all environment variable with values */
$variables = \PHPBook\Environment\Variable::list();
foreach($variables as $variable) {
	$variable->getName();
	$variable->getDescription();
	$variable->getValue();
};

?>
```

- Remember when you change the environment variable, you must restart your cgi webserver.