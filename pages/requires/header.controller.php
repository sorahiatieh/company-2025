<?php
	$menu=new DB_MENU();
	$ListOfMenus=$menu->getListOfSiteMenus()->run();
	/*$ListOfMenus=$menu->setWheres(array(
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
	))->setLimit(0)->getList()->getSQL();*/
	
	$page_db=new DB_PAGE();
	for($i=0;$i<count($ListOfMenus);$i++){
		$item=$ListOfMenus[$i];
		
		$item['URL']="";
		if($item['target_type']=="External")
			$item['URL']=$item['target'];
		else{
			if($item['custom_url']!="")
				$item['URL']=$item['custom_url'];
			else
				$item['URL']=$page_db->getURLWithTitle($item['target'],$item['link_title']);
			
		}
		
		
		$item['Active']=0;
		if(SiteBase::getPageName()==$item['target'] )
			$item['Active']=1;
		
		$ListOfMenus[$i]=$item;
	}
	
	SiteBase::setData("_menus",$ListOfMenus);
	
	/*echo "<pre>";
	print_r($ListOfMenus);
	echo "</pre>";
	exit;*/