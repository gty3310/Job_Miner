<html>
 <head></head>
 <body>
 <?php
 $job_description = $_GET ['pasted_job_description'];
 $skills = $_Get ['skills_list'];
 $compatibility = 0;
 $number_of_skill = count($skills);

 foreach ($skills as $skill) {
 	$pos = strpos ($job_description, $skill);
 	if ($pos !== false) {
 		$compatibility ++; 
 	}
 	else {
 		$compatibility + 0;
 	}
 }
 function compatibility(){
 	if (compatibility >= ($number_of_skill / 2)) {
 		echo 'You have enough skills to apply for this job.';
 	}
 	else {
 		echo 'You hav less than have the skills needed for this job';
 	}
  }
 ?>
 </body>
</html>
