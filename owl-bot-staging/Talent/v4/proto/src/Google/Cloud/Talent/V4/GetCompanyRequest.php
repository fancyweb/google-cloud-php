<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/company_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for getting a company by name.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.GetCompanyRequest</code>
 */
class GetCompanyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the company to be retrieved.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/api-test-project/tenants/foo/companies/bar".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the company to be retrieved.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     *           example, "projects/api-test-project/tenants/foo/companies/bar".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\CompanyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the company to be retrieved.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/api-test-project/tenants/foo/companies/bar".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the company to be retrieved.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/api-test-project/tenants/foo/companies/bar".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

