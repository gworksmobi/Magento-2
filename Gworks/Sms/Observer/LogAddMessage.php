<?php
namespace Gworks\Sms\Observer;
use Magento\Framework\Event\ObserverInterface;
class LogAddMessage implements ObserverInterface
{
    protected $_logger;
    public function __construct(
        \Psr\Log\LoggerInterface $logger, //log injection
        array $data = []
    ) {
        $this->_logger = $logger;
       // parent::__construct($data);
    }
 
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
       $this->_logger->addDebug('getplace oreder event occured successfully!');
    }
	
    public function getOrder(\Magento\Framework\Event\Observer $observer)
    {
	$order = $observer->getEvent()->getOrder();
        $order_id = $order->getIncrementId();
        $this->logger->addDebug($order_id);       
    }
}
