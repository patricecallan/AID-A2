<?php

//Function to escape output
function escapeOutput($string){
	//String, double and single quotes,character encoding
	return htmlentities($string,ENT_QUOTES,'UTF-8');
}
