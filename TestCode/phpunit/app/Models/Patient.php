<?php

namespace App\Models;

class Patient
{
	public $name;

    public $gender;

	public $age;

	public $birthDate;

	public $appDate;



    public function setName($Name)
	{
		$this->name = trim($Name);

	}

    public function getName()
	{
		return $this->name;
	}

    public function setGender($gender_)
	{
		$this->gender = $gender_;

	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setAge($age_)
	{
		$this->age = $age_;
	}

	public function getAge()
	{
		return $this->age;

    }

    public function setAppointment($appDate)
    {
        $this->appDate = $appDate;
    }

    public function getAppointment()
    {
        return $this->appDate;
    }

	public function setPatientBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getPatientBirthDate()
    {
        return $this->birthDate;
    }

}
