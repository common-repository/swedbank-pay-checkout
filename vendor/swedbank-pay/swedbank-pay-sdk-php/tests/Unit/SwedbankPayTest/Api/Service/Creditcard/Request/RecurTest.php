<?php
// phpcs:ignoreFile -- this is test

namespace SwedbankPayTest\Api\Service\Creditcard\Request;

use TestCase;
use SwedbankPay\Api\Service\Creditcard\Request\Recur;

class RecurTest extends TestCase
{
    public function testData()
    {
        $object = new Recur();
        $object->setClient($this->client);
        $this->assertTrue(method_exists($object, 'setup'));
        $this->assertNull($object->setup());

        $this->assertNotNull($object->getRequestMethod());
        $this->assertNotNull($object->getRequestEndpoint());
        $this->assertNotNull($object->getServiceOperation());
    }
}
