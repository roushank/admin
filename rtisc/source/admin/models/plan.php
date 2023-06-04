<?php
class PlanModel extends Model{
	
	public function Index(){
        $this->query('Select * FROM plan ORDER BY id DESC');
        $rows = $this->resultSet();
        return $rows;
    }

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO plan (plan_name, plan_amount, plan_duration) VALUES (:name, :amount, :duration)');
			$this->bind(':name', $post['plan_name']);
			$this->bind(':amount', $post['plan_amount']);
			$this->bind(':duration', $post['plan_duration']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'plan');
			}
		}
		return;
	}
}