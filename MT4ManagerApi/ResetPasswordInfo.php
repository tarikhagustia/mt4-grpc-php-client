<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace MT4ManagerApi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api_pb.ResetPasswordInfo</code>
 */
class ResetPasswordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 login = 1;</code>
     */
    private $login = 0;
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';
    /**
     * Generated from protobuf field <code>string password_investor = 3;</code>
     */
    private $password_investor = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $login
     *     @type string $password
     *     @type string $password_investor
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 login = 1;</code>
     * @return int
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Generated from protobuf field <code>int32 login = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLogin($var)
    {
        GPBUtil::checkInt32($var);
        $this->login = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password_investor = 3;</code>
     * @return string
     */
    public function getPasswordInvestor()
    {
        return $this->password_investor;
    }

    /**
     * Generated from protobuf field <code>string password_investor = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPasswordInvestor($var)
    {
        GPBUtil::checkString($var, True);
        $this->password_investor = $var;

        return $this;
    }

}

