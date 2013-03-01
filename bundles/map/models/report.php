<?php

/**
*
*/
class Report extends Elegant
{



	public function location()
	{
		return $this->belongs_to('Location');
	}
}
 ?>