<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

declare(strict_types=1);

namespace PrestaShop\Module\APIResources\ApiPlatform\Resources\Module;

use ApiPlatform\Metadata\ApiResource;
use PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkToggleModuleStatusCommand;
use PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkUninstallModuleCommand;
use PrestaShop\PrestaShop\Core\Domain\Module\Exception\ModuleNotFoundException;
use PrestaShopBundle\ApiPlatform\Metadata\CQRSUpdate;

#[ApiResource(
    operations: [
        new CQRSUpdate(
            uriTemplate: '/modules/toggle-status',
            output: false,
            CQRSCommand: BulkToggleModuleStatusCommand::class,
            scopes: [
                'module_write',
            ],
            CQRSCommandMapping: [
                '[enabled]' => '[expectedStatus]',
            ],
        ),
        new CQRSUpdate(
            uriTemplate: '/modules/uninstall',
            output: false,
            CQRSCommand: BulkUninstallModuleCommand::class,
            scopes: [
                'module_write',
            ],
        ),
    ],
    exceptionToStatus: [ModuleNotFoundException::class => 404],
)]
class BulkModules
{
    /**
     * @var string[]
     */
    public array $modules;

    public bool $enabled;

    public bool $deleteFiles;
}
