<?php

function get_conn() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "preguntas";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function get_elements($sql){
	$conn = get_conn();
	$result = mysqli_query($conn, $sql);
	$elements = [];
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$elements[] = $row;
		}
	} 
	mysqli_close($conn);
	return $elements;
}

function get_element($sql){
	$conn = get_conn();
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			mysqli_close($conn);
			return $row;
		}
	} 
	mysqli_close($conn);
	return NULL;
}

function insert_element($sql){
	$conn = get_conn();
	if (mysqli_query($conn, $sql)){
		mysqli_close($conn);
		return TRUE;
	} else {
		mysqli_close($conn);
		return FALSE;
	}
}

function update_element($sql){
	$conn = get_conn();
	if (mysqli_query($conn, $sql)){
		mysqli_close($conn);
		return TRUE;
	} else {
		mysqli_close($conn);
		return FALSE;
	}
}