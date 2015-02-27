<?php

class JSON_API_Hello_Controller {
	
	public function hello_world() {
		return array(
			"message" => "Hello World"
		);
		
	}
	public function hello_person() {
		    global $json_api;
		    $name = $json_api->query->name;
		    return array(
		      "message" => "Hello, $name."
		);
	  
    }}
	?>