<?php

namespace App\Models;

class Doctor
{
	public $name;

	public $room;

	public $docID;

	public $doc_sp;

    public function setName($Name)
	{
		$this->name = trim($Name);

	}

    public function getName()
	{
		return $this->name;
	}


    public function setRoomNo($room_)
	{
		$this->room = $room_;

	}

	public function getRoomNo()
	{
		return $this->room;
	}

    public function setDoctorID($docID_)
	{
		$this->docID = $docID_;
	}

	public function getDoctorID()
	{
		return $this->docID;
	}

	public function setDoctorSpeciality($doc_sp_)
	{
		$this->doc_sp = $doc_sp_;

	}

	public function getDoctorSpeciality()
	{
		return $this->doc_sp;
	}



}