<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A billing account in [GCP Console](https://console.cloud.google.com/).
 * You can assign a billing account to one or more projects.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.BillingAccount</code>
 */
class BillingAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Output only. True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     *
     * Generated from protobuf field <code>bool open = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $open = false;
    /**
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the GCP Console.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * If this account is a
     * [subaccount](https://cloud.google.com/billing/docs/concepts), then this
     * will be the resource name of the master billing account that it is being
     * resold through.
     * Otherwise this will be empty.
     *
     * Generated from protobuf field <code>string master_billing_account = 4;</code>
     */
    protected $master_billing_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the billing account. The resource name has the form
     *           `billingAccounts/{billing_account_id}`. For example,
     *           `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     *           billing account `012345-567890-ABCDEF`.
     *     @type bool $open
     *           Output only. True if the billing account is open, and will therefore be charged for any
     *           usage on associated projects. False if the billing account is closed, and
     *           therefore projects associated with it will be unable to use paid services.
     *     @type string $display_name
     *           The display name given to the billing account, such as `My Billing
     *           Account`. This name is displayed in the GCP Console.
     *     @type string $master_billing_account
     *           If this account is a
     *           [subaccount](https://cloud.google.com/billing/docs/concepts), then this
     *           will be the resource name of the master billing account that it is being
     *           resold through.
     *           Otherwise this will be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the billing account. The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF` would be the resource name for
     * billing account `012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * Output only. True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     *
     * Generated from protobuf field <code>bool open = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Output only. True if the billing account is open, and will therefore be charged for any
     * usage on associated projects. False if the billing account is closed, and
     * therefore projects associated with it will be unable to use paid services.
     *
     * Generated from protobuf field <code>bool open = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->open = $var;

        return $this;
    }

    /**
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the GCP Console.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name given to the billing account, such as `My Billing
     * Account`. This name is displayed in the GCP Console.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * If this account is a
     * [subaccount](https://cloud.google.com/billing/docs/concepts), then this
     * will be the resource name of the master billing account that it is being
     * resold through.
     * Otherwise this will be empty.
     *
     * Generated from protobuf field <code>string master_billing_account = 4;</code>
     * @return string
     */
    public function getMasterBillingAccount()
    {
        return $this->master_billing_account;
    }

    /**
     * If this account is a
     * [subaccount](https://cloud.google.com/billing/docs/concepts), then this
     * will be the resource name of the master billing account that it is being
     * resold through.
     * Otherwise this will be empty.
     *
     * Generated from protobuf field <code>string master_billing_account = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMasterBillingAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_billing_account = $var;

        return $this;
    }

}

