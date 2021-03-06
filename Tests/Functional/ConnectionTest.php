<?php
namespace Oro\Bundle\MessageQueueBundle\Tests\Functional;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Component\MessageQueue\Transport\ConnectionInterface;

class ConnectionTest extends WebTestCase
{
    public function setUp()
    {
        $this->initClient([], [], true);
    }
    
    public function testCouldBeGetFromContainerAsService()
    {
        $connection = $this->getContainer()->get('oro_message_queue.transport.connection');
        
        $this->assertInstanceOf(ConnectionInterface::class, $connection);
    }
}
