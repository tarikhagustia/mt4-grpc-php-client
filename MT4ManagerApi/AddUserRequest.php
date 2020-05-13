<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace MT4ManagerApi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api_pb.AddUserRequest</code>
 */
class AddUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    private $token = '';
    /**
     * Generated from protobuf field <code>.api_pb.AddUserInfo user = 2;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *     @type \MT4ManagerApi\AddUserInfo $user
     *     @type \Google\Protobuf\FieldMask $update_mask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api_pb.AddUserInfo user = 2;</code>
     * @return \MT4ManagerApi\AddUserInfo
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.api_pb.AddUserInfo user = 2;</code>
     * @param \MT4ManagerApi\AddUserInfo $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \MT4ManagerApi\AddUserInfo::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

