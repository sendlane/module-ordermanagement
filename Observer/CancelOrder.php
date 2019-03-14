<?php

namespace Klarna\Ordermanagement\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class CancelOrder implements ObserverInterface
{
    private $log;

    public function __construct(LoggerInterface $log)
    {
        $this->log = $log;
    }
    
    public function execute(Observer $observer)
    {
        try {
            $order = $observer->getEvent()->getOrder();
        }catch (\Exception $e) {
            $this->logger->info($e->getMessage());
        }
    }
}
