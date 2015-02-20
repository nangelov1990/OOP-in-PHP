<?php
namespace Data;

require_once("/HotelEsception/EHotelException.php");
use HotelException;

class Guest
{
	// $private $firstName;
	// $private $lastName;
	private $name = ['firstName', 'lastName'];
    private $nameFields = [];
	private $id;
	
	function __construct($firstName, $lastName, $id)
	{
		$this->setName($firstName);
		$this->setName($lastName);
		$this->id = $id;
	}

	public function setName($value)
	{
		if (is_string($value)) {
		 	if (in_array($value, $this->name)) {
				$this->nameFields[$value];
			} else {
				throw new EStringException($value);
			}
		} else {
			throw new Exception("Invalid name property!", 4);
		}
	}

	public function getName($value)
	{
		if (in_array($value, $this->name)) {
			return $this->nameFields[$value];
		} else {
			throw new Exception("Invalid name property!", 4);
			
		}
	}

	public function setId($value)
	{
		if (is_numeric($value))) {
			$this->id = $value;
		} else {
			throw new ENumericException($value);
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function __toString()
	{
		$guestToString = "$getName($firstName) $getName($lastName)";

		return $guestToString;
	}
}

?>