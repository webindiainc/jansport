<?php

/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Storelocator
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

namespace Magestore\Storelocator\Model;

/**
 * Model Tag.
 *
 * @category Magestore
 * @package  Magestore_Storelocator
 * @module   Storelocator
 * @author   Magestore Developer
 */
class Tag extends \Magestore\Storelocator\Model\AbstractModelManageStores
{
    const TAG_ICON_RELATIVE_PATH = 'magestore/storelocator/images/tag';

    /**
     * Model construct that should be used for object initialization.
     */
    public function _construct()
    {
        $this->_init('Magestore\Storelocator\Model\ResourceModel\Tag');
    }
}