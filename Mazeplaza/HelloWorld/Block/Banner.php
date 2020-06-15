<?php

namespace Mazeplaza\HelloWorld\Block;

class Banner extends \Magento\Framework\View\Element\Template
{
    protected $_values = null;
    protected $_scopeConfig;
    protected $helperData;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Mazeplaza\HelloWorld\Helper\Data $helperData,

        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getBannerConfig()
    {
        return $this->helperData->getBannerConfig();
    }
}
