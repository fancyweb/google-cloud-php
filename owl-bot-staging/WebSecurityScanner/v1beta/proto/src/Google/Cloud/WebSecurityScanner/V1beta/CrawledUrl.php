<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/crawled_url.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A CrawledUrl resource represents a URL that was crawled during a ScanRun. Web
 * Security Scanner Service crawls the web applications, following all links
 * within the scope of sites, to find the URLs to test against.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.CrawledUrl</code>
 */
class CrawledUrl extends \Google\Protobuf\Internal\Message
{
    /**
     * The http method of the request that was used to visit the URL, in
     * uppercase.
     *
     * Generated from protobuf field <code>string http_method = 1;</code>
     */
    protected $http_method = '';
    /**
     * The URL that was crawled.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * The body of the request that was used to visit the URL.
     *
     * Generated from protobuf field <code>string body = 3;</code>
     */
    protected $body = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $http_method
     *           The http method of the request that was used to visit the URL, in
     *           uppercase.
     *     @type string $url
     *           The URL that was crawled.
     *     @type string $body
     *           The body of the request that was used to visit the URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\CrawledUrl::initOnce();
        parent::__construct($data);
    }

    /**
     * The http method of the request that was used to visit the URL, in
     * uppercase.
     *
     * Generated from protobuf field <code>string http_method = 1;</code>
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->http_method;
    }

    /**
     * The http method of the request that was used to visit the URL, in
     * uppercase.
     *
     * Generated from protobuf field <code>string http_method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_method = $var;

        return $this;
    }

    /**
     * The URL that was crawled.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The URL that was crawled.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * The body of the request that was used to visit the URL.
     *
     * Generated from protobuf field <code>string body = 3;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * The body of the request that was used to visit the URL.
     *
     * Generated from protobuf field <code>string body = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

}

