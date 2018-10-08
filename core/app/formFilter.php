<?php
class formFilter{
	
	public static function input_filter($post)
	{
		return !empty($post)? array_map("self::secure_input", $post):null;
	}

	public static function secure_input($data)
	{
		$data = addcslashes($data, '%');
		$data = htmlspecialchars($data);
		return !empty($data) && !intval($data)? htmlspecialchars($data):intval($data);
	}
}