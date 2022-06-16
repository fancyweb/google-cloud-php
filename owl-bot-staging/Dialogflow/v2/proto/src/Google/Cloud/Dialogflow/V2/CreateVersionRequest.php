<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/version.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Versions.CreateVersion][google.cloud.dialogflow.v2.Versions.CreateVersion].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateVersionRequest</code>
 */
class CreateVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to create a version for.
     * Supported formats:
     * - `projects/<Project ID>/agent`
     * - `projects/<Project ID>/locations/<Location ID>/agent`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to create a version for.
     *           Supported formats:
     *           - `projects/<Project ID>/agent`
     *           - `projects/<Project ID>/locations/<Location ID>/agent`
     *     @type \Google\Cloud\Dialogflow\V2\Version $version
     *           Required. The version to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to create a version for.
     * Supported formats:
     * - `projects/<Project ID>/agent`
     * - `projects/<Project ID>/locations/<Location ID>/agent`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to create a version for.
     * Supported formats:
     * - `projects/<Project ID>/agent`
     * - `projects/<Project ID>/locations/<Location ID>/agent`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Version::class);
        $this->version = $var;

        return $this;
    }

}

