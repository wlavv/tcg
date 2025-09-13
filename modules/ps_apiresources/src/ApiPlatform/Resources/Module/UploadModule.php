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

namespace PrestaShop\Module\APIResources\ApiPlatform\Resources\Module;

use ApiPlatform\Metadata\ApiResource;
use PrestaShop\PrestaShop\Core\Domain\Module\Command\UploadModuleCommand;
use PrestaShop\PrestaShop\Core\Domain\Module\Exception\ModuleNotFoundException;
use PrestaShop\PrestaShop\Core\Domain\Module\Query\GetModuleInfos;
use PrestaShopBundle\ApiPlatform\Metadata\CQRSCreate;
use Symfony\Component\HttpFoundation\File\File;

#[ApiResource(
    operations: [
        new CQRSCreate(
            uriTemplate: '/module/upload-source',
            CQRSCommand: UploadModuleCommand::class,
            CQRSQuery: GetModuleInfos::class,
            scopes: [
                'module_write',
            ],
        ),
        new CQRSCreate(
            uriTemplate: '/module/upload-archive',
            inputFormats: ['multipart' => ['multipart/form-data']],
            read: false,
            CQRSCommand: UploadModuleCommand::class,
            CQRSQuery: GetModuleInfos::class,
            scopes: [
                'module_write',
            ],
            CQRSCommandMapping: [
                '[archive].pathName' => '[source]',
            ],
        ),
    ],
    normalizationContext: ['skip_null_values' => false],
    exceptionToStatus: [ModuleNotFoundException::class => 404],
)]
class UploadModule extends Module
{
    public string $source;

    public File $archive;
}
