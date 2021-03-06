<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

use JMS\Serializer\Annotation as Serializer;

/**
 * Payload that triggers the channels.history-method; allowing you to fetch historical information about a given channel
 *
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/im.history
 */
class ImHistoryPayload extends AbstractPayload
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $channel;

    /**
     * @var string
     *
     * @Serializer\Type("float")
     */
    private $oldest;

    /**
     * @var string
     *
     * @Serializer\Type("float")
     */
    private $latest;

    /**
     * @var string
     *
     * @Serializer\Type("integer")
     */
    private $count;

    /**
     * @param string $imId
     */
    public function setImId($imId)
    {
        $this->channel = $imId;
    }

    /**
     * @return string
     */
    public function getImId()
    {
        return $this->channel;
    }

    /**
     * @param float|string|null $latest
     */
    public function setLatest($latest = null)
    {
        $this->latest = $latest;
    }

    /**
     * @return float|string|null
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param float|null $oldest
     */
    public function setOldest($oldest = null)
    {
        $this->oldest = $oldest;
    }

    /**
     * @return float|null
     */
    public function getOldest()
    {
        return $this->oldest;
    }

    /**
     * @param int|null $count
     */
    public function setCount($count = null)
    {
        $this->count = $count;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'im.history';
    }
}
