<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The readonly representation of a product computed with a given resource
 * context.
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.Product</code>
 */
class Product extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the target product, in the format of
     * `products/[a-z][-a-z0-9]*[a-z0-9]'.
     * A unique identifier for the product under a catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The type of the product asset. It can be one of the following values:
     * * `google.deploymentmanager.Template`
     * * `google.cloudprivatecatalog.ListingOnly`
     * * `google.cloudprivatecatalog.Terraform`
     *
     * Generated from protobuf field <code>string asset_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset_type = '';
    /**
     * Required. Output only. The display metadata to describe the product. The JSON schema of the
     * metadata differs by [Product.asset_type][google.cloud.privatecatalog.v1beta1.Product.asset_type].
     * When the type is `google.deploymentmanager.Template`, the schema is as
     * follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.ListingOnly`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     *   signup_url:
     *     type: string
     *     pattern:
     *     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     * required:
     * - name
     * - description
     * - signup_url
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.Terraform`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: true
     *
     * Generated from protobuf field <code>.google.protobuf.Struct display_metadata = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_metadata = null;
    /**
     * Output only. The icon URI of the product.
     *
     * Generated from protobuf field <code>string icon_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $icon_uri = '';
    /**
     * Output only. A collection of assets referred by a product.
     * This field is set for Terraform Products only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.AssetReference asset_references = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $asset_references;
    /**
     * Output only. The time when the product was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the product was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the target product, in the format of
     *           `products/[a-z][-a-z0-9]*[a-z0-9]'.
     *           A unique identifier for the product under a catalog.
     *     @type string $asset_type
     *           Output only. The type of the product asset. It can be one of the following values:
     *           * `google.deploymentmanager.Template`
     *           * `google.cloudprivatecatalog.ListingOnly`
     *           * `google.cloudprivatecatalog.Terraform`
     *     @type \Google\Protobuf\Struct $display_metadata
     *           Required. Output only. The display metadata to describe the product. The JSON schema of the
     *           metadata differs by [Product.asset_type][google.cloud.privatecatalog.v1beta1.Product.asset_type].
     *           When the type is `google.deploymentmanager.Template`, the schema is as
     *           follows:
     *           ```
     *           "$schema": http://json-schema.org/draft-04/schema#
     *           type: object
     *           properties:
     *             name:
     *               type: string
     *               minLength: 1
     *               maxLength: 64
     *             description:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             tagline:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             support_info:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             creator:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             documentations:
     *               type: array
     *               items:
     *                 type: object
     *                 properties:
     *                   url:
     *                     type: string
     *                     pattern:
     *                     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *                   title:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 64
     *                   description:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 2048
     *           required:
     *           - name
     *           - description
     *           additionalProperties: false
     *           ```
     *           When the asset type is `google.cloudprivatecatalog.ListingOnly`, the schema
     *           is as follows:
     *           ```
     *           "$schema": http://json-schema.org/draft-04/schema#
     *           type: object
     *           properties:
     *             name:
     *               type: string
     *               minLength: 1
     *               maxLength: 64
     *             description:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             tagline:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             support_info:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             creator:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             documentations:
     *               type: array
     *               items:
     *                 type: object
     *                 properties:
     *                   url:
     *                     type: string
     *                     pattern:
     *                     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *                   title:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 64
     *                   description:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 2048
     *             signup_url:
     *               type: string
     *               pattern:
     *               "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *           required:
     *           - name
     *           - description
     *           - signup_url
     *           additionalProperties: false
     *           ```
     *           When the asset type is `google.cloudprivatecatalog.Terraform`, the schema
     *           is as follows:
     *           ```
     *           "$schema": http://json-schema.org/draft-04/schema#
     *           type: object
     *           properties:
     *             name:
     *               type: string
     *               minLength: 1
     *               maxLength: 64
     *             description:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             tagline:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             support_info:
     *               type: string
     *               minLength: 1
     *               maxLength: 2048
     *             creator:
     *               type: string
     *               minLength: 1
     *               maxLength: 100
     *             documentations:
     *               type: array
     *               items:
     *                 type: object
     *                 properties:
     *                   url:
     *                     type: string
     *                     pattern:
     *                     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *                   title:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 64
     *                   description:
     *                     type: string
     *                     minLength: 1
     *                     maxLength: 2048
     *           required:
     *           - name
     *           - description
     *           additionalProperties: true
     *     @type string $icon_uri
     *           Output only. The icon URI of the product.
     *     @type \Google\Cloud\PrivateCatalog\V1beta1\AssetReference[]|\Google\Protobuf\Internal\RepeatedField $asset_references
     *           Output only. A collection of assets referred by a product.
     *           This field is set for Terraform Products only.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the product was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the product was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the target product, in the format of
     * `products/[a-z][-a-z0-9]*[a-z0-9]'.
     * A unique identifier for the product under a catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the target product, in the format of
     * `products/[a-z][-a-z0-9]*[a-z0-9]'.
     * A unique identifier for the product under a catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The type of the product asset. It can be one of the following values:
     * * `google.deploymentmanager.Template`
     * * `google.cloudprivatecatalog.ListingOnly`
     * * `google.cloudprivatecatalog.Terraform`
     *
     * Generated from protobuf field <code>string asset_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAssetType()
    {
        return $this->asset_type;
    }

    /**
     * Output only. The type of the product asset. It can be one of the following values:
     * * `google.deploymentmanager.Template`
     * * `google.cloudprivatecatalog.ListingOnly`
     * * `google.cloudprivatecatalog.Terraform`
     *
     * Generated from protobuf field <code>string asset_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAssetType($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_type = $var;

        return $this;
    }

    /**
     * Required. Output only. The display metadata to describe the product. The JSON schema of the
     * metadata differs by [Product.asset_type][google.cloud.privatecatalog.v1beta1.Product.asset_type].
     * When the type is `google.deploymentmanager.Template`, the schema is as
     * follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.ListingOnly`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     *   signup_url:
     *     type: string
     *     pattern:
     *     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     * required:
     * - name
     * - description
     * - signup_url
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.Terraform`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: true
     *
     * Generated from protobuf field <code>.google.protobuf.Struct display_metadata = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getDisplayMetadata()
    {
        return $this->display_metadata;
    }

    public function hasDisplayMetadata()
    {
        return isset($this->display_metadata);
    }

    public function clearDisplayMetadata()
    {
        unset($this->display_metadata);
    }

    /**
     * Required. Output only. The display metadata to describe the product. The JSON schema of the
     * metadata differs by [Product.asset_type][google.cloud.privatecatalog.v1beta1.Product.asset_type].
     * When the type is `google.deploymentmanager.Template`, the schema is as
     * follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.ListingOnly`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     *   signup_url:
     *     type: string
     *     pattern:
     *     "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     * required:
     * - name
     * - description
     * - signup_url
     * additionalProperties: false
     * ```
     * When the asset type is `google.cloudprivatecatalog.Terraform`, the schema
     * is as follows:
     * ```
     * "$schema": http://json-schema.org/draft-04/schema#
     * type: object
     * properties:
     *   name:
     *     type: string
     *     minLength: 1
     *     maxLength: 64
     *   description:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   tagline:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   support_info:
     *     type: string
     *     minLength: 1
     *     maxLength: 2048
     *   creator:
     *     type: string
     *     minLength: 1
     *     maxLength: 100
     *   documentations:
     *     type: array
     *     items:
     *       type: object
     *       properties:
     *         url:
     *           type: string
     *           pattern:
     *           "^(https?)://[-a-zA-Z0-9+&&#64;#/%?=~_|!:,.;]*[-a-zA-Z0-9+&&#64;#/%=~_|]"
     *         title:
     *           type: string
     *           minLength: 1
     *           maxLength: 64
     *         description:
     *           type: string
     *           minLength: 1
     *           maxLength: 2048
     * required:
     * - name
     * - description
     * additionalProperties: true
     *
     * Generated from protobuf field <code>.google.protobuf.Struct display_metadata = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setDisplayMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->display_metadata = $var;

        return $this;
    }

    /**
     * Output only. The icon URI of the product.
     *
     * Generated from protobuf field <code>string icon_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIconUri()
    {
        return $this->icon_uri;
    }

    /**
     * Output only. The icon URI of the product.
     *
     * Generated from protobuf field <code>string icon_uri = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIconUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_uri = $var;

        return $this;
    }

    /**
     * Output only. A collection of assets referred by a product.
     * This field is set for Terraform Products only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.AssetReference asset_references = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetReferences()
    {
        return $this->asset_references;
    }

    /**
     * Output only. A collection of assets referred by a product.
     * This field is set for Terraform Products only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.AssetReference asset_references = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\PrivateCatalog\V1beta1\AssetReference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetReferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PrivateCatalog\V1beta1\AssetReference::class);
        $this->asset_references = $arr;

        return $this;
    }

    /**
     * Output only. The time when the product was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the product was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the product was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the product was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

