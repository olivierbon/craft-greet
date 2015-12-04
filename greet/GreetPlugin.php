<?php
namespace Craft;

class GreetPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Greet');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Olivier Bon';
    }

    function getDeveloperUrl()
    {
        return 'http://olivierbon.com';
    }
}