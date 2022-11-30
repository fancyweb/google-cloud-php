<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition type that checks whether a log message in the [scoping
 * project](https://cloud.google.com/monitoring/api/v3#project_name)
 * satisfies the given filter. Logs from other projects in the metrics
 * scope are not evaluated.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.LogMatch</code>
 */
class LogMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A logs-based filter. See [Advanced Logs
     * Queries](https://cloud.google.com/logging/docs/view/advanced-queries)
     * for how this filter should be constructed.
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * Optional. A map from a label key to an extractor expression, which is
     * used to extract the value for this label key. Each entry in this map is
     * a specification for how data should be extracted from log entries that
     * match `filter`. Each combination of extracted values is treated as a
     * separate rule for the purposes of triggering notifications. Label keys
     * and corresponding values can be used in notifications generated by this
     * condition.
     * Please see [the documentation on logs-based metric
     * `valueExtractor`s](https://cloud.google.com/logging/docs/reference/v2/rest/v2/projects.metrics#LogMetric.FIELDS.value_extractor)
     * for syntax and examples.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 2;</code>
     */
    private $label_extractors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filter
     *           Required. A logs-based filter. See [Advanced Logs
     *           Queries](https://cloud.google.com/logging/docs/view/advanced-queries)
     *           for how this filter should be constructed.
     *     @type array|\Google\Protobuf\Internal\MapField $label_extractors
     *           Optional. A map from a label key to an extractor expression, which is
     *           used to extract the value for this label key. Each entry in this map is
     *           a specification for how data should be extracted from log entries that
     *           match `filter`. Each combination of extracted values is treated as a
     *           separate rule for the purposes of triggering notifications. Label keys
     *           and corresponding values can be used in notifications generated by this
     *           condition.
     *           Please see [the documentation on logs-based metric
     *           `valueExtractor`s](https://cloud.google.com/logging/docs/reference/v2/rest/v2/projects.metrics#LogMetric.FIELDS.value_extractor)
     *           for syntax and examples.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A logs-based filter. See [Advanced Logs
     * Queries](https://cloud.google.com/logging/docs/view/advanced-queries)
     * for how this filter should be constructed.
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. A logs-based filter. See [Advanced Logs
     * Queries](https://cloud.google.com/logging/docs/view/advanced-queries)
     * for how this filter should be constructed.
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. A map from a label key to an extractor expression, which is
     * used to extract the value for this label key. Each entry in this map is
     * a specification for how data should be extracted from log entries that
     * match `filter`. Each combination of extracted values is treated as a
     * separate rule for the purposes of triggering notifications. Label keys
     * and corresponding values can be used in notifications generated by this
     * condition.
     * Please see [the documentation on logs-based metric
     * `valueExtractor`s](https://cloud.google.com/logging/docs/reference/v2/rest/v2/projects.metrics#LogMetric.FIELDS.value_extractor)
     * for syntax and examples.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabelExtractors()
    {
        return $this->label_extractors;
    }

    /**
     * Optional. A map from a label key to an extractor expression, which is
     * used to extract the value for this label key. Each entry in this map is
     * a specification for how data should be extracted from log entries that
     * match `filter`. Each combination of extracted values is treated as a
     * separate rule for the purposes of triggering notifications. Label keys
     * and corresponding values can be used in notifications generated by this
     * condition.
     * Please see [the documentation on logs-based metric
     * `valueExtractor`s](https://cloud.google.com/logging/docs/reference/v2/rest/v2/projects.metrics#LogMetric.FIELDS.value_extractor)
     * for syntax and examples.
     *
     * Generated from protobuf field <code>map<string, string> label_extractors = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabelExtractors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->label_extractors = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LogMatch::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_LogMatch::class);

