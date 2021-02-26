<?php
/**
 * LinkPdf
 *
 * @copyright Copyright © 2021 Magepow. All rights reserved.
 * @author    Magepow
 * @category Magepow
 * @copyright Copyright (c) 2014 Magepow (<https://www.magepow.com>)
 * @license <https://www.magepow.com/license-agreement.html>
 * @Author: magepow<support@magepow.com>
 * @github: <https://github.com/magepow>
 */

namespace Magepow\ViewerPdf\Block;

use Magento\Catalog\Model\Product;
class LinkPdf extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Product
     */
    protected $_category = null;

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @var \Magento\Catalog\Model\CategoryRepository
     */
    protected $categoryRepository;
    protected $_storeManager;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlInterface,
        array $data = []
    )
    {
        $this->_storeManager = $storeManager;
        $this->_urlInterface = $urlInterface;
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
}
