<?php
//live : namespaces, traits, diagrammes !

//1) les namespaces
use Live\Entity\Implantation;
use Live\Entity\Student;
use Live\Manager\Student as Studentmanager;
// RENAME sinon beug car 2 files Students

require_once 'Entity/EntityTrait.php';

require_once "db/db.php";

require_once "Entity/School.php";
require_once "Entity/Student.php";
require_once "Entity/Implantation.php";

require_once "Manager/Implantation.php";
require_once "Manager/Student.php";
require_once "Manager/School.php";


$student = new Student();
$student->hello();
//il renvoie bien sur la fct de l'entity Student!

$studentManager = new Studentmanager();
$studentManager->hello();
//Pour renvoie la fct hello de l'entity Manager(student),
//il faut rename Student in Manager ===> use Live\Manager\Student as Studentmanager;

//2) les traits
$implantation = new Implantation();
echo $implantation->getName();
//renvoie 'mon name'