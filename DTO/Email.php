<?php

/*
 * This file is part of the Cyclone
 *
 * For full license information please visit
 * http://license.visualidiot.com/
 */

namespace Cyclone\Component\MailBundle\DTO;

/**
 * Class to store email data, a dumb one at that
 *
 * @author  Elliot Wright <wright.elliot@gmail.com>
 * @package Cyclone
 * @todo    Validation in setters?
 */
class Email
{
    /**
     * @var string
     */
    private $subject;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $replyTo;

    /**
     * @var string
     */
    private $sentTo;

    /**
     * @var string
     */
    private $sentToName;

    /**
     * @var string
     */
    private $mimeVersion;

    /**
     * @var string
     */
    private $messageId;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $fromName ;

    /**
     * @var string
     */
    private $charset;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $transferEncoding;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $mainHeaders;

    /**
     * @var integer
     */
    private $numAttached;

    /**
     * @var array
     */
    private $parts;

    /**
     * @var integer
     */
    private $inlineData;

    /**
     * @var float
     */
    private $parseTime;

    /**
     * @var integer
     */
    private $unnamedParts;

    /**
     * @var string
     */
    private $rawHeaders;

    /**
     * @var boolean
     */
    private $fetchRawHeaders;

    /**
     * @var boolean
     */
    private $parsed;

    /**
     * @var boolean
     */
    private $showAsInline;

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set subject
     *
     * @param  string $subject
     * @return Email
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get date
     *
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date
     *
     * @param  DateTime $date
     * @return Email
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get replyTo
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Set replyTo
     *
     * @param  string $subject
     * @return Email
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get sentTo
     *
     * @return string
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }

    /**
     * Set sentTo
     *
     * @param  string $sentTo
     * @return Email
     */
    public function setSentTo($sentTo)
    {
        $this->sentTo = $sentTo;

        return $this;
    }

    /**
     * Get sentToName
     *
     * @return string
     */
    public function getSentToName()
    {
        return $this->sentToName;
    }

    /**
     * Set sentToName
     *
     * @param  string $sentToName
     * @return Email
     */
    public function setSentToName($sentToName)
    {
        $this->sentToName = $sentToName;

        return $this;
    }

    /**
     * Get mimeVersion
     *
     * @return string
     */
    public function getMimeVersion()
    {
        return $this->mimeVersion;
    }

    /**
     * Set mimeVersion
     *
     * @param  string $mimeVersion
     * @return Email
     */
    public function setMimeVersion($mimeVersion)
    {
        $this->mimeVersion = $mimeVersion;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set messageId
     *
     * @param  string $messageId
     * @return Email
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set from
     *
     * @param  string $from
     * @return Email
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get fromName
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set fromName
     *
     * @param  string $fromName
     * @return Email
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * Get charset
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set charset
     *
     * @param  string $charset
     * @return Email
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set contentType
     *
     * @param  string $contentType
     * @return Email
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get transferEncoding
     *
     * @return string
     */
    public function getTransferEncoding()
    {
        return $this->transferEncoding;
    }

    /**
     * Set transferEncoding
     *
     * @param  string $transferEncoding
     * @return Email
     */
    public function setTransferEncoding($transferEncoding)
    {
        $this->transferEncoding = $transferEncoding;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body
     *
     * @param  string $body
     * @return Email
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get mainHeaders
     *
     * @return array
     */
    public function getMainHeaders()
    {
        return $this->mainHeaders;
    }

    /**
     * Set mainHeaders
     *
     * @param  array $mainHeaders
     * @return Email
     */
    public function setMainHeaders($mainHeaders)
    {
        $this->mainHeaders = $mainHeaders;

        return $this;
    }

    /**
     * Get numAttached
     *
     * @return integer
     */
    public function getNumAttached()
    {
        return $this->numAttached;
    }

    /**
     * Set numAttached
     *
     * @param  integer $numAttached
     * @return Email
     */
    public function setNumAttached($numAttached)
    {
        $this->numAttached = $numAttached;

        return $this;
    }

    /**
     * Get parts
     *
     * @return array
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Set parts
     *
     * @param  array $parts
     * @return Email
     */
    public function setParts($parts)
    {
        $this->parts = $parts;

        return $this;
    }

    /**
     * Get inlineData
     *
     * @return integer
     */
    public function getInlineData()
    {
        return $this->inlineData;
    }

    /**
     * Set inlineData
     *
     * @param  integer $inlineData
     * @return Email
     */
    public function setInlineData($inlineData)
    {
        $this->inlineData = $inlineData;

        return $this;
    }

    /**
     * Get parseTime
     *
     * @return float
     */
    public function getParseTime()
    {
        return $this->parseTime;
    }

    /**
     * Set parseTime
     *
     * @param  float $parseTime
     * @return Email
     */
    public function setParseTime($parseTime)
    {
        $this->parseTime = $parseTime;

        return $this;
    }

    /**
     * Get unnamedParts
     *
     * @return integer
     */
    public function getUnnamedParts()
    {
        return $this->unnamedParts;
    }

    /**
     * Set unnamedParts
     *
     * @param  integer $unnamedParts
     * @return Email
     */
    public function setUnnamedParts($unnamedParts)
    {
        $this->unnamedParts = $unnamedParts;

        return $this;
    }

    /**
     * Get rawHeaders
     *
     * @return string
     */
    public function getRawHeaders()
    {
        return $this->rawHeaders;
    }

    /**
     * Set rawHeaders
     *
     * @param  string $rawHeaders
     * @return Email
     */
    public function setRawHeaders($rawHeaders)
    {
        $this->rawHeaders = $rawHeaders;

        return $this;
    }

    /**
     * Get fetchRawHeaders
     *
     * @return boolean
     */
    public function getFetchRawHeaders()
    {
        return $this->fetchRawHeaders;
    }

    /**
     * Set fetchRawHeaders
     *
     * @param  boolean $fetchRawHeaders
     * @return Email
     */
    public function setFetchRawHeaders($fetchRawHeaders)
    {
        $this->fetchRawHeaders = $fetchRawHeaders;

        return $this;
    }

    /**
     * Get parsed
     *
     * @return boolean
     */
    public function getParsed()
    {
        return $this->parsed;
    }

    /**
     * Set parsed
     *
     * @param  boolean $parsed
     * @return Email
     */
    public function setParsed($parsed)
    {
        $this->parsed = $parsed;

        return $this;
    }

    /**
     * Get showAsInline
     *
     * @return boolean
     */
    public function getShowAsInline()
    {
        return $this->showAsInline;
    }

    /**
     * Set showAsInline
     *
     * @param  boolean $showAsInline
     * @return Email
     */
    public function setShowAsInline($showAsInline)
    {
        $this->showAsInline = $showAsInline;

        return $this;
    }
}
