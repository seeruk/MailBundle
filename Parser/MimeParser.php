<?php

/*
 * This file is part of the Cyclone
 *
 * For full license information please visit
 * http://license.visualidiot.com/
 */

namespace Cyclone\Component\MailBundle\Parser;

/**
 * Class that parses email messages
 *
 * @author  Elliot Wright <wright.elliot@gmail.com>
 * @package Cyclone
 */
class MimeParser
{
    /**
     * @var boolean
     */
    private $debug;


    /**
     * Constructor
     *
     * @todo Param should be the entire configuration ideally
     */
    public function __construct($debug)
    {
        $this->setDebug($debug);
    }

    /**
     * Get debug
     * @return boolean
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Set debug
     * @param boolean $debug
     * @return MimeParser
     */
    protected function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Container function for parsing emails
     *
     * @todo params, content, etc ...
     * @todo incorporate configuration into this method
     */
    public function parse($message, $size = 0)
    {
        if ($size > 12312301923190230123) // Needs to be a config value... lol
        {
            return false;
        }

        return true;
    }
}