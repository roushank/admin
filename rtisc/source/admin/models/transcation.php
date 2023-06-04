<?php
class TranscationModel extends Model{
    public function Index(){
        $this->query('Select * FROM orders WHERE ystatus = "Transaction authorised successfully" ORDER BY id DESC');
        $rows = $this->resultSet();
        return $rows;
    }
}