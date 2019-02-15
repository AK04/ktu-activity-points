<?php

class SuperadminModel extends Model {

	public function Index() {
		return;
	}

	
	public function advisorCreation() {
		
/*		var_dump($_SESSION);
			die();
	*/
		if ($_SESSION['admin'] != 2) {
			header('Location: '.ROOT_URL);
		}
	
		$post  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if ($post['submit'] == "Submit") {
		$this->query('SELECT * FROM Admins where username=:username');
		$this->bind(':username', $post['username']);
		$this->execute();
		$row = $this->single();
		if($row)
		{
        Messages::setMsg('User already exists', 'error');
    //    header('Location: '. ROOTPATH . '?controller=sadmin');		
		}
		else {
		$this->query('INSERT INTO Admins (username, password, class) VALUES (:username , :password, :Class); ');
		$this->bind(':username', $post['username']);
		$this->bind(':password', md5($post['password']));
		$this->bind(':Class', $post['cls']);
		$this->execute();
		
			header('Location: '. ROOTPATH . '?controller=sadmin');

}			return;
	}
	
}

}