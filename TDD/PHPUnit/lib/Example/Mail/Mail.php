<?php
/**
 * Created by PhpStorm.
 * User: Luiz Henrique Soares
 * Date: 01/05/2016
 * Time: 11:17
 */

namespace Example\Mail;


use Example\Cliente\Cliente;

class Mail
{
    private $from;
    private $to;
    private $subject;
    private $message;
    private $cliente;

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->to = $cliente->getEmail();
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        echo 'enviou email';
        return true;
    }

}