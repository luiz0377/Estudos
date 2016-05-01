<?php
/**
 * Created by PhpStorm.
 * User: Luzi Henrique Soares
 * Date: 01/05/2016
 * Time: 11:11
 */

namespace Example\Cliente;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Cliente
{
    private $nome;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $res = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(! $res) {
            throw new InvalidArgumentException;
        }
        $this->email = $email;
    }

    private $email;

}