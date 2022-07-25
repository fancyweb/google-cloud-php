<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Document represents the canonical document resource in Document Understanding
 * AI.
 * It is an interchange format that provides insights into documents and allows
 * for collaboration between users and Document Understanding AI to iterate and
 * optimize for quality.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * An IANA published MIME type (also referred to as media type). For more
     * information, see
     * https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     */
    private $mime_type = '';
    /**
     * Optional. UTF-8 encoded text in reading order from the document.
     *
     * Generated from protobuf field <code>string text = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $text = '';
    /**
     * Styles for the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Style text_styles = 5;</code>
     */
    private $text_styles;
    /**
     * Visual page layout for the [Document][google.cloud.documentai.v1.Document].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page pages = 6;</code>
     */
    private $pages;
    /**
     * A list of entities detected on
     * [Document.text][google.cloud.documentai.v1.Document.text]. For document
     * shards, entities in this list may cross shard boundaries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity entities = 7;</code>
     */
    private $entities;
    /**
     * Relationship among
     * [Document.entities][google.cloud.documentai.v1.Document.entities].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.EntityRelation entity_relations = 8;</code>
     */
    private $entity_relations;
    /**
     * A list of text corrections made to [Document.text].  This is usually
     * used for annotating corrections to OCR mistakes.  Text changes for a given
     * revision may not overlap with each other.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextChange text_changes = 14;</code>
     */
    private $text_changes;
    /**
     * Information about the sharding if this document is sharded part of a larger
     * document. If the document is not sharded, this message is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.ShardInfo shard_info = 9;</code>
     */
    private $shard_info = null;
    /**
     * Any error that occurred while processing this document.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10;</code>
     */
    private $error = null;
    /**
     * Revision history of this document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Revision revisions = 13;</code>
     */
    private $revisions;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Optional. Currently supports Google Cloud Storage URI of the form
     *              `gs://bucket_name/object_name`. Object versioning is not supported.
     *              See [Google Cloud Storage Request
     *              URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *              info.
     *     @type string $content
     *           Optional. Inline document content, represented as a stream of bytes.
     *           Note: As with all `bytes` fields, protobuffers use a pure binary
     *           representation, whereas JSON representations use base64.
     *     @type string $mime_type
     *           An IANA published MIME type (also referred to as media type). For more
     *           information, see
     *           https://www.iana.org/assignments/media-types/media-types.xhtml.
     *     @type string $text
     *           Optional. UTF-8 encoded text in reading order from the document.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Style>|\Google\Protobuf\Internal\RepeatedField $text_styles
     *           Styles for the [Document.text][google.cloud.documentai.v1.Document.text].
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Page>|\Google\Protobuf\Internal\RepeatedField $pages
     *           Visual page layout for the [Document][google.cloud.documentai.v1.Document].
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Entity>|\Google\Protobuf\Internal\RepeatedField $entities
     *           A list of entities detected on
     *           [Document.text][google.cloud.documentai.v1.Document.text]. For document
     *           shards, entities in this list may cross shard boundaries.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\EntityRelation>|\Google\Protobuf\Internal\RepeatedField $entity_relations
     *           Relationship among
     *           [Document.entities][google.cloud.documentai.v1.Document.entities].
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\TextChange>|\Google\Protobuf\Internal\RepeatedField $text_changes
     *           A list of text corrections made to [Document.text].  This is usually
     *           used for annotating corrections to OCR mistakes.  Text changes for a given
     *           revision may not overlap with each other.
     *     @type \Google\Cloud\DocumentAI\V1\Document\ShardInfo $shard_info
     *           Information about the sharding if this document is sharded part of a larger
     *           document. If the document is not sharded, this message is not specified.
     *     @type \Google\Rpc\Status $error
     *           Any error that occurred while processing this document.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Revision>|\Google\Protobuf\Internal\RepeatedField $revisions
     *           Revision history of this document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Currently supports Google Cloud Storage URI of the form
     *    `gs://bucket_name/object_name`. Object versioning is not supported.
     *    See [Google Cloud Storage Request
     *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *    info.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(1);
    }

    public function hasUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. Currently supports Google Cloud Storage URI of the form
     *    `gs://bucket_name/object_name`. Object versioning is not supported.
     *    See [Google Cloud Storage Request
     *    URIs](https://cloud.google.com/storage/docs/reference-uris) for more
     *    info.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. Inline document content, represented as a stream of bytes.
     * Note: As with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(2);
    }

    public function hasContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Inline document content, represented as a stream of bytes.
     * Note: As with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An IANA published MIME type (also referred to as media type). For more
     * information, see
     * https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * An IANA published MIME type (also referred to as media type). For more
     * information, see
     * https://www.iana.org/assignments/media-types/media-types.xhtml.
     *
     * Generated from protobuf field <code>string mime_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Optional. UTF-8 encoded text in reading order from the document.
     *
     * Generated from protobuf field <code>string text = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Optional. UTF-8 encoded text in reading order from the document.
     *
     * Generated from protobuf field <code>string text = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Styles for the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Style text_styles = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextStyles()
    {
        return $this->text_styles;
    }

    /**
     * Styles for the [Document.text][google.cloud.documentai.v1.Document.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Style text_styles = 5;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Style>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextStyles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Style::class);
        $this->text_styles = $arr;

        return $this;
    }

    /**
     * Visual page layout for the [Document][google.cloud.documentai.v1.Document].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page pages = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Visual page layout for the [Document][google.cloud.documentai.v1.Document].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page pages = 6;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Page>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page::class);
        $this->pages = $arr;

        return $this;
    }

    /**
     * A list of entities detected on
     * [Document.text][google.cloud.documentai.v1.Document.text]. For document
     * shards, entities in this list may cross shard boundaries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity entities = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * A list of entities detected on
     * [Document.text][google.cloud.documentai.v1.Document.text]. For document
     * shards, entities in this list may cross shard boundaries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Entity entities = 7;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * Relationship among
     * [Document.entities][google.cloud.documentai.v1.Document.entities].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.EntityRelation entity_relations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityRelations()
    {
        return $this->entity_relations;
    }

    /**
     * Relationship among
     * [Document.entities][google.cloud.documentai.v1.Document.entities].
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.EntityRelation entity_relations = 8;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\EntityRelation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityRelations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\EntityRelation::class);
        $this->entity_relations = $arr;

        return $this;
    }

    /**
     * A list of text corrections made to [Document.text].  This is usually
     * used for annotating corrections to OCR mistakes.  Text changes for a given
     * revision may not overlap with each other.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextChange text_changes = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextChanges()
    {
        return $this->text_changes;
    }

    /**
     * A list of text corrections made to [Document.text].  This is usually
     * used for annotating corrections to OCR mistakes.  Text changes for a given
     * revision may not overlap with each other.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.TextChange text_changes = 14;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\TextChange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextChanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\TextChange::class);
        $this->text_changes = $arr;

        return $this;
    }

    /**
     * Information about the sharding if this document is sharded part of a larger
     * document. If the document is not sharded, this message is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.ShardInfo shard_info = 9;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\ShardInfo|null
     */
    public function getShardInfo()
    {
        return $this->shard_info;
    }

    public function hasShardInfo()
    {
        return isset($this->shard_info);
    }

    public function clearShardInfo()
    {
        unset($this->shard_info);
    }

    /**
     * Information about the sharding if this document is sharded part of a larger
     * document. If the document is not sharded, this message is not specified.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.ShardInfo shard_info = 9;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\ShardInfo $var
     * @return $this
     */
    public function setShardInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\ShardInfo::class);
        $this->shard_info = $var;

        return $this;
    }

    /**
     * Any error that occurred while processing this document.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Any error that occurred while processing this document.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Revision history of this document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Revision revisions = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRevisions()
    {
        return $this->revisions;
    }

    /**
     * Revision history of this document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Revision revisions = 13;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Revision>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRevisions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Revision::class);
        $this->revisions = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

