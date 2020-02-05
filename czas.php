<?php
	class czas{
		
		function przyszly($miejsce="Europe/Warsaw",$liczbaDni){//Zwraca przyszły czas.
		if($miejsce!=date_default_timezone_get())
		date_default_timezone_set($miejsce);
		return date("H:i:s d M Y",strtotime("+$liczbaDni days"));
		}
	}
?>