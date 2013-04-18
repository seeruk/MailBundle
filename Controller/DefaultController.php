<?php

/*
 * This file is part of the Cyclone
 *
 * For full license information please visit
 * http://license.visualidiot.com/
 */

namespace Cyclone\Component\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cyclone\Component\MailBundle\DTO\Email;
use Cyclone\Component\MailBundle\Parser\MimeParser;

/**
 * Main controller for testing Cyclone's Mail Parser
 *
 * @author  Elliot Wright <wright.elliot@gmail.com>
 * @package Cyclone
 */
class DefaultController extends Controller
{
    /**
     * Index action
     *
     * @param  string $name
     * @return object
     */
    public function indexAction($name)
    {
        // The following code needs to be in a helper class, MailReader?
        // MailAggregator? Does it need to keep all of the messages in some
        // sort of repository format, or, just previews / the subjects and then
        // load whole emails when they're requested by the client?

        // Essentially, an email just needs to be a string before being parsed,
        // it doesn't matter if it comes from a file or if it comes from the
        // database.
        $filename = __DIR__ . '/../Resources/mail/sample2.eml';
        $message  = fread(fopen($filename, 'r'), filesize($filename));

        $parser = new MimeParser();

        if ($parser->parse($message, filesize($filename)))
        {
            echo "Message parsed successfully.";
        }

        $email = new Email;
        $email->setSubject('I am here today!')
                ->setDate(new \DateTime('now'))
                ->setReplyTo('Elliot Wright <wright.elliot@gmail.com>')
                ->setSentTo('mdenton@ebuyer.com')
                ->setSentToName('Michael Denton')
                ->setMimeVersion('1.0')
                ->setBody('lawl')
                ->setMessageId('<516D03B8.6080509@ebuyer.com>')
                ->setFrom('wright.elliot@gmail.com')
                ->setFromName('Elliot Wright')
                ->setCharset('ISO-8859-1')
                ->setContentType('text/html')
                ->setTransferEncoding('7bit')
                ->setBody('<p>Some HTML stuff would be here!</p>')
                ->setMainHeaders(array(
                    'message-id' => '<516D03B8.6080509@ebuyer.com>',
                    'date'       => 'Tue, 16 Apr 2013 08:54:32 +0100'
                ))
                ->setinlineData(0)
                ->setParseTime(0.0)
                ->setUnnamedParts(0)
                ->setRawHeaders('headers...')
                ->setFetchRawHeaders(true)
                ->setParsed(true)
                ->setShowAsInline(false);

        var_dump($email);
        var_dump($this->container->getParameter('cyclone_component_mail.test'));


        return $this->render('CycloneComponentMailBundle:Default:index.html.twig', array('name' => $name));
    }
}
