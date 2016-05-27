<?php
namespace Oro\Bundle\MessageQueueBundle\Tests\Functional;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Component\MessageQueue\ZeroConfig\MessageProducer;

class MessageProducerTest extends WebTestCase
{
    public function setUp()
    {
        $this->initClient([], [], true);
    }

    public function testCouldBeGetFromContainerAsService()
    {
        $messageProducer = $this->getContainer()->get('oro_message_queue.zero_config.message_producer');

        $this->assertInstanceOf(MessageProducer::class, $messageProducer);
    }
}