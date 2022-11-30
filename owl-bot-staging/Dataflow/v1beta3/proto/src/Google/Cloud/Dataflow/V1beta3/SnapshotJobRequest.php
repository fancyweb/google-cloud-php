<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a snapshot of a job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.SnapshotJobRequest</code>
 */
class SnapshotJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project which owns the job to be snapshotted.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    protected $project_id = '';
    /**
     * The job to be snapshotted.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    protected $job_id = '';
    /**
     * TTL for the snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 3;</code>
     */
    protected $ttl = null;
    /**
     * The location that contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     */
    protected $location = '';
    /**
     * If true, perform snapshots for sources which support this.
     *
     * Generated from protobuf field <code>bool snapshot_sources = 5;</code>
     */
    protected $snapshot_sources = false;
    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The project which owns the job to be snapshotted.
     *     @type string $job_id
     *           The job to be snapshotted.
     *     @type \Google\Protobuf\Duration $ttl
     *           TTL for the snapshot.
     *     @type string $location
     *           The location that contains this job.
     *     @type bool $snapshot_sources
     *           If true, perform snapshots for sources which support this.
     *     @type string $description
     *           User specified description of the snapshot. Maybe empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The project which owns the job to be snapshotted.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project which owns the job to be snapshotted.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The job to be snapshotted.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The job to be snapshotted.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * TTL for the snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * TTL for the snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ttl = $var;

        return $this;
    }

    /**
     * The location that contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location that contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * If true, perform snapshots for sources which support this.
     *
     * Generated from protobuf field <code>bool snapshot_sources = 5;</code>
     * @return bool
     */
    public function getSnapshotSources()
    {
        return $this->snapshot_sources;
    }

    /**
     * If true, perform snapshots for sources which support this.
     *
     * Generated from protobuf field <code>bool snapshot_sources = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSnapshotSources($var)
    {
        GPBUtil::checkBool($var);
        $this->snapshot_sources = $var;

        return $this;
    }

    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

