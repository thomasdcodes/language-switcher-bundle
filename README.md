# thomasd.codes Language Switcher Bundle for Symfony
## Description
With this Bundle you are able to switch the users language with ease.

## Install
```shell
composer require thomasdcodes/language-switcher-bundle
```
If you're using Symfony Flex, the Bundle should be registered in your config/bundles.php

Insight config/routes add a new file with the following standard settings:
```yaml
tdc_language_switcher_bundle.routes:
  resource: '@TdcLanguageSwitcherBundle/config/routes.yaml'
```

## Template 
To use the Language Switch insight your navigation template insight a li-Tag:
```twig
{% include '@TdcLanguageSwitcher/_language_switch.html.twig' %}
```