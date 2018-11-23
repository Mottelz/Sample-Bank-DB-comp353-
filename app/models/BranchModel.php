<?php

class BranchModel extends Model
{
	public $table = 'Branch';
	public $branches;

	public function getAllBranches() {
	    return $this->getData("SELECT * FROM Branch");
    }

    public function getBranchById($id) {
        return $this->getData("SELECT * FROM Branch WHERE branch_id=" . $id);
    }

    public function getBranchByManagerId($id) {
        return $this->getData("SELECT * FROM Branch WHERE manager_id=" . $id);
    }

	private $data = 
	'{
		"Branch" : [{
			"branch_id" : "1",
			"opening_date" : "2018-01-11",
			"street_address" : "Address1",
			"manager_id" : "1",
			"phone" : "1111111111",
			"fax" : "1111111111"
		}, {
			"branch_id" : "2",
			"opening_date" : "2018-02-12",
			"street_address" : "Address2",
			"manager_id" : "2",
			"phone" : "2222222222",
			"fax" : "2222222222"
		}, {
			"branch_id" : "3",
			"opening_date" : "2018-03-13",
			"street_address" : "Address3",
			"manager_id" : "3",
			"phone" : "3333333333",
			"fax" : "3333333333"
		}]
	}';

	function __construct()
	{
		$this->branches = json_decode($this->data)->Branch;
	}
}

?>