<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->load('getPsCheckoutCartRepositoryService.php')) && false ?: '_'});
