<?php

function calculate_points($info) {

	$points = 0;

	switch ($info['activity']) {

		case '1':
		case '2':
			$points = 60;
			break;

		case '3':
		case '4':

			switch ($info['level']) {
				case '1':
					$points = 8;
					break;
				case '2':
					$points = 15;
					break;
				case '3':
					$points = 25;
					break;
				case '4':
					$points = 40;
					break;	
				case '5':
					$points = 60;
					break;			
				default:
					$points = 8;
					break;
			}

			switch ($info['prize']) {

				case '1':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 20;
					else					
						$points += 10;
					break;

				case '2':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 16;
					else					
						$points += 8;
					break;

				case '3':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 12;
					else					
						$points += 5;
					break;

				default:
					break;
			}

			break;

		case '5':
		case '6':
		case '7':

			switch ($info['level']) {
				case '1':
					$points = 8;
					break;
				case '2':
					$points = 12;
					break;
				case '3':
					$points = 20;
					break;
				case '4':
					$points = 40;
					break;	
				case '5':
					$points = 60;
					break;			
				default:
					$points = 8;
					break;

			}

			switch ($info['prize']) {

				case '1':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 20;
					else					
						$points += 10;
					break;

				case '2':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 16;
					else					
						$points += 8;
					break;

				case '3':
					if ($info['level'] == '4' || $info['level'] == '5') 
						$points += 12;
					else					
						$points += 5;
					break;

				default:
					break;
			}

			break;

		case '8':
			switch ($info['level']) {
				case '1':
					$points = 10;
					break;
				case '2':
					$points = 20;
					break;
				case '3':
					$points = 30;
					break;
				case '4':
					$points = 40;
					break;	
				case '5':
					$points = 50;
					break;			
				default:
					$points = 10;
					break;
			}
			break;

		case '9':
			$points = 50;
			break;

		case '10':
			switch ($info['level']) {
				case '1':
					$points = 10;
					break;
				case '2':
					$points = 20;
					break;
				case '3':
					$points = 30;
					break;
				case '4':
					$points = 40;
					break;	
				case '5':
					$points = 50;
					break;			
				default:
					$points = 10;
					break;
			}
			break;

		case '11':
			$points = 15;
			break;

		case '11a':
			$points = 6;
			break;

		case '12':
			$points = 20;
			break;

		case '12a':
			$points = 8;
			break;

		case '13':
			$points = 10;
			break;

		case '13a':
			$points = 4;
			break;

		case '14':
			$points = 20;
			break;

		case '15':
			$points = 5;
			break;

		case '16':
			$points = 50;
			break;

		case '17':
			$points = 60;
			break;

		case '18':
			$points = 30;
			break;
		
		case '19':
			$points = 35;
			break;
		
		case '20':
			$points = 50;
			break;
		
		case '21':
			$points = 80;
			break;
		
		case '22':
		case '23':
		case '24':
			$points = 60;
			break;

		case '25':
		case '26':
			$points = 80;
			break;

		case '27':
			$points = 50;
			break;

		case '28':
		case '29':
		case '30':
		case '31':
			switch ($info['involvement']) {
				case '1':
					$points = 15;
					break;
				case '2':
					$points = 10;
					break;
				case '3':
					$points = 5;
					break;				
				default:
					$points = 5;
					break;
			}
			break;

		case '32':
			switch ($info['involvement']) {
				case '1':
					$points = 30;
					break;
				case '2':
					$points = 25;
					break;
				case '3':
					$points = 15;
					break;				
				default:
					$points = 15;
					break;
			}
			break;
				
		default:
			$points = 0;
			break;

	}

	return $points;

}

