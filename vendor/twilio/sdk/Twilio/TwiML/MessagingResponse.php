<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML;

class MessagingResponse extends TwiML {
    /**
     * MessagingResponse constructor.
     */
    public function __construct() {
        parent::__construct('Response');
    }

    /**
     * Add Message child.
     * 
     * @param string $message Message Body
     * @param array $attributes Optional attributes
     * @return TwiML Child element.
     */
    public function message($message, $attributes = array()) {
        return $this->nest(new Messaging\Message($message, $attributes));
    }

    /**
     * Add Redirect child.
     * 
     * @param url $url Redirect URL
     * @param array $attributes Optional attributes
     * @return TwiML Child element.
     */
    public function redirect($url, $attributes = array()) {
        return $this->nest(new Messaging\Redirect($url, $attributes));
    }
}