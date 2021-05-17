<?php

class DoctorTest extends \PHPUnit\Framework\TestCase
{
	
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\Doctor;

		$user->setName('Muhammad Ibrahim');

		$this->assertEquals($user->getName(), 'Muhammad Ibrahim');
	}

    

    public function testRoomNo()
	{
		$user = new \App\Models\Doctor;

		$user->setRoomNo('50');

		$this->assertEquals($user->getRoomNo(), '50');
	}

    public function testDoctorID()
	{
		$user = new \App\Models\Doctor;

		$user->setDoctorID(181);

		$this->assertEquals($user->getDoctorID(), 181);

		
	}

	public function testDoctorSpeciality()
	{
		$user = new \App\Models\Doctor;

		$user->setDoctorSpeciality('Eye Specialist');

		$this->assertEquals($user->getDoctorSpeciality(), 'Eye Specialist');
	}

}
