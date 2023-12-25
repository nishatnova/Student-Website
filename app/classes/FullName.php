<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $fullName, $totalWords, $totalCharacters;

    public function __construct($post)
    {
        if($post)
        {
            $this->firstName = $post['first_name'];
            $this->lastName = $post['last_name'];
        }

    }

    public function getFullName()
    {
        $this->fullName = $this->firstName.' '.$this->lastName;
        $this->totalWords = str_word_count($this->fullName);
        $this->totalCharacters = strlen($this->fullName);
        return view('full-name-form',[
              'title' => 'Full Name Form',
              'firstName' => $this->firstName,
              'lastName' => $this->lastName,
              'fullName' => $this->fullName,
              'totalWords' => $this->totalWords,
              'totalCharacters' => $this->totalCharacters
     ]);

    }

}