<?php

spl_autoload_register(
	function($classNameNotFound)
	{
	
		/*项目代码存放的物理路径*/
		$baseDir = __DIR__.'\\src\\';
		$prefix = "jixiang\\phplearning\\";	
				/*一般是 公司名\包名, \\是转义符-->\   */
		$len = strlen($prefix);

		/*只有没找到的类是在我们创建的namespace中的才会加载*/
		if(strncmp($prefix,$classNameNotFound,$len)===0)
		{	
			/*jixiang\phplearning\com\BClass ===> com\BClass*/
			$className = substr($classNameNotFound,$len);
			/*windows 是\ back slash 所以不用变*/
			$file = $baseDir.$className.'.php';

			/*Linux 是/ 这样的*/
			//$file = $baseDir.str_replace('\\','/',$className).'.php';
			if(file_exists($file))
			{
				require_once "$file";
			}

		
	}
);