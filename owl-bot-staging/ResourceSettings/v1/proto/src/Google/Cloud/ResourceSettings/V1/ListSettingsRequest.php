<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcesettings/v1/resource_settings.proto

namespace Google\Cloud\ResourceSettings\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for ListSettings.
 *
 * Generated from protobuf message <code>google.cloud.resourcesettings.v1.ListSettingsRequest</code>
 */
class ListSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Cloud resource that parents the setting. Must be in one of the
     * following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Unused. The size of the page to be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The SettingView for this request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcesettings.v1.SettingView view = 4;</code>
     */
    protected $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Cloud resource that parents the setting. Must be in one of the
     *           following forms:
     *           * `projects/{project_number}`
     *           * `projects/{project_id}`
     *           * `folders/{folder_id}`
     *           * `organizations/{organization_id}`
     *     @type int $page_size
     *           Unused. The size of the page to be returned.
     *     @type string $page_token
     *           Unused. A page token used to retrieve the next page.
     *     @type int $view
     *           The SettingView for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcesettings\V1\ResourceSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Cloud resource that parents the setting. Must be in one of the
     * following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Cloud resource that parents the setting. Must be in one of the
     * following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
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
     * Unused. The size of the page to be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Unused. The size of the page to be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Unused. A page token used to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The SettingView for this request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcesettings.v1.SettingView view = 4;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The SettingView for this request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcesettings.v1.SettingView view = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ResourceSettings\V1\SettingView::class);
        $this->view = $var;

        return $this;
    }

}

