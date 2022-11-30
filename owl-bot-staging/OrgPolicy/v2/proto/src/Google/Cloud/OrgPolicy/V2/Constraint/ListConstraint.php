<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/constraint.proto

namespace Google\Cloud\OrgPolicy\V2\Constraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Constraint` that allows or disallows a list of string values, which are
 * configured by an Organization's policy administrator with a `Policy`.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.Constraint.ListConstraint</code>
 */
class ListConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether values grouped into categories can be used in
     * `Policy.allowed_values` and `Policy.denied_values`. For example,
     * `"in:Python"` would match any value in the 'Python' group.
     *
     * Generated from protobuf field <code>bool supports_in = 1;</code>
     */
    protected $supports_in = false;
    /**
     * Indicates whether subtrees of Cloud Resource Manager resource hierarchy
     * can be used in `Policy.allowed_values` and `Policy.denied_values`. For
     * example, `"under:folders/123"` would match any resource under the
     * 'folders/123' folder.
     *
     * Generated from protobuf field <code>bool supports_under = 2;</code>
     */
    protected $supports_under = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $supports_in
     *           Indicates whether values grouped into categories can be used in
     *           `Policy.allowed_values` and `Policy.denied_values`. For example,
     *           `"in:Python"` would match any value in the 'Python' group.
     *     @type bool $supports_under
     *           Indicates whether subtrees of Cloud Resource Manager resource hierarchy
     *           can be used in `Policy.allowed_values` and `Policy.denied_values`. For
     *           example, `"under:folders/123"` would match any resource under the
     *           'folders/123' folder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Constraint::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether values grouped into categories can be used in
     * `Policy.allowed_values` and `Policy.denied_values`. For example,
     * `"in:Python"` would match any value in the 'Python' group.
     *
     * Generated from protobuf field <code>bool supports_in = 1;</code>
     * @return bool
     */
    public function getSupportsIn()
    {
        return $this->supports_in;
    }

    /**
     * Indicates whether values grouped into categories can be used in
     * `Policy.allowed_values` and `Policy.denied_values`. For example,
     * `"in:Python"` would match any value in the 'Python' group.
     *
     * Generated from protobuf field <code>bool supports_in = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsIn($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_in = $var;

        return $this;
    }

    /**
     * Indicates whether subtrees of Cloud Resource Manager resource hierarchy
     * can be used in `Policy.allowed_values` and `Policy.denied_values`. For
     * example, `"under:folders/123"` would match any resource under the
     * 'folders/123' folder.
     *
     * Generated from protobuf field <code>bool supports_under = 2;</code>
     * @return bool
     */
    public function getSupportsUnder()
    {
        return $this->supports_under;
    }

    /**
     * Indicates whether subtrees of Cloud Resource Manager resource hierarchy
     * can be used in `Policy.allowed_values` and `Policy.denied_values`. For
     * example, `"under:folders/123"` would match any resource under the
     * 'folders/123' folder.
     *
     * Generated from protobuf field <code>bool supports_under = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsUnder($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_under = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListConstraint::class, \Google\Cloud\OrgPolicy\V2\Constraint_ListConstraint::class);

