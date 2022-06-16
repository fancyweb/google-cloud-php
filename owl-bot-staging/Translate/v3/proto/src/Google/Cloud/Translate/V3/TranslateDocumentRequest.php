<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A document translation request.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.TranslateDocumentRequest</code>
 */
class TranslateDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or custom
     * glossaries.
     * Models and glossaries must be within the same region (have the same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Optional. The BCP-47 language code of the input document if known, for
     * example, "en-US" or "sr-Latn". Supported language codes are listed in
     * Language Support. If the source language isn't specified, the API attempts
     * to identify the source language automatically and returns the source
     * language within the response. Source language must be specified if the
     * request contains a glossary or a custom model.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_language_code = '';
    /**
     * Required. The BCP-47 language code to use for translation of the input
     * document, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_language_code = '';
    /**
     * Required. Input configurations.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentInputConfig document_input_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $document_input_config = null;
    /**
     * Optional. Output configurations.
     * Defines if the output file should be stored within Cloud Storage as well
     * as the desired output format. If not provided the translated file will
     * only be returned through a byte-stream and its output mime type will be
     * the same as the input file's mime type.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentOutputConfig document_output_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $document_output_config = null;
    /**
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * If not provided, the default Google model (NMT) will be used for
     * translation.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model = '';
    /**
     * Optional. Glossary to be applied. The glossary must be within the same
     * region (have the same location-id) as the model, otherwise an
     * INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $glossary_config = null;
    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters (Unicode
     * codepoints), can only contain lowercase letters, numeric characters,
     * underscores and dashes. International characters are allowed. Label values
     * are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Location to make a regional call.
     *           Format: `projects/{project-number-or-id}/locations/{location-id}`.
     *           For global calls, use `projects/{project-number-or-id}/locations/global` or
     *           `projects/{project-number-or-id}`.
     *           Non-global location is required for requests using AutoML models or custom
     *           glossaries.
     *           Models and glossaries must be within the same region (have the same
     *           location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *     @type string $source_language_code
     *           Optional. The BCP-47 language code of the input document if known, for
     *           example, "en-US" or "sr-Latn". Supported language codes are listed in
     *           Language Support. If the source language isn't specified, the API attempts
     *           to identify the source language automatically and returns the source
     *           language within the response. Source language must be specified if the
     *           request contains a glossary or a custom model.
     *     @type string $target_language_code
     *           Required. The BCP-47 language code to use for translation of the input
     *           document, set to one of the language codes listed in Language Support.
     *     @type \Google\Cloud\Translate\V3\DocumentInputConfig $document_input_config
     *           Required. Input configurations.
     *     @type \Google\Cloud\Translate\V3\DocumentOutputConfig $document_output_config
     *           Optional. Output configurations.
     *           Defines if the output file should be stored within Cloud Storage as well
     *           as the desired output format. If not provided the translated file will
     *           only be returned through a byte-stream and its output mime type will be
     *           the same as the input file's mime type.
     *     @type string $model
     *           Optional. The `model` type requested for this translation.
     *           The format depends on model type:
     *           - AutoML Translation models:
     *             `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     *           - General (built-in) models:
     *             `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     *           If not provided, the default Google model (NMT) will be used for
     *           translation.
     *     @type \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $glossary_config
     *           Optional. Glossary to be applied. The glossary must be within the same
     *           region (have the same location-id) as the model, otherwise an
     *           INVALID_ARGUMENT (400) error is returned.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata for the request.
     *           Label keys and values can be no longer than 63 characters (Unicode
     *           codepoints), can only contain lowercase letters, numeric characters,
     *           underscores and dashes. International characters are allowed. Label values
     *           are optional. Label keys must start with a letter.
     *           See https://cloud.google.com/translate/docs/advanced/labels for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or custom
     * glossaries.
     * Models and glossaries must be within the same region (have the same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Location to make a regional call.
     * Format: `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or custom
     * glossaries.
     * Models and glossaries must be within the same region (have the same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code of the input document if known, for
     * example, "en-US" or "sr-Latn". Supported language codes are listed in
     * Language Support. If the source language isn't specified, the API attempts
     * to identify the source language automatically and returns the source
     * language within the response. Source language must be specified if the
     * request contains a glossary or a custom model.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Optional. The BCP-47 language code of the input document if known, for
     * example, "en-US" or "sr-Latn". Supported language codes are listed in
     * Language Support. If the source language isn't specified, the API attempts
     * to identify the source language automatically and returns the source
     * language within the response. Source language must be specified if the
     * request contains a glossary or a custom model.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

    /**
     * Required. The BCP-47 language code to use for translation of the input
     * document, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Required. The BCP-47 language code to use for translation of the input
     * document, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language_code = $var;

        return $this;
    }

    /**
     * Required. Input configurations.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentInputConfig document_input_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Translate\V3\DocumentInputConfig|null
     */
    public function getDocumentInputConfig()
    {
        return $this->document_input_config;
    }

    public function hasDocumentInputConfig()
    {
        return isset($this->document_input_config);
    }

    public function clearDocumentInputConfig()
    {
        unset($this->document_input_config);
    }

    /**
     * Required. Input configurations.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentInputConfig document_input_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Translate\V3\DocumentInputConfig $var
     * @return $this
     */
    public function setDocumentInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\DocumentInputConfig::class);
        $this->document_input_config = $var;

        return $this;
    }

    /**
     * Optional. Output configurations.
     * Defines if the output file should be stored within Cloud Storage as well
     * as the desired output format. If not provided the translated file will
     * only be returned through a byte-stream and its output mime type will be
     * the same as the input file's mime type.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentOutputConfig document_output_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Translate\V3\DocumentOutputConfig|null
     */
    public function getDocumentOutputConfig()
    {
        return $this->document_output_config;
    }

    public function hasDocumentOutputConfig()
    {
        return isset($this->document_output_config);
    }

    public function clearDocumentOutputConfig()
    {
        unset($this->document_output_config);
    }

    /**
     * Optional. Output configurations.
     * Defines if the output file should be stored within Cloud Storage as well
     * as the desired output format. If not provided the translated file will
     * only be returned through a byte-stream and its output mime type will be
     * the same as the input file's mime type.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DocumentOutputConfig document_output_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Translate\V3\DocumentOutputConfig $var
     * @return $this
     */
    public function setDocumentOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\DocumentOutputConfig::class);
        $this->document_output_config = $var;

        return $this;
    }

    /**
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * If not provided, the default Google model (NMT) will be used for
     * translation.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * If not provided, the default Google model (NMT) will be used for
     * translation.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Optional. Glossary to be applied. The glossary must be within the same
     * region (have the same location-id) as the model, otherwise an
     * INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig|null
     */
    public function getGlossaryConfig()
    {
        return $this->glossary_config;
    }

    public function hasGlossaryConfig()
    {
        return isset($this->glossary_config);
    }

    public function clearGlossaryConfig()
    {
        unset($this->glossary_config);
    }

    /**
     * Optional. Glossary to be applied. The glossary must be within the same
     * region (have the same location-id) as the model, otherwise an
     * INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $var
     * @return $this
     */
    public function setGlossaryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig::class);
        $this->glossary_config = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters (Unicode
     * codepoints), can only contain lowercase letters, numeric characters,
     * underscores and dashes. International characters are allowed. Label values
     * are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters (Unicode
     * codepoints), can only contain lowercase letters, numeric characters,
     * underscores and dashes. International characters are allowed. Label values
     * are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

