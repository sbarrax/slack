<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Tests\Serializer;

use CL\Slack\Test\MockPayload;
use CL\Slack\Tests\AbstractTestCase;
use CL\Slack\Serializer\PayloadSerializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class PayloadSerializerTest extends AbstractTestCase
{
    /**
     * @var PayloadSerializer
     */
    private $payloadSerializer;

    protected function setUp()
    {
        $this->payloadSerializer = new PayloadSerializer();
    }

    public function testSerialize()
    {
        $payload = new MockPayload();
        $payload->setFoo('bar');

        $serializedPayload = $this->payloadSerializer->serialize($payload);

        $this->assertInternalType('array', $serializedPayload);
        $this->assertArrayHasKey('foo', $serializedPayload);
        $this->assertEquals('bar', $serializedPayload['foo']);
    }
}
