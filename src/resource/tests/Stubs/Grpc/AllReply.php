<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
# source: Grpc/grpc.proto

namespace HyperfTest\Resource\Stubs\Grpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HyperfTest.Resource.Stubs.Grpc.AllReply</code>.
 */
class AllReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     */
    private $message = '';

    /**
     * Generated from protobuf field <code>repeated .HyperfTest.Resource.Stubs.Grpc.HiUser users = 2;</code>.
     */
    private $users;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var string $message
     *     @var \Google\Protobuf\Internal\RepeatedField|\HyperfTest\Resource\Stubs\Grpc\HiUser[] $users
     * }
     */
    public function __construct($data = null)
    {
        \HyperfTest\Resource\Stubs\Grpc\GPBMetadata\Grpc\Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>.
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, true);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .HyperfTest.Resource.Stubs.Grpc.HiUser users = 2;</code>.
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .HyperfTest.Resource.Stubs.Grpc.HiUser users = 2;</code>.
     * @param \Google\Protobuf\Internal\RepeatedField|\HyperfTest\Resource\Stubs\Grpc\HiUser[] $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HyperfTest\Resource\Stubs\Grpc\HiUser::class);
        $this->users = $arr;

        return $this;
    }
}