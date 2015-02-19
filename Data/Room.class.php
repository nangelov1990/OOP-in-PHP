<?php
namespace Data

require_once("/Interface/iReservable.php");
require_once("/Enumeration/Enumeration.php");
use Interface;
use Enumeration;

class Room implements iReservable
{
	protected $roomType;
	protected $hasRestroom;
	protected $hasBalcony;
	protected $bedCount;
	protected $roomNumber;
	protected $extras;
	protected $price;

	protected $reservations = [];

	function __construct(
		roomType $roomType,
		$hasRestroom,
		$hasBalcony,
		$bedCount,
		$roomNumber,
		$extras = [],
		$price)
	{
		$this->__set($roomType, $roomType);
		$this->__set($hasRestroom, $hasRestroom);
		$this->__set($hasBalcony, $hasBalcony);
		$this->__set($bedCount, $bedCount);
		$this->__set($roomNumber, $roomNumber);
		$this->__set($extras, $extras);
		$this->__set($price, $price);
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
		$roomToString = "Room $this->__get($roomNumber)";

		return $roomToString;
	}
}

?>