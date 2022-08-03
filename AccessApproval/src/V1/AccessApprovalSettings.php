<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings on a Project/Folder/Organization related to Access Approval.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.AccessApprovalSettings</code>
 */
class AccessApprovalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the settings. Format is one of:
     *   * "projects/{project}/accessApprovalSettings"
     *   * "folders/{folder}/accessApprovalSettings"
     *   * "organizations/{organization}/accessApprovalSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * A list of email addresses to which notifications relating to approval
     * requests should be sent. Notifications relating to a resource will be sent
     * to all emails in the settings of ancestor resources of that resource. A
     * maximum of 50 email addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string notification_emails = 2;</code>
     */
    private $notification_emails;
    /**
     * A list of Google Cloud Services for which the given resource has Access
     * Approval enrolled. Access requests for the resource given by name against
     * any of these services contained here will be required to have explicit
     * approval. If name refers to an organization, enrollment can be done for
     * individual services. If name refers to a folder or project, enrollment can
     * only be done on an all or nothing basis.
     * If a cloud_product is repeated in this list, the first entry will be
     * honored and all following entries will be discarded. A maximum of 10
     * enrolled services will be enforced, to be expanded as the set of supported
     * services is expanded.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.EnrolledService enrolled_services = 3;</code>
     */
    private $enrolled_services;
    /**
     * Output only. This field is read only (not settable via
     * UpdateAccessApprovalSettings method). If the field is true, that
     * indicates that at least one service is enrolled for Access Approval in one
     * or more ancestors of the Project or Folder (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool enrolled_ancestor = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $enrolled_ancestor = false;
    /**
     * The asymmetric crypto key version to use for signing approval requests.
     * Empty active_key_version indicates that a Google-managed key should be used
     * for signing. This property will be ignored if set by an ancestor of this
     * resource, and new non-empty values may not be set.
     *
     * Generated from protobuf field <code>string active_key_version = 6;</code>
     */
    private $active_key_version = '';
    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that an ancestor of this
     * Project or Folder has set active_key_version (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool ancestor_has_active_key_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ancestor_has_active_key_version = false;
    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that there is some
     * configuration issue with the active_key_version configured at this level in
     * the resource hierarchy (e.g. it doesn't exist or the Access Approval
     * service account doesn't have the correct permissions on it, etc.) This key
     * version is not necessarily the effective key version at this level, as key
     * versions are inherited top-down.
     *
     * Generated from protobuf field <code>bool invalid_key_version = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $invalid_key_version = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the settings. Format is one of:
     *             * "projects/{project}/accessApprovalSettings"
     *             * "folders/{folder}/accessApprovalSettings"
     *             * "organizations/{organization}/accessApprovalSettings"
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $notification_emails
     *           A list of email addresses to which notifications relating to approval
     *           requests should be sent. Notifications relating to a resource will be sent
     *           to all emails in the settings of ancestor resources of that resource. A
     *           maximum of 50 email addresses are allowed.
     *     @type \Google\Cloud\AccessApproval\V1\EnrolledService[]|\Google\Protobuf\Internal\RepeatedField $enrolled_services
     *           A list of Google Cloud Services for which the given resource has Access
     *           Approval enrolled. Access requests for the resource given by name against
     *           any of these services contained here will be required to have explicit
     *           approval. If name refers to an organization, enrollment can be done for
     *           individual services. If name refers to a folder or project, enrollment can
     *           only be done on an all or nothing basis.
     *           If a cloud_product is repeated in this list, the first entry will be
     *           honored and all following entries will be discarded. A maximum of 10
     *           enrolled services will be enforced, to be expanded as the set of supported
     *           services is expanded.
     *     @type bool $enrolled_ancestor
     *           Output only. This field is read only (not settable via
     *           UpdateAccessApprovalSettings method). If the field is true, that
     *           indicates that at least one service is enrolled for Access Approval in one
     *           or more ancestors of the Project or Folder (this field will always be
     *           unset for the organization since organizations do not have ancestors).
     *     @type string $active_key_version
     *           The asymmetric crypto key version to use for signing approval requests.
     *           Empty active_key_version indicates that a Google-managed key should be used
     *           for signing. This property will be ignored if set by an ancestor of this
     *           resource, and new non-empty values may not be set.
     *     @type bool $ancestor_has_active_key_version
     *           Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     *           method). If the field is true, that indicates that an ancestor of this
     *           Project or Folder has set active_key_version (this field will always be
     *           unset for the organization since organizations do not have ancestors).
     *     @type bool $invalid_key_version
     *           Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     *           method). If the field is true, that indicates that there is some
     *           configuration issue with the active_key_version configured at this level in
     *           the resource hierarchy (e.g. it doesn't exist or the Access Approval
     *           service account doesn't have the correct permissions on it, etc.) This key
     *           version is not necessarily the effective key version at this level, as key
     *           versions are inherited top-down.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the settings. Format is one of:
     *   * "projects/{project}/accessApprovalSettings"
     *   * "folders/{folder}/accessApprovalSettings"
     *   * "organizations/{organization}/accessApprovalSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the settings. Format is one of:
     *   * "projects/{project}/accessApprovalSettings"
     *   * "folders/{folder}/accessApprovalSettings"
     *   * "organizations/{organization}/accessApprovalSettings"
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
     * A list of email addresses to which notifications relating to approval
     * requests should be sent. Notifications relating to a resource will be sent
     * to all emails in the settings of ancestor resources of that resource. A
     * maximum of 50 email addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string notification_emails = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationEmails()
    {
        return $this->notification_emails;
    }

    /**
     * A list of email addresses to which notifications relating to approval
     * requests should be sent. Notifications relating to a resource will be sent
     * to all emails in the settings of ancestor resources of that resource. A
     * maximum of 50 email addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string notification_emails = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_emails = $arr;

        return $this;
    }

    /**
     * A list of Google Cloud Services for which the given resource has Access
     * Approval enrolled. Access requests for the resource given by name against
     * any of these services contained here will be required to have explicit
     * approval. If name refers to an organization, enrollment can be done for
     * individual services. If name refers to a folder or project, enrollment can
     * only be done on an all or nothing basis.
     * If a cloud_product is repeated in this list, the first entry will be
     * honored and all following entries will be discarded. A maximum of 10
     * enrolled services will be enforced, to be expanded as the set of supported
     * services is expanded.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.EnrolledService enrolled_services = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnrolledServices()
    {
        return $this->enrolled_services;
    }

    /**
     * A list of Google Cloud Services for which the given resource has Access
     * Approval enrolled. Access requests for the resource given by name against
     * any of these services contained here will be required to have explicit
     * approval. If name refers to an organization, enrollment can be done for
     * individual services. If name refers to a folder or project, enrollment can
     * only be done on an all or nothing basis.
     * If a cloud_product is repeated in this list, the first entry will be
     * honored and all following entries will be discarded. A maximum of 10
     * enrolled services will be enforced, to be expanded as the set of supported
     * services is expanded.
     *
     * Generated from protobuf field <code>repeated .google.cloud.accessapproval.v1.EnrolledService enrolled_services = 3;</code>
     * @param \Google\Cloud\AccessApproval\V1\EnrolledService[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnrolledServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AccessApproval\V1\EnrolledService::class);
        $this->enrolled_services = $arr;

        return $this;
    }

    /**
     * Output only. This field is read only (not settable via
     * UpdateAccessApprovalSettings method). If the field is true, that
     * indicates that at least one service is enrolled for Access Approval in one
     * or more ancestors of the Project or Folder (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool enrolled_ancestor = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEnrolledAncestor()
    {
        return $this->enrolled_ancestor;
    }

    /**
     * Output only. This field is read only (not settable via
     * UpdateAccessApprovalSettings method). If the field is true, that
     * indicates that at least one service is enrolled for Access Approval in one
     * or more ancestors of the Project or Folder (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool enrolled_ancestor = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnrolledAncestor($var)
    {
        GPBUtil::checkBool($var);
        $this->enrolled_ancestor = $var;

        return $this;
    }

    /**
     * The asymmetric crypto key version to use for signing approval requests.
     * Empty active_key_version indicates that a Google-managed key should be used
     * for signing. This property will be ignored if set by an ancestor of this
     * resource, and new non-empty values may not be set.
     *
     * Generated from protobuf field <code>string active_key_version = 6;</code>
     * @return string
     */
    public function getActiveKeyVersion()
    {
        return $this->active_key_version;
    }

    /**
     * The asymmetric crypto key version to use for signing approval requests.
     * Empty active_key_version indicates that a Google-managed key should be used
     * for signing. This property will be ignored if set by an ancestor of this
     * resource, and new non-empty values may not be set.
     *
     * Generated from protobuf field <code>string active_key_version = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveKeyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_key_version = $var;

        return $this;
    }

    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that an ancestor of this
     * Project or Folder has set active_key_version (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool ancestor_has_active_key_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAncestorHasActiveKeyVersion()
    {
        return $this->ancestor_has_active_key_version;
    }

    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that an ancestor of this
     * Project or Folder has set active_key_version (this field will always be
     * unset for the organization since organizations do not have ancestors).
     *
     * Generated from protobuf field <code>bool ancestor_has_active_key_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAncestorHasActiveKeyVersion($var)
    {
        GPBUtil::checkBool($var);
        $this->ancestor_has_active_key_version = $var;

        return $this;
    }

    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that there is some
     * configuration issue with the active_key_version configured at this level in
     * the resource hierarchy (e.g. it doesn't exist or the Access Approval
     * service account doesn't have the correct permissions on it, etc.) This key
     * version is not necessarily the effective key version at this level, as key
     * versions are inherited top-down.
     *
     * Generated from protobuf field <code>bool invalid_key_version = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getInvalidKeyVersion()
    {
        return $this->invalid_key_version;
    }

    /**
     * Output only. This field is read only (not settable via UpdateAccessApprovalSettings
     * method). If the field is true, that indicates that there is some
     * configuration issue with the active_key_version configured at this level in
     * the resource hierarchy (e.g. it doesn't exist or the Access Approval
     * service account doesn't have the correct permissions on it, etc.) This key
     * version is not necessarily the effective key version at this level, as key
     * versions are inherited top-down.
     *
     * Generated from protobuf field <code>bool invalid_key_version = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setInvalidKeyVersion($var)
    {
        GPBUtil::checkBool($var);
        $this->invalid_key_version = $var;

        return $this;
    }

}

