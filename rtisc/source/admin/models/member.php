<?php
class MemberModel extends Model{
	
	public function Index(){
        $this->query('Select * FROM members ORDER BY user_id DESC');
        $rows = $this->resultSet();
        return $rows;
    }

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO members (fullname, email, password, gender, dor, plan, address, contact) VALUES (:name, :email, :password, :gender, :dor, :plan, :address, :contact)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':gender', $post['gender']);
			$this->bind(':dor', $post['dor']);
			$this->bind(':plan', $post['plan']);
			$this->bind(':address', $post['address']);
			$this->bind(':contact', $post['contact']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'members');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM members WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['member_data'] = array(
					"user_id"	=> $row['user_id'],
					"name"	=> $row['fullname'],
					"email"	=> $row['email'],
				);
				header('Location: '.ROOT_URL.'dashboard');
			} else {
				echo 'Incorrect Login';
			}
		}
		return;
	}
	//update
	public function update(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		if($post['submit']){
		
				$this->query('UPDATE members SET fullname=:name, email=:email, password =:password, gender=:gender, dor=:dor, plan=:plan, address=:address, contact=:contact WHERE user_id=:user_id');
				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);
				$this->bind(':gender', $post['gender']);
				$this->bind(':dor', $post['dor']);
				$this->bind(':plan', $post['plan']);
				$this->bind(':address', $post['address']);
				$this->bind(':contact', $post['contact']);
				$this->execute();
				// Verify
				if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'members');
				}
		}
		return;
}
}
// //update
	














// public function update(){
// 	//same code
// 	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
// 		$password = md5($post['password']);
// 		if($post['submit']){
// 			// update to mysql 
			
// 				// to enter data
// 				$this->query('UPDATE members SET fullname=:name, email=:email, password =:password, gender=:gender, dor=:dor, plan=:plan, address=:address, contact=:contact WHERE user_id=:user_id');
// 				$this->bind(':name', $post['name']);
// 				$this->bind(':email', $post['email']);
// 				$this->bind(':password', $password);
// 				$this->bind(':gender', $post['gender']);
// 				$this->bind(':dor', $post['dor']);
// 				$this->bind(':plan', $post['plan']);
// 				$this->bind(':address', $post['address']);
// 				$this->bind(':contact', $post['contact']);
// 				$this->execute();
// 				// Verify
// 				if($this->lastInsertId()){
// 					// Redirect
// 					header('Location: '.ROOT_URL.'members');
// 				}
// 		}
// 		return;
// }