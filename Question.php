<?php


class Question
{
       public $title;
       public $response;
       public $explication;

       public function __construct($title)
       {
              $this->title = $title;
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
        * Get the value of response
        */
       public function getResponse()
       {
              return $this->response;
       }

       /**
        * Set the value of response
        *
        * @return  self
        */
       public function setResponse($response)
       {
              $this->response = $response;

              return $this;
       }

       /**
        * Get the value of explication
        */
       public function getExplication()
       {
              return $this->explication;
       }

       /**
        * Set the value of explication
        *
        * @return  self
        */
       public function setExplication($explication)
       {
              $this->explication = $explication;

              return $this;
       }

       public function ajouterReponse(Response $response)
       {
       }
}
