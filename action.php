<?php
include('class/School.php');
$school = new School();

if(!empty($_POST['action']) && $_POST['action'] == 'listClasses') {
	$school->listClasses();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addClass') {
	$school->addClass();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getClass') {
	$school->getClassesDetails();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateClass') {
	$school->updateClass();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteClass') {
	$school->deleteClass();
}
if(!empty($_POST['action']) && $_POST['action'] == 'listStudent') {
	$school->listStudent();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addStudent') {
	$school->addStudent();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getStudentDetails') {
	$school->getStudentDetails();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateStudent') {
	$school->updateStudent();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteStudent') {
	$school->deleteStudent();
}
/********sections********/
if(!empty($_POST['action']) && $_POST['action'] == 'listJugadores') {
	$school->listJugadores();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addJugador') {
	$school->addJugador();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getJugador') {
	$school->getJugador();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateJugador') {
	$school->updateJugador();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteJugador') {
	$school->deleteJugador();
}
/********teachers********/
if(!empty($_POST['action']) && $_POST['action'] == 'listPartida') {
	$school->listPartida();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addPartida') {
	$school->addPartida();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getPartida') {
	$school->getPartida();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updatePartida') {
	$school->updatePartida();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deletePartida') {
	$school->deletePartida();
}
/********Subject********/
if(!empty($_POST['action']) && $_POST['action'] == 'listSubject') {
	$school->listSubject();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addSubject') {
	$school->addSubject();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getSubject') {
	$school->getSubject();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateSubject') {
	$school->updateSubject();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteSubject') {
	$school->deleteSubject();
}
/********attendance********/
if(!empty($_POST['action']) && $_POST['action'] == 'getStudents') {
	$school->getStudents();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateAttendance') {
	$school->updateAttendance();
}
if(!empty($_POST['action']) && $_POST['action'] == 'attendanceStatus') {
	$school->attendanceStatus();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getStudentsAttendance') {
	$school->getStudentsAttendance();
}

if(!empty($_POST['action']) && $_POST['action'] == 'getTeacherSections') {
	$school->getTeacherSections();
}
?>