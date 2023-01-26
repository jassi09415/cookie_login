
<?php
/**
* 
*/
class Helper extends Connection
{
	
	private $table;

	// Insert Data
	public function insert_data($Data_array){
		$this->table=$Data_array['table_name'];
		return $this->save_data($Data_array[0]);
	}
	
	private function save_data($data){
		$sql="INSERT INTO `".$this->table."` (";
		$values=") VALUES (";
		$i=0;
		foreach($data as $field=>$val){
			if($i>0){
				$sql.=", ";
				$values.=", ";
			}
			$sql.="`".$field."`";
			$values.="'".$val."'";
			$i++;
		}
		$sql.=$values.")";
		//return $sql;
		$res=mysqli_query($this->con,$sql);
		return $res;
	}

	// View Data
	public function view_data($Data_array){
		$this->table=$Data_array['table_name'];
		$src="SELECT * FROM `".$this->table."`";
		$rs=mysqli_query($this->con,$src)or die(mysqli_error($this->con));
		return $rs;
	}
}

?>