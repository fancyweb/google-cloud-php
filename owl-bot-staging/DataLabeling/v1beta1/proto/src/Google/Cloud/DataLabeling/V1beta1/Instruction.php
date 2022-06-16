<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/instruction.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instruction of how to perform the labeling task for human operators.
 * Currently only PDF instruction is supported.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.Instruction</code>
 */
class Instruction extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Instruction resource name, format:
     * projects/{project_id}/instructions/{instruction_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the instruction. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Optional. User-provided description of the instruction.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Output only. Creation time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    protected $create_time = null;
    /**
     * Output only. Last update time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     */
    protected $update_time = null;
    /**
     * Required. The data type of this instruction.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.DataType data_type = 6;</code>
     */
    protected $data_type = 0;
    /**
     * Deprecated: this instruction format is not supported any more.
     * Instruction from a CSV file, such as for classification task.
     * The CSV file should have exact two columns, in the following format:
     * * The first column is labeled data, such as an image reference, text.
     * * The second column is comma separated labels associated with data.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.CsvInstruction csv_instruction = 7 [deprecated = true];</code>
     * @deprecated
     */
    protected $csv_instruction = null;
    /**
     * Instruction from a PDF document. The PDF should be in a Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PdfInstruction pdf_instruction = 9;</code>
     */
    protected $pdf_instruction = null;
    /**
     * Output only. The names of any related resources that are blocking changes
     * to the instruction.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 10;</code>
     */
    private $blocking_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Instruction resource name, format:
     *           projects/{project_id}/instructions/{instruction_id}
     *     @type string $display_name
     *           Required. The display name of the instruction. Maximum of 64 characters.
     *     @type string $description
     *           Optional. User-provided description of the instruction.
     *           The description can be up to 10000 characters long.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of instruction.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of instruction.
     *     @type int $data_type
     *           Required. The data type of this instruction.
     *     @type \Google\Cloud\DataLabeling\V1beta1\CsvInstruction $csv_instruction
     *           Deprecated: this instruction format is not supported any more.
     *           Instruction from a CSV file, such as for classification task.
     *           The CSV file should have exact two columns, in the following format:
     *           * The first column is labeled data, such as an image reference, text.
     *           * The second column is comma separated labels associated with data.
     *     @type \Google\Cloud\DataLabeling\V1beta1\PdfInstruction $pdf_instruction
     *           Instruction from a PDF document. The PDF should be in a Cloud Storage
     *           bucket.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blocking_resources
     *           Output only. The names of any related resources that are blocking changes
     *           to the instruction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Instruction::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Instruction resource name, format:
     * projects/{project_id}/instructions/{instruction_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Instruction resource name, format:
     * projects/{project_id}/instructions/{instruction_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The display name of the instruction. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the instruction. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-provided description of the instruction.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User-provided description of the instruction.
     * The description can be up to 10000 characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Creation time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. Creation time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. Last update time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
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
     * Output only. Last update time of instruction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Required. The data type of this instruction.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.DataType data_type = 6;</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Required. The data type of this instruction.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.DataType data_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\DataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Deprecated: this instruction format is not supported any more.
     * Instruction from a CSV file, such as for classification task.
     * The CSV file should have exact two columns, in the following format:
     * * The first column is labeled data, such as an image reference, text.
     * * The second column is comma separated labels associated with data.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.CsvInstruction csv_instruction = 7 [deprecated = true];</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\CsvInstruction|null
     * @deprecated
     */
    public function getCsvInstruction()
    {
        @trigger_error('csv_instruction is deprecated.', E_USER_DEPRECATED);
        return $this->csv_instruction;
    }

    public function hasCsvInstruction()
    {
        @trigger_error('csv_instruction is deprecated.', E_USER_DEPRECATED);
        return isset($this->csv_instruction);
    }

    public function clearCsvInstruction()
    {
        @trigger_error('csv_instruction is deprecated.', E_USER_DEPRECATED);
        unset($this->csv_instruction);
    }

    /**
     * Deprecated: this instruction format is not supported any more.
     * Instruction from a CSV file, such as for classification task.
     * The CSV file should have exact two columns, in the following format:
     * * The first column is labeled data, such as an image reference, text.
     * * The second column is comma separated labels associated with data.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.CsvInstruction csv_instruction = 7 [deprecated = true];</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\CsvInstruction $var
     * @return $this
     * @deprecated
     */
    public function setCsvInstruction($var)
    {
        @trigger_error('csv_instruction is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\CsvInstruction::class);
        $this->csv_instruction = $var;

        return $this;
    }

    /**
     * Instruction from a PDF document. The PDF should be in a Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PdfInstruction pdf_instruction = 9;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\PdfInstruction|null
     */
    public function getPdfInstruction()
    {
        return $this->pdf_instruction;
    }

    public function hasPdfInstruction()
    {
        return isset($this->pdf_instruction);
    }

    public function clearPdfInstruction()
    {
        unset($this->pdf_instruction);
    }

    /**
     * Instruction from a PDF document. The PDF should be in a Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.PdfInstruction pdf_instruction = 9;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\PdfInstruction $var
     * @return $this
     */
    public function setPdfInstruction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\PdfInstruction::class);
        $this->pdf_instruction = $var;

        return $this;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the instruction.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockingResources()
    {
        return $this->blocking_resources;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the instruction.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 10;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockingResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blocking_resources = $arr;

        return $this;
    }

}

