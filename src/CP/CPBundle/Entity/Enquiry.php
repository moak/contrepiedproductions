<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace CP\CPBundle\Entity;


class Enquiry
{
    protected $name;

    protected $email;

    protected $subject;

    protected $body;

    protected $phone;

    public function getName()
    {
        return $this->name;
    }

    public function setName($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}