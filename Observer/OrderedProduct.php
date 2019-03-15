<?php

namespace Sendlane\Ordermanagement\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class OrderedProduct implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $this->logger->info("OrderedProduct");

        try {
            $order = $observer->getEvent()->getOrder();
        } catch (\Exception $e) {
            $this->logger->info($e->getMessage());
        }
    }
}
