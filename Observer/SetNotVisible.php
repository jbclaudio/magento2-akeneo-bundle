<?php

namespace JustBetter\AkeneoBundle\Observer;

use Exception;
use JustBetter\AkeneoBundle\Job\SetNotVisible as SetNotVisibleJob;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SetNotVisible implements ObserverInterface
{
    public function __construct(
        protected SetNotVisibleJob $job
    ) {
    }

    /**
     * @throws Exception
     */
    public function execute(Observer $observer): void
    {
        $this->job->execute();
    }
}
