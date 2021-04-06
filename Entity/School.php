<?php
namespace Live\Entity;
use Live\Traits\EntityTrait;

class School {
    use EntityTrait;

    private Implantation $implantation;
    private string $director;

    /**
     * School constructor.
     * @param Implantation $implantation
     * @param string $director
     */
    public function __construct(Implantation $implantation, string $director) {
    $this->implantation = $implantation;
    $this->director = $director;
    }

    /** set the school implantation
     * @param Implantation $implantation
     */
    public function setImplantation(Implantation $implantation) : void {
    $this->implantation = $implantation;
    }

    /** return the school implantation
     * @return Implantation
     */
    public function getImplantation(): Implantation {
    return $this->implantation;
    }

    /** return the school director
     * @return string
     */
    public function getDirector():string {
    return $this->director;
    }

    /** set the school director
     * @param string $direct
     */
    public function setDirector(string $direct){
    $this->director = $direct;
    }
}