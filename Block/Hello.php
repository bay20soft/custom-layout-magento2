<?php
namespace Bay20\Customlayout\Block;
class Hello extends \Magento\Framework\View\Element\Template
{
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getContentForDisplay()
    {
        return __("Successful! This is a sample module in Magento 2.");
    }
}
