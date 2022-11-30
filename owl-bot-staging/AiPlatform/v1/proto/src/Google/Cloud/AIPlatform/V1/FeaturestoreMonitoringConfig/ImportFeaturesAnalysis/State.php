<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis;

use UnexpectedValueException;

/**
 * The state defines whether to enable ImportFeature analysis.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.State</code>
 */
class State
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The default behavior of whether to enable the monitoring.
     * EntityType-level config: disabled.
     * Feature-level config: inherited from the configuration of EntityType
     * this Feature belongs to.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * Explicitly enables import features analysis.
     * EntityType-level config: by default enables import features analysis
     * for all Features under it. Feature-level config: enables import
     * features analysis regardless of the EntityType-level config.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Explicitly disables import features analysis.
     * EntityType-level config: by default disables import features analysis
     * for all Features under it. Feature-level config: disables import
     * features analysis regardless of the EntityType-level config.
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig_ImportFeaturesAnalysis_State::class);

