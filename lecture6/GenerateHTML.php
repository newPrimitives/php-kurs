<?php

class makeHTML
{

	public function makeH1($item)
	{
		return "<h1> $item </h1> \n"; 
	}


	public function makeList($items) 
	{	

		$result = '<ul>';
		
		foreach ($items as $item)
		{
			$result .= '<li> <a href="' . $item . '" target="_blank"> '. $item .' </a> </li>';
		}

		$result .= '</ul>';	

		return $result;
	}

 
	public function makeDropDownList($items) 
	{
		$result = '<select>';
			
		foreach($items as $item) {
				$result .= '<option value='. $item.'>'. $item.'</option>';
		}

		$result .= '</select>';

		return $result;
	}

}

$html = new makeHTML();
//echo $html->makeH1('Hello world');
//
echo $html->makeDropDownList(array('param1', 'param2', 'param3'));

