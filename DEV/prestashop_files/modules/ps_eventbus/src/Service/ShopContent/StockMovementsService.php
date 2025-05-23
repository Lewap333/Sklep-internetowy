<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\Module\PsEventbus\Service\ShopContent;

use PrestaShop\Module\PsEventbus\Config\Config;
use PrestaShop\Module\PsEventbus\Repository\StockMovementRepository;

if (!defined('_PS_VERSION_')) {
    exit;
}

class StockMovementsService extends ShopContentAbstractService implements ShopContentServiceInterface
{
    /** @var StockMovementRepository */
    private $stockMovementRepository;

    public function __construct(StockMovementRepository $stockMovementRepository)
    {
        $this->stockMovementRepository = $stockMovementRepository;
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $langIso
     *
     * @return array<mixed>
     */
    public function getContentsForFull($offset, $limit, $langIso)
    {
        $result = $this->stockMovementRepository->retrieveContentsForFull($offset, $limit, $langIso);

        if (empty($result)) {
            return [];
        }

        $this->castStockMovements($result);

        return array_map(function ($item) {
            return [
                'action' => Config::INCREMENTAL_TYPE_UPSERT,
                'collection' => Config::COLLECTION_STOCK_MOVEMENTS,
                'properties' => $item,
            ];
        }, $result);
    }

    /**
     * @param int $limit
     * @param array<mixed> $upsertedContents
     * @param array<mixed> $deletedContents
     * @param string $langIso
     *
     * @return array<mixed>
     */
    public function getContentsForIncremental($limit, $upsertedContents, $deletedContents, $langIso)
    {
        $result = $this->stockMovementRepository->retrieveContentsForIncremental($limit, array_column($upsertedContents, 'id'), $langIso);

        if (!empty($result)) {
            $this->castStockMovements($result);
        }

        return parent::formatIncrementalSyncResponse(Config::COLLECTION_STOCK_MOVEMENTS, $result, $deletedContents);
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $langIso
     *
     * @return int
     */
    public function getFullSyncContentLeft($offset, $limit, $langIso)
    {
        return $this->stockMovementRepository->countFullSyncContentLeft($offset, $limit, $langIso);
    }

    /**
     * @param array<mixed> $stockMovements
     *
     * @return void
     */
    private function castStockMovements(&$stockMovements)
    {
        foreach ($stockMovements as &$stockMovement) {
            $date = $stockMovement['date_add'];

            $stockMovement['id_stock_mvt'] = (int) $stockMovement['id_stock_mvt'];
            $stockMovement['id_stock'] = (int) $stockMovement['id_stock'];
            $stockMovement['id_order'] = (int) $stockMovement['id_order'];
            $stockMovement['id_supply_order'] = (int) $stockMovement['id_supply_order'];
            $stockMovement['id_stock_mvt_reason'] = (int) $stockMovement['id_stock_mvt_reason'];
            $stockMovement['id_lang'] = (int) $stockMovement['id_lang'];
            $stockMovement['id_employee'] = (int) $stockMovement['id_employee'];
            $stockMovement['physical_quantity'] = (int) $stockMovement['physical_quantity'];
            $stockMovement['date_add'] = $date;
            $stockMovement['sign'] = (int) $stockMovement['sign'];
            $stockMovement['price_te'] = (float) $stockMovement['price_te'];
            $stockMovement['last_wa'] = (float) $stockMovement['last_wa'];
            $stockMovement['current_wa'] = (float) $stockMovement['current_wa'];
            $stockMovement['referer'] = (int) $stockMovement['referer'];
            $stockMovement['deleted'] = (bool) $stockMovement['deleted'];
            $stockMovement['created_at'] = $date;
        }
    }
}
