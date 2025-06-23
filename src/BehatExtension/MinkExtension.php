<?php

declare(strict_types=1);

namespace SilverStripe\MinkFacebookWebDriver\BehatExtension;

use Behat\MinkExtension\ServiceContainer\MinkExtension as BaseMinkExtension;
use SilverStripe\MinkFacebookWebDriver\FacebookFactory;

class MinkExtension extends BaseMinkExtension
{
    public function __construct()
    {
        parent::__construct();
        $this->registerDriverFactory(new FacebookFactory());
    }
}
