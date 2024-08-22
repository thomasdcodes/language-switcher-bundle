# thomasd.codes Language Switcher Bundle for Symfony
## Description
With this Bundle you are able to switch the users language with ease.

## Install
```shell
composer require thomasdcodes/language-switcher-bundle
```
If you're using Symfony Flex, the Bundle should be registered in your config/bundles.php

Inside config/routes add a new file (tdc_language_switcher_bundle.yaml) with the following standard settings:
```yaml
tdc_language_switcher_bundle.routes:
  resource: '@TdcLanguageSwitcherBundle/config/routes.yaml'
```

## Template 
To use the Language Switch inside your navigation template inside a li-Tag:
```twig
{% include '@TdcLanguageSwitcher/_language_switch.html.twig' %}
```