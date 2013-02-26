<?php

/**
*
*/
class Report extends Elegant
{



	public function location()
	{
		return $this->has_one('Location');
	}
}
 ?>