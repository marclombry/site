<?php
class Nav{
	/**
	* link's array for nav html
	*@param array
	*/
	//public $link =[];
	public static $error;
	public static $content;

	public static function Create($link,$search=null)
	{
		if(!is_array($link)){
			self::$error='<div class="warning">Une erreur est survenue</div>';
		}

		if(empty(self::$error)){
			self::$content='<ul>';
			foreach ($link as $name=> $href) {
				self::$content.='<li><a href="'.$href.'">'.$name.'</a></li>';
			}	
			self::$content.='</ul>';

			if(isset($search)){
				self::$content.='<form method="POST" action ="#">
					<label for="search"><input type="search" class ="search" id="search" name="search" placeholder="recherchez..."></label>
					<input type="submit" class="research" id="research" value="research">
				</form>';
			}

			return self::$content;
		}
	}
}