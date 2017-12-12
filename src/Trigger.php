<?php

namespace flipbox\twig;

use Craft;
use craft\base\Plugin;

class Trigger extends Plugin
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // Add in our Twig extensions
        Craft::$app->getView()->getTwig()->addExtension(
            new TriggerExtension()
        );
    }
}
