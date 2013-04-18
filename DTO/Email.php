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
 */
class Email
{
    private $subject;
    private $date;
    private $replyTo;
    private $sentTo;
    private $sentToName;
    private $mimeVersion;
    private $messageId;
    private $from;
    private $fromName ;
    private $charset;
    private $contentType;
    private $transferEncoding;
    private $body;
    private $mainHeaders;
    private $numAttached;
    private $parts;
    private $inlineData;
    private $timeToParse;
    private $error;
    private $unNamedParts;
    private $rawHeaders;
    private $fetchRawHeaders;
    private $parsed;
    private $bShowAsInline;
}