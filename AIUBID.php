<?php 
//Author Rifat,Ahmed Habibullah
//AIUBID GENERATOR version 1.4.7
class AIUBID {
    private $aiubid;
	private $idgenerated;
	private $regex='/^[0-9][0-9]-[0-9]{5}-[1-3]$/';
	
	public function __construct(){
        $this->aiubId = '';
        $this->idgenerated = '';
    }

	public function getAiubid($size) 
  {
	$keys=range('0','9');
	$keysemester=range('1','3');
	for ($i = 0; $i < $size; $i++) {
	     if($i==2 || $i==8)
		 {
		 $this->aiubId .='-';
		 continue;
		 }
		 if($i>8)
		 {
			$this->aiubId .= $keysemester[array_rand($keysemester)];
		 }
		 else
		 {
		    $this->aiubId .= $keys[array_rand($keys)];
		 }
	}
    return $this->aiubId;
  }
  
	  public function generateAiubId($charnumber)
  {
		
		$this->idgenerated = $this->getAiubid($charnumber);
		if(preg_match($this->regex, $this->idgenerated)) {
		  return $this->idgenerated;
		}
		else
		{
		  echo "there was an problem";
		}
  }

}