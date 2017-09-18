<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class AdminController extends Controller {

	public function getIndex(QueryAgent $queryAgent){
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/layout',[
			'dom_all_images' => $all_image
		]);
	}

	public function getSlider(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('static_index_page', [], []);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
 		return view('back/blocks/static_index_page',[
			'static_index_page' => $all_site,
			'dom_all_images' => $all_image
		]);
	}
	public function getVideo(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('dom_videos', ['videos' => ['sorter' => 'DESC']], []);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/dom_videos',[
			'dom_videos' => $all_site,
			'dom_all_images' => $all_image
		]);
	}
	public function getSpecial(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('dom_specials', ['special_offers' => ['sorter'=> 'ASC']], []);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/dom_specials',[
			'dom_specials' => $all_site,
			'dom_all_images' => $all_image
		]);
	}






	public function getSpec(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_spec',[],[]);
		$dom_spec = $queryAgent->getBlock('dom_specialists',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_spec',[
			'static_spec' 		=> $spec,
			'dom_specialists'	=> $dom_spec,
			'dom_all_images' => $all_image
		]);
	}
	public function getService(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_services',[],[]);
		$dom  = $queryAgent->getBlock('dom_services',['serv_category' => ['sorter' => 'ASC']],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_services',[
			'static_services' => $spec,
			'dom_services'    => $dom,
			'dom_all_images' => $all_image
		]);
	}
	public function getTechno(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_technology',[],[]);
		$dom = $queryAgent->getBlock('dom_technologys',['technologys'=>['sorter'=> 'ASC']],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_technology',[
			'static_technology' => $spec,
			'dom_technologys'   => $dom,
			'dom_all_images' => $all_image
		]);
	}
	public function getPoleznoe(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_poleznoe',[],[]);
		$dom = $queryAgent->getBlock('dom_poleznoe',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_poleznoe',[
			'static_poleznoe' => $spec,
			'dom_poleznoe'    => $dom,
			'dom_all_images' => $all_image
		]);
	}
	public function getProblems(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('dom_problems',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/dom_problems',[
			'dom_problems' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function getNews(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_news',[],[]);
		$dom  = $queryAgent->getBlock('dom_news',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_news',[
			'static_news' => $spec,
			'dom_news'    => $dom,
			'dom_all_images' => $all_image
		]);
	}
	public function getContacts(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_contacts',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_contacts',[
			'static_contacts' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function getAbout(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_about',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_about',[
			'static_about' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function getQuestions(QueryAgent $queryAgent){
		$spec = $queryAgent->getBlock('static_questions',[],[]);
		$dom = $queryAgent->getBlock('dom_questions',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/static_questions',[
			'static_questions' => $spec,
			'dom_questions'    => $dom,
			'dom_all_images'   => $all_image
		]);
	}








	public function editCategory(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_services', 'serv_category', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_services/serv_category_edit',[
			'item_serv_category' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function editService(QueryAgent $queryAgent, $id){
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		$spec = $queryAgent->getGroupItem('dom_services', 'services', $id);
		return view('back/blocks/groupitems/dom_services/services_edit',[
			'item_services' => $spec,
			'dom_all_images' => $all_image
		]);
	}


	public function editTechnology(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_technologys', 'technologys', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_technologys/technologys_edit',[
			'item_technologys' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function editSpec(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_specialists', 'specs', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_specialists/specs_edit',[
			'item_specs' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function editNews(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_news', 'news', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		return view('back/blocks/groupitems/dom_news/news_edit',[
			'item_news' => $spec,
			'serv'		=> $services,
			'dom_all_images' => $all_image
		]);
	}
	public function editPoleznoe(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_poleznoe', 'poleznoe', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_poleznoe/poleznoe_edit',[
			'item_poleznoe' => $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function editProblems(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_problems', 'problems', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_problems/problems_edit',[
			'item_problems' => $spec,
			'dom_all_images' => $all_image
		]);
	}

	public function editQuestions(QueryAgent $queryAgent, $id){
		$quest = $queryAgent->getGroupItem('dom_questions', 'question', $id);
		$spec  = $queryAgent->getGroupFlat('dom_specialists', 'specs',[],[]);
		$problem  = $queryAgent->getGroupFlat('dom_problems', 'problems',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_questions/question_edit',[
			'item_question' => $quest,
			'problem'        => $problem,
			'spec'			=> $spec,
			'dom_all_images' => $all_image
		]);
	}
	public function editSpecial(QueryAgent $queryAgent, $id){
		$spec = $queryAgent->getGroupItem('dom_specials', 'special_offers', $id);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/dom_specials/special_offers_edit',[
			'item_special_offers' => $spec,
			'dom_all_images' => $all_image
		]);
	}




	public function getPopups(QueryAgent $queryAgent){
		$popups_msg = $queryAgent->getBlock('fidback',[],[]);
		$services   = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/fidback/fidback',[
			'popups' => $popups_msg,
			'serv' 	=> $services,
			'dom_all_images' => $all_image
		]);
	}




	public function getAge(QueryAgent $queryAgent){
		$age = $queryAgent->getBlock('testing_block',[],[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/testing_block',[
			'testing_block' => $age,
			'dom_all_images' => $all_image
		]);
	}
	public function editAge(QueryAgent $queryAgent, $id){
		$age = $queryAgent->getGroupItem('testing_block','age',$id,[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		return view('back/blocks/groupitems/testing_block/age_edit',[
			'item_age' => $age,
			'dom_all_images' => $all_image
		]);
	}
	public function editQuest(QueryAgent $queryAgent, $id){
		$age = $queryAgent->getGroupItem('testing_block','anket_item',$id,[],[]);
		$all_image = $queryAgent->getBlock('dom_all_images', [], []);
		$all_services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		return view('back/blocks/groupitems/testing_block/anket_item_edit',[
			'item_anket_item' => $age,
			'dom_all_images' => $all_image,
			'all_services'	 => $all_services
		]);
	}


}
