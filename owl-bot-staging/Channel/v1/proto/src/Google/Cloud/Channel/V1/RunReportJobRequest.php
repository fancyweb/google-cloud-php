<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/reports_service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.RunReportJobRequest</code>
 */
class RunReportJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The report's resource name. Specifies the account and report used to
     * generate report data. The report_id identifier is a UID (for example,
     * `613bf59q`).
     * Name uses the format:
     * accounts/{account_id}/reports/{report_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The range of usage or invoice dates to include in the result.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.DateRange date_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $date_range = null;
    /**
     * Optional. A structured string that defines conditions on dimension columns to
     * restrict the report output.
     * Filters support logical operators (AND, OR, NOT) and conditional operators
     * (=, !=, <, >, <=, and >=) using `column_id` as keys.
     * For example:
     * `(customer:"accounts/C123abc/customers/S456def" OR
     * customer:"accounts/C123abc/customers/S789ghi") AND
     * invoice_start_date.year >= 2022`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response is localized to the corresponding language code if the
     * original data sources support it.
     * Default is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The report's resource name. Specifies the account and report used to
     *           generate report data. The report_id identifier is a UID (for example,
     *           `613bf59q`).
     *           Name uses the format:
     *           accounts/{account_id}/reports/{report_id}
     *     @type \Google\Cloud\Channel\V1\DateRange $date_range
     *           Optional. The range of usage or invoice dates to include in the result.
     *     @type string $filter
     *           Optional. A structured string that defines conditions on dimension columns to
     *           restrict the report output.
     *           Filters support logical operators (AND, OR, NOT) and conditional operators
     *           (=, !=, <, >, <=, and >=) using `column_id` as keys.
     *           For example:
     *           `(customer:"accounts/C123abc/customers/S456def" OR
     *           customer:"accounts/C123abc/customers/S789ghi") AND
     *           invoice_start_date.year >= 2022`
     *     @type string $language_code
     *           Optional. The BCP-47 language code, such as "en-US".  If specified, the
     *           response is localized to the corresponding language code if the
     *           original data sources support it.
     *           Default is "en-US".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\ReportsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The report's resource name. Specifies the account and report used to
     * generate report data. The report_id identifier is a UID (for example,
     * `613bf59q`).
     * Name uses the format:
     * accounts/{account_id}/reports/{report_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The report's resource name. Specifies the account and report used to
     * generate report data. The report_id identifier is a UID (for example,
     * `613bf59q`).
     * Name uses the format:
     * accounts/{account_id}/reports/{report_id}
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

    /**
     * Optional. The range of usage or invoice dates to include in the result.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.DateRange date_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Channel\V1\DateRange|null
     */
    public function getDateRange()
    {
        return $this->date_range;
    }

    public function hasDateRange()
    {
        return isset($this->date_range);
    }

    public function clearDateRange()
    {
        unset($this->date_range);
    }

    /**
     * Optional. The range of usage or invoice dates to include in the result.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.DateRange date_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Channel\V1\DateRange $var
     * @return $this
     */
    public function setDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\DateRange::class);
        $this->date_range = $var;

        return $this;
    }

    /**
     * Optional. A structured string that defines conditions on dimension columns to
     * restrict the report output.
     * Filters support logical operators (AND, OR, NOT) and conditional operators
     * (=, !=, <, >, <=, and >=) using `column_id` as keys.
     * For example:
     * `(customer:"accounts/C123abc/customers/S456def" OR
     * customer:"accounts/C123abc/customers/S789ghi") AND
     * invoice_start_date.year >= 2022`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A structured string that defines conditions on dimension columns to
     * restrict the report output.
     * Filters support logical operators (AND, OR, NOT) and conditional operators
     * (=, !=, <, >, <=, and >=) using `column_id` as keys.
     * For example:
     * `(customer:"accounts/C123abc/customers/S456def" OR
     * customer:"accounts/C123abc/customers/S789ghi") AND
     * invoice_start_date.year >= 2022`
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response is localized to the corresponding language code if the
     * original data sources support it.
     * Default is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response is localized to the corresponding language code if the
     * original data sources support it.
     * Default is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

