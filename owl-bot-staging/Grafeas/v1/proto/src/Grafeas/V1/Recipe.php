<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_provenance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Steps taken to build the artifact.
 * For a TaskRun, typically each container corresponds to one step in the
 * recipe.
 *
 * Generated from protobuf message <code>grafeas.v1.Recipe</code>
 */
class Recipe extends \Google\Protobuf\Internal\Message
{
    /**
     * URI indicating what type of recipe was performed. It determines the meaning
     * of recipe.entryPoint, recipe.arguments, recipe.environment, and materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     */
    protected $defined_in_material = 0;
    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For example,
     * if the recipe type were "make", then this would reference the directory in
     * which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     */
    protected $entry_point = '';
    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the recipe
     * type were "make", then this might be the flags passed to make aside from
     * the target, which is captured in recipe.entryPoint. Since the arguments
     * field can greatly vary in structure, depending on the builder and recipe
     * type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any arguments = 4;</code>
     */
    private $arguments;
    /**
     * Any other builder-controlled inputs necessary for correctly evaluating the
     * recipe. Usually only needed for reproducing the build but not evaluated as
     * part of policy. Since the environment field can greatly vary in structure,
     * depending on the builder and recipe type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any environment = 5;</code>
     */
    private $environment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           URI indicating what type of recipe was performed. It determines the meaning
     *           of recipe.entryPoint, recipe.arguments, recipe.environment, and materials.
     *     @type int|string $defined_in_material
     *           Index in materials containing the recipe steps that are not implied by
     *           recipe.type. For example, if the recipe type were "make", then this would
     *           point to the source containing the Makefile, not the make program itself.
     *           Set to -1 if the recipe doesn't come from a material, as zero is default
     *           unset value for int64.
     *     @type string $entry_point
     *           String identifying the entry point into the build.
     *           This is often a path to a configuration file and/or a target label within
     *           that file. The syntax and meaning are defined by recipe.type. For example,
     *           if the recipe type were "make", then this would reference the directory in
     *           which to run make as well as which target to use.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $arguments
     *           Collection of all external inputs that influenced the build on top of
     *           recipe.definedInMaterial and recipe.entryPoint. For example, if the recipe
     *           type were "make", then this might be the flags passed to make aside from
     *           the target, which is captured in recipe.entryPoint. Since the arguments
     *           field can greatly vary in structure, depending on the builder and recipe
     *           type, this is of form "Any".
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $environment
     *           Any other builder-controlled inputs necessary for correctly evaluating the
     *           recipe. Usually only needed for reproducing the build but not evaluated as
     *           part of policy. Since the environment field can greatly vary in structure,
     *           depending on the builder and recipe type, this is of form "Any".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoProvenance::initOnce();
        parent::__construct($data);
    }

    /**
     * URI indicating what type of recipe was performed. It determines the meaning
     * of recipe.entryPoint, recipe.arguments, recipe.environment, and materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * URI indicating what type of recipe was performed. It determines the meaning
     * of recipe.entryPoint, recipe.arguments, recipe.environment, and materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     * @return int|string
     */
    public function getDefinedInMaterial()
    {
        return $this->defined_in_material;
    }

    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDefinedInMaterial($var)
    {
        GPBUtil::checkInt64($var);
        $this->defined_in_material = $var;

        return $this;
    }

    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For example,
     * if the recipe type were "make", then this would reference the directory in
     * which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entry_point;
    }

    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For example,
     * if the recipe type were "make", then this would reference the directory in
     * which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_point = $var;

        return $this;
    }

    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the recipe
     * type were "make", then this might be the flags passed to make aside from
     * the target, which is captured in recipe.entryPoint. Since the arguments
     * field can greatly vary in structure, depending on the builder and recipe
     * type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any arguments = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the recipe
     * type were "make", then this might be the flags passed to make aside from
     * the target, which is captured in recipe.entryPoint. Since the arguments
     * field can greatly vary in structure, depending on the builder and recipe
     * type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any arguments = 4;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArguments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->arguments = $arr;

        return $this;
    }

    /**
     * Any other builder-controlled inputs necessary for correctly evaluating the
     * recipe. Usually only needed for reproducing the build but not evaluated as
     * part of policy. Since the environment field can greatly vary in structure,
     * depending on the builder and recipe type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any environment = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Any other builder-controlled inputs necessary for correctly evaluating the
     * recipe. Usually only needed for reproducing the build but not evaluated as
     * part of policy. Since the environment field can greatly vary in structure,
     * depending on the builder and recipe type, this is of form "Any".
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any environment = 5;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->environment = $arr;

        return $this;
    }

}

