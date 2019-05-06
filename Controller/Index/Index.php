<?php
namespace Bay20\Customlayout\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        //echo "string";die();
         //return $this->_resultPageFactory->create();
        $resultPage = $this->_resultPageFactory->create();
        // Set title of page
        $resultPage->getConfig()->getTitle()->set(__('Sample module in Magento 2 by Umesh'));
        $breadcrumbs = $resultPage->getLayout()->getBlock('breadcrumbs');
            $breadcrumbs->addCrumb('home', [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
                    ]
            );
            $breadcrumbs->addCrumb('blogs', [
                'label' => __('Test'),
                'title' => __('Test')
                    ]
            );
        return $resultPage;
    }
}
