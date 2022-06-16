<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a Listing.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.CreateListingRequest</code>
 */
class CreateListingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource path of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the Listing to create.
     * Must contain only Unicode letters, numbers (0-9), underscores (_).
     * Should not use characters that require URL-escaping, or characters
     * outside of ASCII, spaces.
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string listing_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $listing_id = '';
    /**
     * Required. The listing to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing listing = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $listing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource path of the listing.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *     @type string $listing_id
     *           Required. The ID of the Listing to create.
     *           Must contain only Unicode letters, numbers (0-9), underscores (_).
     *           Should not use characters that require URL-escaping, or characters
     *           outside of ASCII, spaces.
     *           Max length: 100 bytes.
     *     @type \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing $listing
     *           Required. The listing to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource path of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource path of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID of the Listing to create.
     * Must contain only Unicode letters, numbers (0-9), underscores (_).
     * Should not use characters that require URL-escaping, or characters
     * outside of ASCII, spaces.
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string listing_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getListingId()
    {
        return $this->listing_id;
    }

    /**
     * Required. The ID of the Listing to create.
     * Must contain only Unicode letters, numbers (0-9), underscores (_).
     * Should not use characters that require URL-escaping, or characters
     * outside of ASCII, spaces.
     * Max length: 100 bytes.
     *
     * Generated from protobuf field <code>string listing_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setListingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->listing_id = $var;

        return $this;
    }

    /**
     * Required. The listing to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing listing = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing|null
     */
    public function getListing()
    {
        return $this->listing;
    }

    public function hasListing()
    {
        return isset($this->listing);
    }

    public function clearListing()
    {
        unset($this->listing);
    }

    /**
     * Required. The listing to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing listing = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing $var
     * @return $this
     */
    public function setListing($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing::class);
        $this->listing = $var;

        return $this;
    }

}

