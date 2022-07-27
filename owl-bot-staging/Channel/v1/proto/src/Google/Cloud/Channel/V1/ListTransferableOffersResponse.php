<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListTransferableOffersResponse</code>
 */
class ListTransferableOffersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Information about Offers for a customer that can be used for
     * transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableOffer transferable_offers = 1;</code>
     */
    private $transferable_offers;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListTransferableOffersRequest.page_token][google.cloud.channel.v1.ListTransferableOffersRequest.page_token] to obtain
     * that page.
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
     *     @type array<\Google\Cloud\Channel\V1\TransferableOffer>|\Google\Protobuf\Internal\RepeatedField $transferable_offers
     *           Information about Offers for a customer that can be used for
     *           transfer.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListTransferableOffersRequest.page_token][google.cloud.channel.v1.ListTransferableOffersRequest.page_token] to obtain
     *           that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Information about Offers for a customer that can be used for
     * transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableOffer transferable_offers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransferableOffers()
    {
        return $this->transferable_offers;
    }

    /**
     * Information about Offers for a customer that can be used for
     * transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.TransferableOffer transferable_offers = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\TransferableOffer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransferableOffers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\TransferableOffer::class);
        $this->transferable_offers = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListTransferableOffersRequest.page_token][google.cloud.channel.v1.ListTransferableOffersRequest.page_token] to obtain
     * that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListTransferableOffersRequest.page_token][google.cloud.channel.v1.ListTransferableOffersRequest.page_token] to obtain
     * that page.
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

