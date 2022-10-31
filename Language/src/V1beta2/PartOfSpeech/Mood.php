<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\PartOfSpeech;

use UnexpectedValueException;

/**
 * The grammatical feature of verbs, used for showing modality and attitude.
 *
 * Protobuf type <code>google.cloud.language.v1beta2.PartOfSpeech.Mood</code>
 */
class Mood
{
    /**
     * Mood is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>MOOD_UNKNOWN = 0;</code>
     */
    const MOOD_UNKNOWN = 0;
    /**
     * Conditional
     *
     * Generated from protobuf enum <code>CONDITIONAL_MOOD = 1;</code>
     */
    const CONDITIONAL_MOOD = 1;
    /**
     * Imperative
     *
     * Generated from protobuf enum <code>IMPERATIVE = 2;</code>
     */
    const IMPERATIVE = 2;
    /**
     * Indicative
     *
     * Generated from protobuf enum <code>INDICATIVE = 3;</code>
     */
    const INDICATIVE = 3;
    /**
     * Interrogative
     *
     * Generated from protobuf enum <code>INTERROGATIVE = 4;</code>
     */
    const INTERROGATIVE = 4;
    /**
     * Jussive
     *
     * Generated from protobuf enum <code>JUSSIVE = 5;</code>
     */
    const JUSSIVE = 5;
    /**
     * Subjunctive
     *
     * Generated from protobuf enum <code>SUBJUNCTIVE = 6;</code>
     */
    const SUBJUNCTIVE = 6;

    private static $valueToName = [
        self::MOOD_UNKNOWN => 'MOOD_UNKNOWN',
        self::CONDITIONAL_MOOD => 'CONDITIONAL_MOOD',
        self::IMPERATIVE => 'IMPERATIVE',
        self::INDICATIVE => 'INDICATIVE',
        self::INTERROGATIVE => 'INTERROGATIVE',
        self::JUSSIVE => 'JUSSIVE',
        self::SUBJUNCTIVE => 'SUBJUNCTIVE',
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


