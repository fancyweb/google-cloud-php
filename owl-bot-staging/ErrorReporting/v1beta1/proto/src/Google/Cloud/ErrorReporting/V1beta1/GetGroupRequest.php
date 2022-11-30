<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_group_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to return an individual group.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.GetGroupRequest</code>
 */
class GetGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group resource name. Written as
     * `projects/{projectID}/groups/{group_name}`. Call
     * [`groupStats.list`](https://cloud.google.com/error-reporting/reference/rest/v1beta1/projects.groupStats/list)
     * to return a list of groups belonging to this project.
     * Example: `projects/my-project-123/groups/my-group`
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $group_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_name
     *           Required. The group resource name. Written as
     *           `projects/{projectID}/groups/{group_name}`. Call
     *           [`groupStats.list`](https://cloud.google.com/error-reporting/reference/rest/v1beta1/projects.groupStats/list)
     *           to return a list of groups belonging to this project.
     *           Example: `projects/my-project-123/groups/my-group`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorGroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group resource name. Written as
     * `projects/{projectID}/groups/{group_name}`. Call
     * [`groupStats.list`](https://cloud.google.com/error-reporting/reference/rest/v1beta1/projects.groupStats/list)
     * to return a list of groups belonging to this project.
     * Example: `projects/my-project-123/groups/my-group`
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Required. The group resource name. Written as
     * `projects/{projectID}/groups/{group_name}`. Call
     * [`groupStats.list`](https://cloud.google.com/error-reporting/reference/rest/v1beta1/projects.groupStats/list)
     * to return a list of groups belonging to this project.
     * Example: `projects/my-project-123/groups/my-group`
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

}

