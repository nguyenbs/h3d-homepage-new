<?php 
function addTeam($input){
	global $modelOption;
	global $isRequestPost;
	global $urlPlugins;

	if(checkAdminLogin()){
        $modelOurTeam = new ourTeam();
        $dataSend = arrayMap($input['request']->data);
		if(!empty($_GET['idEdit'])){
            $idEdit= new MongoId($_GET['idEdit']);
            $dataEdit = $modelOurTeam->find('first', array('conditions' =>  array ('_id' => $idEdit)) );
			setVariable('dataEdit',$dataEdit);
		}
        if ($isRequestPost) {
            $modelOurTeam->create();
            if(isset($_GET['idEdit'])){
                $idEdit = new MongoId($_GET['idEdit']);
                $dataOld = $modelOurTeam->find('first', array('conditions' =>  array ('_id' => $idEdit)) );
                $dataOld['ourTeam']['_id'] = $idEdit;
                $dataOld['ourTeam']['name'] = $dataSend['name'];
                $dataOld['ourTeam']['position'] = $dataSend['position'];
                $dataOld['ourTeam']['avatar'] = $dataSend['avatar'];
                $modelOurTeam->save($dataOld);
                $modelOurTeam->redirect($urlPlugins.'admin/ourTeam-admin-listTeam.php?status=1');
            }else{
                $save['_id']= new MongoId();
                $save['name'] = $dataSend['name'];
                $save['position'] = $dataSend['position'];
                $save['avatar'] = $dataSend['avatar'];
                $modelOurTeam->save($save);
                $modelOurTeam->redirect($urlPlugins.'admin/ourTeam-admin-listTeam.php?status=1');
            }

        }
	}
}
function listTeam(){
	global $urlHomes;
	global $modelOption;
    global $isRequestPost;
    global $urlPlugins;
	if(checkAdminLogin()){
        $modelOurTeam = new ourTeam();
        $listData = $modelOurTeam->find('all');
        if ($isRequestPost) {
            $modelOurTeam->create();
            $idEdit = new MongoId($_POST['idOurTeam']);
            $dataOld = $modelOurTeam->find('first', array('conditions' =>  array ('_id' => $idEdit)) );
            $dataOld['ourTeam']['_id'] = $idEdit;
            $dataOld['ourTeam']['sort'] = $_POST['sort'];
            $modelOurTeam->save($dataOld);
            $modelOurTeam->redirect($urlPlugins.'admin/ourTeam-admin-listTeam.php?status=1');
        }
		setVariable('listData',$listData);
	}else{
		$modelOption->redirect($urlHomes);
	}
}
function deleteTeam(){
	global $urlPlugins;
	global $urlHomes;
    $modelOurTeam = new ourTeam();

    if(checkAdminLogin()){
        if($_GET['idDelete'])
		{
			$idDelete = new MongoId($_GET['idDelete']);
            $modelOurTeam->delete($idDelete);
		}
        $modelOurTeam->redirect($urlPlugins.'admin/ourTeam-admin-listTeam.php?code=1');
	}else{
        $modelOurTeam->redirect($urlHomes);
	}
}
?>