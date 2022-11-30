<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to set a specified branch as new default_branch.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SetDefaultBranchRequest</code>
 */
class SetDefaultBranchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Full resource name of the catalog, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $catalog = '';
    /**
     * The final component of the resource name of a branch.
     * This field must be one of "0", "1" or "2". Otherwise, an INVALID_ARGUMENT
     * error is returned.
     * If there are no sufficient active products in the targeted branch and
     * [force][google.cloud.retail.v2.SetDefaultBranchRequest.force] is not set, a
     * FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string branch_id = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $branch_id = '';
    /**
     * Some note on this request, this can be retrieved by
     * [CatalogService.GetDefaultBranch][google.cloud.retail.v2.CatalogService.GetDefaultBranch]
     * before next valid default branch set occurs.
     * This field must be a UTF-8 encoded string with a length limit of 1,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string note = 3;</code>
     */
    protected $note = '';
    /**
     * If set to true, it permits switching to a branch with
     * [branch_id][google.cloud.retail.v2.SetDefaultBranchRequest.branch_id] even
     * if it has no sufficient active products.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $catalog
     *           Full resource name of the catalog, such as
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *     @type string $branch_id
     *           The final component of the resource name of a branch.
     *           This field must be one of "0", "1" or "2". Otherwise, an INVALID_ARGUMENT
     *           error is returned.
     *           If there are no sufficient active products in the targeted branch and
     *           [force][google.cloud.retail.v2.SetDefaultBranchRequest.force] is not set, a
     *           FAILED_PRECONDITION error is returned.
     *     @type string $note
     *           Some note on this request, this can be retrieved by
     *           [CatalogService.GetDefaultBranch][google.cloud.retail.v2.CatalogService.GetDefaultBranch]
     *           before next valid default branch set occurs.
     *           This field must be a UTF-8 encoded string with a length limit of 1,000
     *           characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *     @type bool $force
     *           If set to true, it permits switching to a branch with
     *           [branch_id][google.cloud.retail.v2.SetDefaultBranchRequest.branch_id] even
     *           if it has no sufficient active products.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\CatalogService::initOnce();
        parent::__construct($data);
    }

    /**
     * Full resource name of the catalog, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Full resource name of the catalog, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCatalog($var)
    {
        GPBUtil::checkString($var, True);
        $this->catalog = $var;

        return $this;
    }

    /**
     * The final component of the resource name of a branch.
     * This field must be one of "0", "1" or "2". Otherwise, an INVALID_ARGUMENT
     * error is returned.
     * If there are no sufficient active products in the targeted branch and
     * [force][google.cloud.retail.v2.SetDefaultBranchRequest.force] is not set, a
     * FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string branch_id = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBranchId()
    {
        return $this->branch_id;
    }

    /**
     * The final component of the resource name of a branch.
     * This field must be one of "0", "1" or "2". Otherwise, an INVALID_ARGUMENT
     * error is returned.
     * If there are no sufficient active products in the targeted branch and
     * [force][google.cloud.retail.v2.SetDefaultBranchRequest.force] is not set, a
     * FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string branch_id = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBranchId($var)
    {
        GPBUtil::checkString($var, True);
        $this->branch_id = $var;

        return $this;
    }

    /**
     * Some note on this request, this can be retrieved by
     * [CatalogService.GetDefaultBranch][google.cloud.retail.v2.CatalogService.GetDefaultBranch]
     * before next valid default branch set occurs.
     * This field must be a UTF-8 encoded string with a length limit of 1,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string note = 3;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Some note on this request, this can be retrieved by
     * [CatalogService.GetDefaultBranch][google.cloud.retail.v2.CatalogService.GetDefaultBranch]
     * before next valid default branch set occurs.
     * This field must be a UTF-8 encoded string with a length limit of 1,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string note = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->note = $var;

        return $this;
    }

    /**
     * If set to true, it permits switching to a branch with
     * [branch_id][google.cloud.retail.v2.SetDefaultBranchRequest.branch_id] even
     * if it has no sufficient active products.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, it permits switching to a branch with
     * [branch_id][google.cloud.retail.v2.SetDefaultBranchRequest.branch_id] even
     * if it has no sufficient active products.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

