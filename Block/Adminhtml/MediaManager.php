<?php
namespace VS7\MediaManager\Block\Adminhtml;

class MediaManager extends \Magento\Framework\View\Element\Template
{
    public function getMediaButton()
    {
        $sourceUrl = $this->getUrl(
            'cms/wysiwyg_images/index',
            ['type' => 'file']
        );

        $chooser = $this->getLayout()->createBlock('Magento\Backend\Block\Widget\Button')
            ->setType('button')
            ->setClass('btn-chooser')
            ->setLabel('Manage')
            ->setOnClick('MediabrowserUtility.openDialog(\'' . $sourceUrl . '\')');
        return $chooser->toHtml();
    }
}
