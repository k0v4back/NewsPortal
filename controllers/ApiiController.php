<?php

class ApiiController{
	public function actionIndex(){
		require_once(ROOT.'/views/admin/admin.php');
		return true;
	}
}

?>