function return_activity($activity) {

	switch ($activity) {

		case '1':
			return "N C C";

		case '2':
			return "N S S";

		case '3':
			return "Sports";

		case '4':
			return "Games";

		case '5':
			return "Music";

		case '6':
			return "Performing Arts";

		case '7':
			return "Literary arts";

		case '8':
			return "Tech Fest, Tech Quiz";

		case '9':
			return "MOOC with final assessment certificate";

		case '10':
			return "Competition conducted by Professional Societies - (IEEE, IET, ASME, SAE, NASA etc.)";

		case '11':
			return "Conference/Seminars/Exhibitions/Workshop/ STTP conducted at IITs /NITs";

		case '11a':
			return "Conference/Seminars/Exhibitions/Workshop/ STTP conducted at KTU or its affiliated institutes";

		case '12':
			return "Paper presentation/publication at IITs/NITs";

		case '12a':
			return "Paper presentation/publication at KTU or its affiliated institutes";

		case '13':
			return "Poster Presentation at IITs /NITs";

		case '13a':
			return "Poster Presentation at KTU or its affiliated institutes";

		case '14':
			return "Industrial Training/Internship";

		case '15':
			return "Industrial/Exhibition visits";

		case '16':
			return "Foreign Language Skill(TOEFL/IELTS/ BEC examsetc.)";

		case '17':
			return "Start-up Company –Registered legally";

		case '18':
			return "Patent - Filed";

		case '19':
			return "Patent - Published";

		case '20':
			return "Patent- Approved";

		case '21':
			return "Patent- Licensed";

		case '22':
			return "Prototype developed and tested";

		case '23':
			return "Awards for Products developed";

		case '24':
			return "Innovative technologies developed and used by industries/users";

		case '25':
			return "Venture capital funding for innovative ideas/products";

		case '26':
			return "Startup Employment";

		case '27':
			return "Societal innovations";

		case '28':

			return "Student Professional Societies (IEEE, IET, ASME, SAE, NASA etc.)";

		case '29':
			return "College Association Chapters(Mechanical, Civil, Electrical etc.)";

		case '30':
			return "Festival & Technical Events(College approved)";

		case '31':
			return "Hobby Club";

		case '32':
			return "Elected student representatives";
			
		default:
			return "Unknown Activity";
			break;

	}

}


class AddModel extends Model {

	public function Index() {

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']) {

			$target_dir = SITE_ROOT . "/assets/Documents/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$file_link = "assets/Documents/" . basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			$file_type =$_FILES['fileToUpload']['type'];

			//$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

			if (file_exists($target_file)) {
				Messages::setMsg("Please rename your file", 'error');
				return;
			    $uploadOk = 0;
			}

		    if($file_type !== false) {
		        $uploadOk = 1;
		    } else {
		        Messages::setMsg("File is not an image", 'error');
		        return;
		        $uploadOk = 0;
		    }

		    if ($_FILES["fileToUpload"]["size"] > 1000000) {
		    	Messages::setMsg("Sorry, your file is too large", 'error');
		    	return;
			    $uploadOk = 0;
			}

			if($file_type != "application/pdf" && $file_type != "image/png" && $file_type != "image/jpeg" && $file_type != "image/jpg") {
				Messages::setMsg("Sorry, only JPG, JPEG & PNG files are allowed.", 'error');
				return;
			    $uploadOk = 0;
			}

			/*

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
				Messages::setMsg("Sorry, only JPG, JPEG & PNG files are allowed.", 'error');
				return;
			    $uploadOk = 0;
			}

			*/
			
			if ($uploadOk == 0) {
			    Messages::setMsg("Sorry, your file cannot be uploaded", 'error');
			    return;
			} 

			else {

			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } 

			    else {			    	
			    	Messages::setMsg("Sorry, there was an error uploading your file", 'error');
			    	$uploadOk = 0;
			    	return;
			    }
			}

			if ($uploadOk != 0) {

				$this->query('INSERT INTO PointsTable (Activity, Level, Prize, Involvement, Notes, Points, Document, Approved, Year, User) VALUES (:activity, :level, :prize, :involvement, :notes, :points, :document, :approval, :year, :user)');

				$this->bind(':activity', return_activity($post['activity']));
				$this->bind(':level', $post['level']);
				$this->bind(':prize', $post['prize']);
				$this->bind(':involvement', $post['involvement']);
				$this->bind(':notes', $post['notes']);
				$this->bind(':points', calculate_points($post));
				$this->bind(':document', $file_link); 
				$this->bind(':approval', 0);
				$this->bind(':year', $post['year']);
				$this->bind(':user', $_SESSION['user']);
				$this->execute();

				if($this->lastInsertId()) {
					header('Location: '.ROOT_URL.'?controller=home');
				}
				else {
					Messages::setMsg("Database Error", 'error');
					return;
				}

			}

		}

		return;

	}

}