<?php
namespace Data;

class Reservation
{
	private $startDate;
	private $endDate;
	private $guest;
	
	function __construct($startDate, $endDate, guest $guest)
	{
		$this->__set($startDate, $startDate);
		$this->__set($endDate, $endDate);
		$this->__set($guest, $guest);
	}

	public function __set($fieldName, $value)
	{
		$this->$fieldName = $value;
	}

	public function __get($fieldName)
	{
		return $this->$fieldName;
	}

	public function __toString()
	{
		$reservationToString = "$this->__get($guest) from $this->__get($startDate) to $this->__get($endDate)";

		return $reservationToString;
	}
}
?>