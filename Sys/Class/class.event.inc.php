<?php
/**
* Stores event information
*
* PHP version 5
*
* LICENSE: This source file is subject to the MIT License, available
* at http://www.opensource.org/licenses/mit-license.html
*
* @author Jason Lengstorf <jason.lengstorf@ennuidesign.com>
* @copyright 2010 Ennui Design
* @license http://www.opensource.org/licenses/mit-license.html
*/
class Event
{
	public $id;
	public $title;
	public $description;
	public $start;
	public $end;

	public function __construct($event)
	{
		if ( is_array($event) )
		{
			$this->id = $event['event_id'];
			$this->title = $event['event_title'];
			$this->description = $event['event_desc'];
			$this->start = $event['event_start'];
			$this->end = $event['event_end'];
		}
		else
		{
			throw new Exception("No event data was supplied.");
		}
	}
}
?>