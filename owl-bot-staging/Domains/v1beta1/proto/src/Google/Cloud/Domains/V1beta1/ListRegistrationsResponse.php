<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListRegistrations` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1beta1.ListRegistrationsResponse</code>
 */
class ListRegistrationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of `Registration`s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1beta1.Registration registrations = 1;</code>
     */
    private $registrations;
    /**
     * When present, there are more results to retrieve. Set `page_token` to this
     * value on a subsequent call to get the next page of results.
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
     *     @type \Google\Cloud\Domains\V1beta1\Registration[]|\Google\Protobuf\Internal\RepeatedField $registrations
     *           A list of `Registration`s.
     *     @type string $next_page_token
     *           When present, there are more results to retrieve. Set `page_token` to this
     *           value on a subsequent call to get the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Beta1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of `Registration`s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1beta1.Registration registrations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegistrations()
    {
        return $this->registrations;
    }

    /**
     * A list of `Registration`s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1beta1.Registration registrations = 1;</code>
     * @param \Google\Cloud\Domains\V1beta1\Registration[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegistrations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Domains\V1beta1\Registration::class);
        $this->registrations = $arr;

        return $this;
    }

    /**
     * When present, there are more results to retrieve. Set `page_token` to this
     * value on a subsequent call to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * When present, there are more results to retrieve. Set `page_token` to this
     * value on a subsequent call to get the next page of results.
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

