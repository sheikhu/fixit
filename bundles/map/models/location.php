<?php

/**
*
*/
class Location extends Elegant
{

	public function report()
	{
		return $this->belongs_to('Report');
	}

}

 ?>