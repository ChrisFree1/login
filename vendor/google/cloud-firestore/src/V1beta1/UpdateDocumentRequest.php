<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.UpdateDocument][google.firestore.v1beta1.Firestore.UpdateDocument].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.UpdateDocumentRequest</code>
 */
class UpdateDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated document.
     * Creates the document if it does not already exist.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $document = null;
    /**
     * The fields to update.
     * None of the field paths in the mask may contain a reserved name.
     * If the document exists on the server and has fields not referenced in the
     * mask, they are left unchanged.
     * Fields referenced in the mask, but not present in the input document, are
     * deleted from the document on the server.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     */
    private $mask = null;
    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Precondition current_document = 4;</code>
     */
    private $current_document = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1beta1\Document $document
     *           Required. The updated document.
     *           Creates the document if it does not already exist.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentMask $update_mask
     *           The fields to update.
     *           None of the field paths in the mask may contain a reserved name.
     *           If the document exists on the server and has fields not referenced in the
     *           mask, they are left unchanged.
     *           Fields referenced in the mask, but not present in the input document, are
     *           deleted from the document on the server.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentMask $mask
     *           The fields to return. If not set, returns all fields.
     *           If the document has a field that is not present in this mask, that field
     *           will not be returned in the response.
     *     @type \Google\Cloud\Firestore\V1beta1\Precondition $current_document
     *           An optional precondition on the document.
     *           The request will fail if this is set and not met by the target document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated document.
     * Creates the document if it does not already exist.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Firestore\V1beta1\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Required. The updated document.
     * Creates the document if it does not already exist.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Firestore\V1beta1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The fields to update.
     * None of the field paths in the mask may contain a reserved name.
     * If the document exists on the server and has fields not referenced in the
     * mask, they are left unchanged.
     * Fields referenced in the mask, but not present in the input document, are
     * deleted from the document on the server.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask update_mask = 2;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The fields to update.
     * None of the field paths in the mask may contain a reserved name.
     * If the document exists on the server and has fields not referenced in the
     * mask, they are left unchanged.
     * Fields referenced in the mask, but not present in the input document, are
     * deleted from the document on the server.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask update_mask = 2;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentMask
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentMask mask = 3;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentMask $var
     * @return $this
     */
    public function setMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentMask::class);
        $this->mask = $var;

        return $this;
    }

    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Precondition current_document = 4;</code>
     * @return \Google\Cloud\Firestore\V1beta1\Precondition
     */
    public function getCurrentDocument()
    {
        return $this->current_document;
    }

    /**
     * An optional precondition on the document.
     * The request will fail if this is set and not met by the target document.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Precondition current_document = 4;</code>
     * @param \Google\Cloud\Firestore\V1beta1\Precondition $var
     * @return $this
     */
    public function setCurrentDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\Precondition::class);
        $this->current_document = $var;

        return $this;
    }

}

