<?php
class UserRecord extends AppModel
{
	var $name = 'UserRecord';
	var $helpers = array('Session', 'Paginator');
	var $paginate = array();

	function getPage($page=1,$limit=15,$conditions=array(),$order=array('created' => 'desc'))
	{
		$array= array(
			'limit' => $limit,
			'page' => $page,
			'order' => $order,
			'conditions' => $conditions
		);
		return $this -> find('all', $array);
	}

	function getAllRecords() {
        return $this -> find('all');
	}

	function getUserRecord($id){
		$id= new MongoId($id);
		$dk = array ('_id' => $id);
		$return = $this -> find('first', array('conditions' => $dk) );
		return $return;
	}

}
?>
