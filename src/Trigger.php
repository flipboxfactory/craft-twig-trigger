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
        $twig = Craft::$app->getView()->getTwig();
        if (!$twig->hasExtension(TriggerExtension::class)) {
            $twig->addExtension(new TriggerExtension());
        }
    }
}
