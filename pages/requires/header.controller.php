<?php
	$menu=new DB_MENU();
	$ListOfMenus=$menu->setWheres(array(
		"enable"=>1
	))->setOrderby(array(
		"sort"=>"ASC",
		"title"=>"ASC"
	))->setReturnFields(array(
		"parent_id",
		"title",
		"target_type",
		"target",
		"new_window"
	))->getList()->run();
	
	for($i=0;$i<count($ListOfMenus);$i++){
		$item=$ListOfMenus[$i];
		
		$item['URL']="";
		if($item['target_type']=="External")
			$item['URL']=$item['target'];
		else{
			$page_db=new DB_PAGE();
			$pageDetails=$page_db->setWheres(array(
				"name"=>$item['target']
			))->setReturnFields(array(
				"link_title",
				"custom_url"
			))->getDetails()->run();
			
			if($pageDetails['custom_url']!="")
				$item['URL']=$pageDetails['custom_url'];
			else
				$item['URL']=$page_db->getURLWithTitle($item['target'],$pageDetails['link_title']);
			//$item['PageDetails']=$pageDetails;
		}
		
		
		$item['Active']=0;
		if(Base::getPageName()==$item['target'] )
			$item['Active']=1;
		
		$ListOfMenus[$i]=$item;
	}
	
	Base::setData("_menus",$ListOfMenus);
	
	/*echo "<pre>";
	print_r($ListOfMenus);
	echo "</pre>";
	exit;*/