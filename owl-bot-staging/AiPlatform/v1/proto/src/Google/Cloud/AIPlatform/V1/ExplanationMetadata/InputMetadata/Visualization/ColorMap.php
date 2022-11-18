<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization;

use UnexpectedValueException;

/**
 * The color scheme used for highlighting areas.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.ColorMap</code>
 */
class ColorMap
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>COLOR_MAP_UNSPECIFIED = 0;</code>
     */
    const COLOR_MAP_UNSPECIFIED = 0;
    /**
     * Positive: green. Negative: pink.
     *
     * Generated from protobuf enum <code>PINK_GREEN = 1;</code>
     */
    const PINK_GREEN = 1;
    /**
     * Viridis color map: A perceptually uniform color mapping which is
     * easier to see by those with colorblindness and progresses from yellow
     * to green to blue. Positive: yellow. Negative: blue.
     *
     * Generated from protobuf enum <code>VIRIDIS = 2;</code>
     */
    const VIRIDIS = 2;
    /**
     * Positive: red. Negative: red.
     *
     * Generated from protobuf enum <code>RED = 3;</code>
     */
    const RED = 3;
    /**
     * Positive: green. Negative: green.
     *
     * Generated from protobuf enum <code>GREEN = 4;</code>
     */
    const GREEN = 4;
    /**
     * Positive: green. Negative: red.
     *
     * Generated from protobuf enum <code>RED_GREEN = 6;</code>
     */
    const RED_GREEN = 6;
    /**
     * PiYG palette.
     *
     * Generated from protobuf enum <code>PINK_WHITE_GREEN = 5;</code>
     */
    const PINK_WHITE_GREEN = 5;

    private static $valueToName = [
        self::COLOR_MAP_UNSPECIFIED => 'COLOR_MAP_UNSPECIFIED',
        self::PINK_GREEN => 'PINK_GREEN',
        self::VIRIDIS => 'VIRIDIS',
        self::RED => 'RED',
        self::GREEN => 'GREEN',
        self::RED_GREEN => 'RED_GREEN',
        self::PINK_WHITE_GREEN => 'PINK_WHITE_GREEN',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ColorMap::class, \Google\Cloud\AIPlatform\V1\ExplanationMetadata_InputMetadata_Visualization_ColorMap::class);

