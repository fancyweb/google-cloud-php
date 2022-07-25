<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1beta1/budget_service.proto

namespace Google\Cloud\Billing\Budgets\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListBudgets
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1beta1.ListBudgetsResponse</code>
 */
class ListBudgetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of the budgets owned by the requested billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1beta1.Budget budgets = 1;</code>
     */
    private $budgets;
    /**
     * If not empty, indicates that there may be more budgets that match the
     * request; this value should be passed in a new `ListBudgetsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Billing\Budgets\V1beta1\Budget>|\Google\Protobuf\Internal\RepeatedField $budgets
     *           List of the budgets owned by the requested billing account.
     *     @type string $next_page_token
     *           If not empty, indicates that there may be more budgets that match the
     *           request; this value should be passed in a new `ListBudgetsRequest`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1Beta1\BudgetService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of the budgets owned by the requested billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1beta1.Budget budgets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBudgets()
    {
        return $this->budgets;
    }

    /**
     * List of the budgets owned by the requested billing account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1beta1.Budget budgets = 1;</code>
     * @param array<\Google\Cloud\Billing\Budgets\V1beta1\Budget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBudgets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Billing\Budgets\V1beta1\Budget::class);
        $this->budgets = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more budgets that match the
     * request; this value should be passed in a new `ListBudgetsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more budgets that match the
     * request; this value should be passed in a new `ListBudgetsRequest`.
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

