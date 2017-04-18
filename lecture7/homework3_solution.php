<?php

class User {
	
	public $name;
	public $dateOfBirth;
	public $placeOfBirth;
}

class AcademyStudent extends User {

	public $courseName;
	public $courseLenght;

	public function __construct ($name, $dateOfBirth, $placeOfBirth, $courseName, $courseLenght) {

    	$this->name = $name;
    	$this->dateOfBirth = $dateOfBirth;
    	$this->placeOfBirth = $placeOfBirth;
    	$this->courseName = $courseName;
    	$this->courseLenght = $courseLenght;
  	}
}

function getCourse($courseName) {
	$courses = [
		'php za pocetnike' => [
			new AcademyStudent('Nermin Sehic', '05.12.1993', 'Sarajevo', 'PHP', 15), 
			new AcademyStudent('John Doe', '01.01.1994', 'Sarajevo', 'PHP', 15)
		],
		'javascript' => [
			new AcademyStudent('Nermin Sehic', '05.12.1993', 'Sarajevo', 'PHP', 15), 
			new AcademyStudent('John Doe', '01.01.1994', 'Sarajevo', 'PHP', 15)
		]
	];

	foreach ($courses as $key => $course) {
       if ($key == $courseName) {
           return $course;
       }
   }

   return null;
}

function getStudentsForCourse($courseName) {
	$students = getCourse($courseName);
	
	$result = '<h2> Studenti koji pohadjaju: ' . $courseName . '</h2>';
	$result .= '<ul>';
	
	foreach($students as $student) {
		$result .= '<li>' . $student->name . '</li>';
	}
	
	$result .= '</ul>';
	echo $result;
}

getStudentsForCourse('javascript');
