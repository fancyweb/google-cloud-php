<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule is a condition-action pair
 * * A condition defines when a rule is to be triggered.
 * * An action specifies what occurs on that trigger.
 * Currently rules only work for [controls][google.cloud.retail.v2.Control] with
 * [SOLUTION_TYPE_SEARCH][google.cloud.retail.v2.SolutionType.SOLUTION_TYPE_SEARCH].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule</code>
 */
class Rule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The condition that triggers the rule.
     * If the condition is empty, the rule will always apply.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Condition condition = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $condition = null;
    protected $action;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\Rule\BoostAction $boost_action
     *           A boost action.
     *     @type \Google\Cloud\Retail\V2\Rule\RedirectAction $redirect_action
     *           Redirects a shopper to a specific page.
     *     @type \Google\Cloud\Retail\V2\Rule\OnewaySynonymsAction $oneway_synonyms_action
     *           Treats specific term as a synonym with a group of terms.
     *           Group of terms will not be treated as synonyms with the specific term.
     *     @type \Google\Cloud\Retail\V2\Rule\DoNotAssociateAction $do_not_associate_action
     *           Prevents term from being associated with other terms.
     *     @type \Google\Cloud\Retail\V2\Rule\ReplacementAction $replacement_action
     *           Replaces specific terms in the query.
     *     @type \Google\Cloud\Retail\V2\Rule\IgnoreAction $ignore_action
     *           Ignores specific terms from query during search.
     *     @type \Google\Cloud\Retail\V2\Rule\FilterAction $filter_action
     *           Filters results.
     *     @type \Google\Cloud\Retail\V2\Rule\TwowaySynonymsAction $twoway_synonyms_action
     *           Treats a set of terms as synonyms of one another.
     *     @type \Google\Cloud\Retail\V2\Condition $condition
     *           Required. The condition that triggers the rule.
     *           If the condition is empty, the rule will always apply.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * A boost action.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.BoostAction boost_action = 2;</code>
     * @return \Google\Cloud\Retail\V2\Rule\BoostAction|null
     */
    public function getBoostAction()
    {
        return $this->readOneof(2);
    }

    public function hasBoostAction()
    {
        return $this->hasOneof(2);
    }

    /**
     * A boost action.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.BoostAction boost_action = 2;</code>
     * @param \Google\Cloud\Retail\V2\Rule\BoostAction $var
     * @return $this
     */
    public function setBoostAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\BoostAction::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Redirects a shopper to a specific page.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.RedirectAction redirect_action = 3;</code>
     * @return \Google\Cloud\Retail\V2\Rule\RedirectAction|null
     */
    public function getRedirectAction()
    {
        return $this->readOneof(3);
    }

    public function hasRedirectAction()
    {
        return $this->hasOneof(3);
    }

    /**
     * Redirects a shopper to a specific page.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.RedirectAction redirect_action = 3;</code>
     * @param \Google\Cloud\Retail\V2\Rule\RedirectAction $var
     * @return $this
     */
    public function setRedirectAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\RedirectAction::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Treats specific term as a synonym with a group of terms.
     * Group of terms will not be treated as synonyms with the specific term.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.OnewaySynonymsAction oneway_synonyms_action = 6;</code>
     * @return \Google\Cloud\Retail\V2\Rule\OnewaySynonymsAction|null
     */
    public function getOnewaySynonymsAction()
    {
        return $this->readOneof(6);
    }

    public function hasOnewaySynonymsAction()
    {
        return $this->hasOneof(6);
    }

    /**
     * Treats specific term as a synonym with a group of terms.
     * Group of terms will not be treated as synonyms with the specific term.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.OnewaySynonymsAction oneway_synonyms_action = 6;</code>
     * @param \Google\Cloud\Retail\V2\Rule\OnewaySynonymsAction $var
     * @return $this
     */
    public function setOnewaySynonymsAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\OnewaySynonymsAction::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Prevents term from being associated with other terms.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.DoNotAssociateAction do_not_associate_action = 7;</code>
     * @return \Google\Cloud\Retail\V2\Rule\DoNotAssociateAction|null
     */
    public function getDoNotAssociateAction()
    {
        return $this->readOneof(7);
    }

    public function hasDoNotAssociateAction()
    {
        return $this->hasOneof(7);
    }

    /**
     * Prevents term from being associated with other terms.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.DoNotAssociateAction do_not_associate_action = 7;</code>
     * @param \Google\Cloud\Retail\V2\Rule\DoNotAssociateAction $var
     * @return $this
     */
    public function setDoNotAssociateAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\DoNotAssociateAction::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Replaces specific terms in the query.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.ReplacementAction replacement_action = 8;</code>
     * @return \Google\Cloud\Retail\V2\Rule\ReplacementAction|null
     */
    public function getReplacementAction()
    {
        return $this->readOneof(8);
    }

    public function hasReplacementAction()
    {
        return $this->hasOneof(8);
    }

    /**
     * Replaces specific terms in the query.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.ReplacementAction replacement_action = 8;</code>
     * @param \Google\Cloud\Retail\V2\Rule\ReplacementAction $var
     * @return $this
     */
    public function setReplacementAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\ReplacementAction::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Ignores specific terms from query during search.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.IgnoreAction ignore_action = 9;</code>
     * @return \Google\Cloud\Retail\V2\Rule\IgnoreAction|null
     */
    public function getIgnoreAction()
    {
        return $this->readOneof(9);
    }

    public function hasIgnoreAction()
    {
        return $this->hasOneof(9);
    }

    /**
     * Ignores specific terms from query during search.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.IgnoreAction ignore_action = 9;</code>
     * @param \Google\Cloud\Retail\V2\Rule\IgnoreAction $var
     * @return $this
     */
    public function setIgnoreAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\IgnoreAction::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Filters results.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.FilterAction filter_action = 10;</code>
     * @return \Google\Cloud\Retail\V2\Rule\FilterAction|null
     */
    public function getFilterAction()
    {
        return $this->readOneof(10);
    }

    public function hasFilterAction()
    {
        return $this->hasOneof(10);
    }

    /**
     * Filters results.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.FilterAction filter_action = 10;</code>
     * @param \Google\Cloud\Retail\V2\Rule\FilterAction $var
     * @return $this
     */
    public function setFilterAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\FilterAction::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Treats a set of terms as synonyms of one another.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.TwowaySynonymsAction twoway_synonyms_action = 11;</code>
     * @return \Google\Cloud\Retail\V2\Rule\TwowaySynonymsAction|null
     */
    public function getTwowaySynonymsAction()
    {
        return $this->readOneof(11);
    }

    public function hasTwowaySynonymsAction()
    {
        return $this->hasOneof(11);
    }

    /**
     * Treats a set of terms as synonyms of one another.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Rule.TwowaySynonymsAction twoway_synonyms_action = 11;</code>
     * @param \Google\Cloud\Retail\V2\Rule\TwowaySynonymsAction $var
     * @return $this
     */
    public function setTwowaySynonymsAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Rule\TwowaySynonymsAction::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Required. The condition that triggers the rule.
     * If the condition is empty, the rule will always apply.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Condition condition = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\Condition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Required. The condition that triggers the rule.
     * If the condition is empty, the rule will always apply.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Condition condition = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\Condition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Condition::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->whichOneof("action");
    }

}

