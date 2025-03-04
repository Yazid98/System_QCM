<?php


class Response
{

    public $title;
    public $BONNE_REPONSE;

    public function __construct($title)
    {
        $this->$title = $title;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of correct
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * Set the value of correct
     *
     * @return  self
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }
}
