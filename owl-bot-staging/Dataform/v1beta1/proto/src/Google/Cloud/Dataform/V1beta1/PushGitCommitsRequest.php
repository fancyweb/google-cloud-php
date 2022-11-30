<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `PushGitCommits` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.PushGitCommitsRequest</code>
 */
class PushGitCommitsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The workspace's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The name of the branch in the Git remote to which commits should be pushed.
     * If left unset, the repository's default branch name will be used.
     *
     * Generated from protobuf field <code>string remote_branch = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $remote_branch = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The workspace's name.
     *     @type string $remote_branch
     *           Optional. The name of the branch in the Git remote to which commits should be pushed.
     *           If left unset, the repository's default branch name will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The workspace's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The workspace's name.
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
     * Optional. The name of the branch in the Git remote to which commits should be pushed.
     * If left unset, the repository's default branch name will be used.
     *
     * Generated from protobuf field <code>string remote_branch = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRemoteBranch()
    {
        return $this->remote_branch;
    }

    /**
     * Optional. The name of the branch in the Git remote to which commits should be pushed.
     * If left unset, the repository's default branch name will be used.
     *
     * Generated from protobuf field <code>string remote_branch = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteBranch($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_branch = $var;

        return $this;
    }

}

