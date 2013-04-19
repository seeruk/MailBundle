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
     * @var integer
     */
    private $sizeLimit;


    /**
     * Constructor
     *
     * @todo Param should be the entire configuration ideally
     */
    public function __construct($config)
    {
        var_dump($config);

        //$this->setDebug($debug);
        //$this->setSizeLimit($sizeLimit);
    }


    /**
     * Get debug
     *
     * @return boolean
     */
    public function getDebug()
    {
        return $this->debug;
    }


    /**
     * Set debug
     *
     * @param  boolean    $debug
     * @return MimeParser
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }


    /**
     * Get sizeLimit
     *
     * @return integer
     */
    public function getSizeLimit()
    {
        return $this->sizeLimit;
    }


    /**
     * Set sizeLimit
     *
     * @param  integer    $sizeLimit
     * @return MimeParser
     */
    public function setSizeLimit($sizeLimit)
    {
        $this->sizeLimit = $sizeLimit;

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
        if ($size > $this->sizeLimit)
        {
            // Throw an exception here.
            return false;
        }

        return true;
    }
}