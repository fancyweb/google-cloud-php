<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for forcing a task to run now using
 * [RunTask][google.cloud.tasks.v2.CloudTasks.RunTask].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2.RunTaskRequest</code>
 */
class RunTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2.Task.View response_view = 2;</code>
     */
    protected $response_view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The task name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *     @type int $response_view
     *           The response_view specifies which subset of the [Task][google.cloud.tasks.v2.Task] will be
     *           returned.
     *           By default response_view is [BASIC][google.cloud.tasks.v2.Task.View.BASIC]; not all
     *           information is retrieved by default because some data, such as
     *           payloads, might be desirable to return only when needed because
     *           of its large size or because of the sensitivity of data that it
     *           contains.
     *           Authorization for [FULL][google.cloud.tasks.v2.Task.View.FULL] requires
     *           `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     *           permission on the [Task][google.cloud.tasks.v2.Task] resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2.Task.View response_view = 2;</code>
     * @return int
     */
    public function getResponseView()
    {
        return $this->response_view;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2.Task.View response_view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2\Task\View::class);
        $this->response_view = $var;

        return $this;
    }

}

