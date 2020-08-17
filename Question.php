<?php


class Question
{
       public $title;
       public $responseCollection = array();
       public $explication;

       public function __construct($title)
       {
              $this->responseCollection = [];
              $this->title = $title;
       }

       public function addReponse(Response $response)
       {
              if (in_array($response, $this->responseCollection, true)) {
                     return false;
              } else {
                     $this->responseCollection[] = $response;
                     return true;
              }
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
}
