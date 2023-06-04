<?php
class UserModel extends Model{
	
	public function Index(){
        $this->query('Select * FROM users ORDER BY id DESC');
        $rows = $this->resultSet();
        return $rows;
    }

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO users (user_name, user_email, user_pass, user_role, user_status) VALUES (:name, :email, :password, :role, :user_status)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':role', $post['role']);
			$this->bind(':user_status', 1);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users');
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
			$this->query('SELECT * FROM users WHERE user_email = :email AND user_pass = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['user_name'],
					"email"	=> $row['user_email'],
					"role"	=> $row['user_role']
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
			// Insert into MySQL
			$this->query('UPDATE users SET user_name=:name, user_email=:email, user_pass=:password, user_role=:role, user_status=:user_status WHERE User_name=:name');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':role', $post['role']);
			$this->bind(':user_status', 1);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users');
			}
		}
		return;
	}
}
