<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message defining a custom regular expression.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType.Regex</code>
 */
class Regex extends \Google\Protobuf\Internal\Message
{
    /**
     * Pattern defining the regular expression. Its syntax
     * (https://github.com/google/re2/wiki/Syntax) can be found under the
     * google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>string pattern = 1;</code>
     */
    protected $pattern = '';
    /**
     * The index of the submatch to extract as findings. When not
     * specified, the entire match is returned. No more than 3 may be included.
     *
     * Generated from protobuf field <code>repeated int32 group_indexes = 2;</code>
     */
    private $group_indexes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pattern
     *           Pattern defining the regular expression. Its syntax
     *           (https://github.com/google/re2/wiki/Syntax) can be found under the
     *           google/re2 repository on GitHub.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $group_indexes
     *           The index of the submatch to extract as findings. When not
     *           specified, the entire match is returned. No more than 3 may be included.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Pattern defining the regular expression. Its syntax
     * (https://github.com/google/re2/wiki/Syntax) can be found under the
     * google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>string pattern = 1;</code>
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Pattern defining the regular expression. Its syntax
     * (https://github.com/google/re2/wiki/Syntax) can be found under the
     * google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>string pattern = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

    /**
     * The index of the submatch to extract as findings. When not
     * specified, the entire match is returned. No more than 3 may be included.
     *
     * Generated from protobuf field <code>repeated int32 group_indexes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupIndexes()
    {
        return $this->group_indexes;
    }

    /**
     * The index of the submatch to extract as findings. When not
     * specified, the entire match is returned. No more than 3 may be included.
     *
     * Generated from protobuf field <code>repeated int32 group_indexes = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->group_indexes = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Regex::class, \Google\Cloud\Dlp\V2\CustomInfoType_Regex::class);

