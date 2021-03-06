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
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class AuthTestPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $user;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $userId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $team;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $teamId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $url;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }
    
    /**
     * @return string
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
