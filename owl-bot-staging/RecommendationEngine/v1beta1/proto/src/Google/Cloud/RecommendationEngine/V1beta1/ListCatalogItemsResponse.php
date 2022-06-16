<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListCatalogItems method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ListCatalogItemsResponse</code>
 */
class ListCatalogItemsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The catalog items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem catalog_items = 1;</code>
     */
    private $catalog_items;
    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's ListCatalogItemRequest.page_token.
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
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem[]|\Google\Protobuf\Internal\RepeatedField $catalog_items
     *           The catalog items.
     *     @type string $next_page_token
     *           If empty, the list is complete. If nonempty, the token to pass to the next
     *           request's ListCatalogItemRequest.page_token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\CatalogService::initOnce();
        parent::__construct($data);
    }

    /**
     * The catalog items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem catalog_items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCatalogItems()
    {
        return $this->catalog_items;
    }

    /**
     * The catalog items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.CatalogItem catalog_items = 1;</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCatalogItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\CatalogItem::class);
        $this->catalog_items = $arr;

        return $this;
    }

    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's ListCatalogItemRequest.page_token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If empty, the list is complete. If nonempty, the token to pass to the next
     * request's ListCatalogItemRequest.page_token.
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

