<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime information about workload execution.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.RuntimeInfo</code>
 */
class RuntimeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Map of remote access endpoints (such as web interfaces and APIs) to their
     * URIs.
     *
     * Generated from protobuf field <code>map<string, string> endpoints = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $endpoints;
    /**
     * Output only. A URI pointing to the location of the stdout and stderr of the workload.
     *
     * Generated from protobuf field <code>string output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $output_uri = '';
    /**
     * Output only. A URI pointing to the location of the diagnostics tarball.
     *
     * Generated from protobuf field <code>string diagnostic_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $diagnostic_output_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $endpoints
     *           Output only. Map of remote access endpoints (such as web interfaces and APIs) to their
     *           URIs.
     *     @type string $output_uri
     *           Output only. A URI pointing to the location of the stdout and stderr of the workload.
     *     @type string $diagnostic_output_uri
     *           Output only. A URI pointing to the location of the diagnostics tarball.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Map of remote access endpoints (such as web interfaces and APIs) to their
     * URIs.
     *
     * Generated from protobuf field <code>map<string, string> endpoints = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Output only. Map of remote access endpoints (such as web interfaces and APIs) to their
     * URIs.
     *
     * Generated from protobuf field <code>map<string, string> endpoints = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoints = $arr;

        return $this;
    }

    /**
     * Output only. A URI pointing to the location of the stdout and stderr of the workload.
     *
     * Generated from protobuf field <code>string output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Output only. A URI pointing to the location of the stdout and stderr of the workload.
     *
     * Generated from protobuf field <code>string output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

    /**
     * Output only. A URI pointing to the location of the diagnostics tarball.
     *
     * Generated from protobuf field <code>string diagnostic_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDiagnosticOutputUri()
    {
        return $this->diagnostic_output_uri;
    }

    /**
     * Output only. A URI pointing to the location of the diagnostics tarball.
     *
     * Generated from protobuf field <code>string diagnostic_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDiagnosticOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->diagnostic_output_uri = $var;

        return $this;
    }

}

