<?php
namespace HotelException;

class EReservationException extends Exception
{
	function __construct($paramName) {
		parent::__construct("Reservation already exists in this period: $paramName->startDate - $paramName->endDate", 1)
	}
}

class EStringException extends Exception
{
	function __construct($paramName) {
		parent::__construct("Not a string: $paramName", 2)
	}
}

class ENumericException extends Exception
{
	function __construct($paramName) {
		parent::__construct("Not a number: $paramName", 3)
	}
}

?>