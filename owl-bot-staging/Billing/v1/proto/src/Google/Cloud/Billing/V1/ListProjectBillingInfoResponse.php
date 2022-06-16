<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `ListProjectBillingInfoResponse`.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.ListProjectBillingInfoResponse</code>
 */
class ListProjectBillingInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of `ProjectBillingInfo` resources representing the projects
     * associated with the billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 1;</code>
     */
    private $project_billing_info;
    /**
     * A token to retrieve the next page of results. To retrieve the next page,
     * call `ListProjectBillingInfo` again with the `page_token` field set to this
     * value. This field is empty if there are no more results to retrieve.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Billing\V1\ProjectBillingInfo[]|\Google\Protobuf\Internal\RepeatedField $project_billing_info
     *           A list of `ProjectBillingInfo` resources representing the projects
     *           associated with the billing account.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results. To retrieve the next page,
     *           call `ListProjectBillingInfo` again with the `page_token` field set to this
     *           value. This field is empty if there are no more results to retrieve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of `ProjectBillingInfo` resources representing the projects
     * associated with the billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjectBillingInfo()
    {
        return $this->project_billing_info;
    }

    /**
     * A list of `ProjectBillingInfo` resources representing the projects
     * associated with the billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.ProjectBillingInfo project_billing_info = 1;</code>
     * @param \Google\Cloud\Billing\V1\ProjectBillingInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjectBillingInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Billing\V1\ProjectBillingInfo::class);
        $this->project_billing_info = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results. To retrieve the next page,
     * call `ListProjectBillingInfo` again with the `page_token` field set to this
     * value. This field is empty if there are no more results to retrieve.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results. To retrieve the next page,
     * call `ListProjectBillingInfo` again with the `page_token` field set to this
     * value. This field is empty if there are no more results to retrieve.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

