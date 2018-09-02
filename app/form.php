<?php
class Form{

	public static function input($type,$name,$placeholder=null){
		return "<input type='$type' name='$name' placeholder='$placeholder'>";
	}

	public static function text($name,$placeholder=null){
		return "<textarea name='$name' placeholder='$placeholder'>$content</textarea>";
	}
}