<?php

namespace QCM;

use Question;

class QCM
{

    public $questionsCollection = [];
    public $appreciation = array();

    public function __construct()
    {
        $this->questionsCollection = [];
        $this->appreciation = [];
    }

    /**Getters & Setters */

    /**
     * Get the value of appreciations
     */
    public function getAppreciations()
    {
        return $this->appreciations;
    }

    /**
     * Set the value of appreciations
     *
     * @return  self
     */
    public function setAppreciations($appreciations)
    {
        $this->appreciations = $appreciations;

        return $this;
    }

    /**
     * Get the value of questionsCollection
     */
    public function getQuestionsCollection()
    {
        return $this->questionsCollection;
    }

    /**
     * Set the value of questionsCollection
     *
     * @return  self
     */
    public function setQuestionsCollection($questionsCollection)
    {
        return $this->questionsCollection = $questionsCollection;
    }

    #Méthodes

    public function ajouterQuestion(Question $question)
    {
        if (in_array($question, $this->questionsCollection, true)) {
            return false;
        } else {
            $this->questionsCollection[] = $question;
            return true;
        }
    }

    public function addQuestion(Question $question)
    {
        $this->questionsCollection[] = new Question($question);
    }

    public function generer()
    {

        foreach ($this->questionsCollection as $questions) {
        }
    }
}
