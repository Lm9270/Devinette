<?php

class Devinette
{
    private $id;
    private $name;
    private $question;
    private $answer; 
    private $createdAt; 

    public function getId()
    {
        return $this->id;
    }

    // Setter for $id
    public function setId($id)
    {
        $this->id = $id;
    }

    // Getter for $name
    public function getName()
    {
        return $this->name;
    }

    // Setter for $name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter for $question
    public function getQuestion()
    {
        return $this->question;
    }

    // Setter for $question
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    // Getter for $answer
    public function getAnswer()
    {
        return $this->answer;
    }

    // Setter for $answer
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    // Getter for $createdAt
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    // Setter for $createdAt
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}