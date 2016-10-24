<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2016 Amasty (https://www.amasty.com)
 * @package Amasty_Shopby
 */


namespace Amasty\Shopby\Observer\Admin;

use Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tabs;
use Magento\Framework\Event\ObserverInterface;

class ViewBlockAbstractToHtmlBefore implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $block = $observer->getBlock();
        if($block instanceof Tabs) {
            /** @var Tabs $block */
            $block->addTabAfter(
                'amasty_shopby',
                [
                    'label' => __('Improved Navigation'),
                    'title' => __('Improved Navigation'),
                    'content' => $block->getChildHtml('amshopby'),

                ],
                'front'
            );
        }
    }
}
