<?php

/**
 * @Author: sabuj
 * @Date:   2019-12-27 18:50:30
 * @Last Modified by:   sabuj
 * @Last Modified time: 2019-12-27 21:36:14
 */
/**
 * 
 */
class cssStyle{
	function __construct(){
			
	}
	function style($at,$variable_name){
		$at[$variable_name] = str_replace('`{', '`:{', $at[$variable_name]);
		$at[$variable_name] = str_replace('`', '"', $at[$variable_name]);
		json_decode($at[$variable_name], true);
	}
}

Extra row class 
extra container clss 

	Repiter
client name
client img
client url
client reviwe
client comment 

	setting 
auto play 
dot 
spped 

 style

backgound color or image
dot color  

 echo $item->client_name;
                           echo $item->client_image;
                           echo $item->client_comment;