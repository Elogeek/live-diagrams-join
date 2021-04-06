<?php
namespace Live\Entity;
use Live\Traits\EntityTrait;
class Implantation {
    use EntityTrait;

    private string $adress;
    private string $country;

    /**
     * Implantation constructor.
     * @param string $adress
     * @param string $country
     */
    public function __construct(string $adress, string $country) {
    $this->id = 10; //exemple d'utilisation des traits
    $this->name = 'mon name'; //exemple d'utilisation des traits

    $this->adress = $adress;
    $this->country = $country;
    }

    /** set the implantation adress
     * @param string $adress
     */
    public function setAdress(string $adress) : void{
    $this->adress = $adress;
    }

    /** return the implantation adress
     * @return string
     */
    public function getAdress():string {
    return $this->adress;
    }

    /** return the implantation country
     * @return string
     */
    public function getCountry(): string {
    return $this->country;
    }

    /** set the implantation country
     * @param string $country
     */
    public function setCountry(string $country):void {
    $this->country = $country;
    }
}