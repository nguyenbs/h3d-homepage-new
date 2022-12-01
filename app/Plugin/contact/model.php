<?php
class Contact extends AppModel
{
	var $name = 'Contact';

	function getPage($page=1,$limit=15,$conditions=array())
	{
		$array= array(
			'limit' => $limit,
			'page' => $page,
			'order' => array('created' => 'desc'),
			'conditions' => $conditions

			);
		return $this -> find('all', $array);             
	}

	function saveContact($fullName,$email,$fone,$title,$content)
	{
		$today= getdate();
		$Contact['Contact']['fullName']= $fullName;
		$Contact['Contact']['email']= $email;
		$Contact['Contact']['fone']= $fone;
		$Contact['Contact']['title']= $title;
		$Contact['Contact']['content']= $content;
		$Contact['Contact']['time']= $today[0];

		$this->save($Contact);
	}

	function getContact($idContact)
	{
		$idContact= new MongoId($idContact);
		$dk = array ('_id' => $idContact);
		$Contact = $this -> find('first', array('conditions' => $dk) );
		return $Contact;

	}

	function deleteContact($idContact)
	{
		$this->delete($idContact);
	}


}
?>