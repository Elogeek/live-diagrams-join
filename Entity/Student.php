<?php

namespace Live\Entity;
use LIve\Traits\EntityTrait;
class Student {
    use EntityTrait;
    private string $firstName;

    /**
     * Student constructor.
     * @param string $firstName
     */
    public function __construct(string $firstName) {
        $this->firstName = $firstName;

}
    /**
     * Simply says hello
     */
    public  function hello() {
        echo "Hello From entity student file.<br>";
    }

    /**
     * @return string
     */
    public function getFirstName():string {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function  setFirstName(string $firstName) {
        $this->firstName =$firstName;
    }
}