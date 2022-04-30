<?php
 require_DIR_ .'Db1.php'
 class AppointmentTest extends \PHPUnit\Framework\TestCase
 {
     protected $appointments;

     public function setUp():void
    {
            $this->appointment=new\app\models\Appointment;
            $this->patient=new\app\models\patient;

    }
    protected function tearDown(): void 
    {
        parent::tearDown()
        unset($this-> appointment);
    }
    public function testsend();
    {
        $this->assertEquals($this->appointment->("tamjid","4066","123456","help doctor","Dr.ali"),"appointment not sent");
    }
public function testloadPatientSentAppointment(){
    $dbMock=$this->getMockBuilder(Database::class)
                ->setMethod(['fetch'])
                ->getMock();

    $patient='tamjid';
    $dbMock->method('fetch')->willReturn($patient);
    
    $this->assertEquals($this->appointment->loadPatientSentAppointments(),"Patient sent appointment");

    }
    public function testloadPatientRepliedAppointment(){
        $dbMock=$this->getMockBuilder(Database::class)
                ->setMethod(['fetch'])
                ->getMock();
                $patient='tamjid';
                $dbMOck->method('fetch')->willReturn($patient);

                $this->assertEquals($this->appointment->loadPatientRepliedAppointment(),"Patient replied appointment");
            
    }


 }
 
 ?>