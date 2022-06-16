<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListFindingTypeStats` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ListFindingTypeStatsRequest</code>
 */
class ListFindingTypeStatsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, which should be a scan run resource name in the
     *           format
     *           'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
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

}

