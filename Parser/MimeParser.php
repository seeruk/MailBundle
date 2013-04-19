<?php

/*
 * This file is part of the Cyclone
 *
 * For full license information please visit
 * http://license.visualidiot.com/
 */

namespace Cyclone\Component\MailBundle\Parser;

use Cyclone\Component\MailBundle\DTO\Email;

/**
 * Class that parses email messages
 *
 * @author  Elliot Wright <wright.elliot@gmail.com>
 * @package Cyclone
 */
class MimeParser
{
    private $debug;
    private $parseTime;
    private $sizeLimit;


    /**
     * Constructor
     */
    public function __construct(array $config)
    {
        $this->setDebug($config['debug']);
        $this->setSizeLimit($config['parser']['size_limit']);
    }


    /**
     * Container function for parsing emails
     *
     * @todo params, content, etc ...
     * @todo line 46
     * @todo line 52
     */
    public function parse($message, $size = 0)
    {
        if ($size > $this->getSizeLimit()) {
            // Throw an exception here.
        }

        $startTime = $this->getMicroTime();

        $headers = $this->parseHeaders($message);

        var_dump($headers);

        //$message = $this->createParts($message);
        //$message = $this->purgeEmptyParts($message);

        $this->setParseTime($this->getMicroTime() - $startTime);
    }


    /**
     * Extracts the main headers from a MIME string
     *
     * @param  string $message
     * @return array
     */
    private function parseHeaders($message)
    {
        $headers = array();

        // Prepare string token for iteration ...
        $line = strtok($message, PHP_EOL);

        // Iterate over each line ...
        while (false !== $line) {
            // It's a header at this point ...
            if (trim($line)) {
                // { key=["]value["]} type
                // is_____Header();
                if (strpos($lines[$i], " ") === 0 || strpos($lines[$i], "\t") === 0) {


                // key: value; key: value
                // isSplitHeader();
                } else if () {


                // {Key: value} type
                // isGenericHeader();
                } else if () {

                }

                $headers[] = $line;

                $line = trim(strtok(PHP_EOL));

            // Means we've hit the end of the headers ...
            } else {
                break;
            }
        }

        return $headers;
    }


    private function createParts($message)
    {
        // Prepare string token for iteration ...
        $line = strtok($message, PHP_EOL);

        // Interate over each line ...
        while (false !== $line) {
            //if ()

            $line = strtok(PHP_EOL);
        }
    }


    private function purgeEmptyParts($message)
    {
        for($j=1;$j<count($arr); $j++)
        {
            for($i=1;$i<count($arr); $i++)
            {
                if ( trim($arr[$i]["body"]) == "" )
                {
                    $this->logMessage("splicing part $i");
                    array_splice($arr, $i, 1);
                }
            }
        }
    }


    /**
     * Gets a more accurate current timestamp
     *
     * @return float
     */
    function getMicroTime()
    {
        list($usec, $sec) = explode(' ', microtime());

        return ((float)$usec + (float)$sec);
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
     * @param  float      $parseTime
     * @return MimeParser
     */
    protected function setParseTime($parseTime)
    {
        $this->parseTime = $parseTime;

        return $this;
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
     * @return boolean
     */
    public function getSizeLimit()
    {
        return $this->debug;
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
}