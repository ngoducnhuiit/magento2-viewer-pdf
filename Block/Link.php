<?php
/**
 * Link
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

use Magento\Framework\App\DefaultPathInterface;
use Magento\Framework\View\Element\Template\Context;

class Link extends \Magento\Framework\View\Element\Html\Link\Current
{
    public function __construct(
        Context $context,
        DefaultPathInterface $defaultPath,
        array $data = [])
    {
        parent::__construct($context, $defaultPath, $data);
    }
    public function toHtml()
    {
        return parent::toHtml();
    }
    public function getPath()
    {
        return $this->getData('path');
    }
    public function getLabel()
    {
        return __('Ngo Duc Nhu Link');
    }
}
