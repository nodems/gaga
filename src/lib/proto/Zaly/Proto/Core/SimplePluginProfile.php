<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/plugin.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.SimplePluginProfile</code>
 */
class SimplePluginProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string landingPageUrl = 2;</code>
     */
    private $landingPageUrl = '';
    /**
     * Generated from protobuf field <code>.core.PluginLoadingType loadingType = 3;</code>
     */
    private $loadingType = 0;
    /**
     * Generated from protobuf field <code>bool landingPageWithProxy = 4;</code>
     */
    private $landingPageWithProxy = false;

    public function __construct() {
        \GPBMetadata\Core\Plugin::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string landingPageUrl = 2;</code>
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->landingPageUrl;
    }

    /**
     * Generated from protobuf field <code>string landingPageUrl = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLandingPageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->landingPageUrl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.PluginLoadingType loadingType = 3;</code>
     * @return int
     */
    public function getLoadingType()
    {
        return $this->loadingType;
    }

    /**
     * Generated from protobuf field <code>.core.PluginLoadingType loadingType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLoadingType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\PluginLoadingType::class);
        $this->loadingType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool landingPageWithProxy = 4;</code>
     * @return bool
     */
    public function getLandingPageWithProxy()
    {
        return $this->landingPageWithProxy;
    }

    /**
     * Generated from protobuf field <code>bool landingPageWithProxy = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setLandingPageWithProxy($var)
    {
        GPBUtil::checkBool($var);
        $this->landingPageWithProxy = $var;

        return $this;
    }

}

