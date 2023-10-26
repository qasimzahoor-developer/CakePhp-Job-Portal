<?php
namespace App\View\Helper;
 
use Cake\View\Helper;
 
class SelectHelper extends Helper {
 
 
     
    public function salaryRange()
    {       
        return [1=>'5,000', 2=>'10,000', 3=>'15,000', 4=>'20,000', 5=>'25,000', 6=>'30,000', 7=>'35,000', 8=>'40,000', 9=>'45,000', 10=>'50,000', 11=>'55,000', 12=>'60,000', 13=>'65,000', 14=>'70,000', 15=>'80,000', 16=>'90,000', 17=>'100,000', 18=>'100,000+'];
    }
	
	public function positions()
    {       
        return [1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'10+'];
    }
	public function experience()
    {       
        return [0=>'Fresh', 1=>'1 Year', 2=>'2 Years', 3=>'3 Years', 4=>'4 Years', 5=>'5 Years', 6=>'6 Years', 7=>'7 Years', 8=>'8 Years', 9=>'9 Years', 10=>'10 Years', 11=>'10+ Years'];
    }
	public function gender()
    {       
        return [0=>'No Prefrence', 1=>'Male', 2=>'Female'];
    }
	public function genderProfile()
    {       
        return [0=>'Male', 1=>'Female'];
    }
	public function  maritalStatus()
    {       
        return [0=>'Single', 1=>'Married', 2=>'Divorced', 3=>'Widow'];
    
	}
	public function type()
    {       
        return [0=>'Internship', 1=>'Full Time (Permanent)', 2=>'Part Time', 3=>'Contract'];
    }
	public function shift()
    {       
        return [0=>'First Shift (Morning)', 1=>'Second Shift (Evening)', 2=>'Night Shift', 3=>'Random'];
    }
	public function degreeType()
    {       
        return ['Non-Matriculation', 'Matriculation/O-Level', 'Intermediate/A-Level', 'Bachelors', 'Masters', 'MPhil/MS', 'PHD/Doctorate', 'Certification', 'Diploma', 'Short Course'];
    }
	public function degreeRange()
    {       
        return ['Or Higher', 'Exact Required'];
    }
	public function age()
    {       
        return [1=>'18', 2=>'20', 3=>'22', 4=>'24', 5=>'26', 6=>'28', 7=>'30', 8=>'32', 9=>'34', 10=>'36', 11=>'36+'];
    }
	public function careerLevel()
    {       
        return [1=>'Intern/Student', 2=>'Entry Level', 3=>'Experienced Professional', 4=>'Department Head', 5=>'GM / CEO / Country Head / President'];
    }
	public function coTypes()
    {       
        return [1=>'Private', 2=>'Public', 3=>'Government', 4=>'Semi-Government', 5=>'NGO', 5=>'Other'];
    }
	public function operSince()
    {       
        $arrYear = array();
		$arrYear[1946] = 'Older then 1947';
		for($i = 1947; $i <= date("Y");  $i++){
			$arrYear[$i] = $i;
		}
		return array_reverse($arrYear);
    }
	public function year()
    {       
        $arrYear = array();
		for($i = 1947; $i <= date("Y");  $i++){
			$arrYear[$i] = $i;
		}
		return array_reverse($arrYear);
    }
	public function noEmployees()
    {       
        $arrEmp = array();
		for($i = 1; $i <= 30;  $i++){
			$arrEmp[$i] = (($i*50)-50) .' to '. $i*50;
		}
		$arrEmp[31] =  (($i*50)-50) . '+';
		return $arrEmp;
    }
	public function noOffices()
    {       
        $arrOffices = array();
		for($i = 1; $i <= 20;  $i++){
			$arrOffices[$i] = $i;
		}
		$arrOffices[21] = '21+';
		return array_reverse($arrOffices);
    }
	

}
?>