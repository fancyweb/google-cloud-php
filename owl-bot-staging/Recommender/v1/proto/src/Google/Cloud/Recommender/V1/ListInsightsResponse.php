<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_service.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to the `ListInsights` method.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.ListInsightsResponse</code>
 */
class ListInsightsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of insights for the `parent` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    private $insights;
    /**
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
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
     *     @type \Google\Cloud\Recommender\V1\Insight[]|\Google\Protobuf\Internal\RepeatedField $insights
     *           The set of insights for the `parent` resource.
     *     @type string $next_page_token
     *           A token that can be used to request the next page of results. This field is
     *           empty if there are no additional results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\RecommenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of insights for the `parent` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInsights()
    {
        return $this->insights;
    }

    /**
     * The set of insights for the `parent` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     * @param \Google\Cloud\Recommender\V1\Insight[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInsights($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1\Insight::class);
        $this->insights = $arr;

        return $this;
    }

    /**
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
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

