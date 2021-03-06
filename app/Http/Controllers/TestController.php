<?php namespace App\Http\Controllers;

use Interpro\Answerer\Concept\AnswerListFactory;
use Interpro\QuickStorage\Concept\QueryAgent;

class TestController extends Controller {


	private $queryAgent;
	private  $answer;
	function __construct(QueryAgent $queryAgent, AnswerListFactory $answer){
		$this->queryAgent = $queryAgent;
		$this->answer  = $answer;
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		view()->share('serv',$services);
	}

	public function selectAge(){
		$age = $this->queryAgent->getGroupFlat('testing_block','age',[],[]);
		return view('front.test.select_age',[
			'age' => $age
		]);
	}

	public function getTest($id ){
		$title = $this->queryAgent->getGroupFlat('testing_block','age',[],['age'=>['id' => $id]],[]);
		$test = $this->queryAgent->getGroupFlat('testing_block','anket_item',[],['anket_item'=>['owner_id' => $id]],[]);
		return view('front.test.test',[
			'answers' => $test,
			'test_title' => $title
		]);
	}
	public function getResult($page){
		$params = explode('q', $page);
		$owner_id = (int)(substr($params[0], 1));
		$ans = $this->answer->create($page);
		$test = $this->queryAgent->getGroupFlat('testing_block','anket_item',[],['anket_item'=>['owner_id' => $owner_id]],[]);
		$all_services = $this->queryAgent->getGroupFlat('dom_services','services',[],[]);
		$numbs = [];
		$i = 0;
		$j = 0;
		foreach($test as $item){
			$i++;
			foreach ($ans as $item_ans) {
				$j++;
				if($item_ans->id_field == $item->id_field){
					$numbs[$j] = $i.'.';
				}
			}
			$j = 0;
		}
		if($ans->count() > 0){
			return view('front.test.result',[
				'answers' => $ans,
				'numbs'	  => $numbs,
				'all_services' => $all_services
			]);
		}else{
			return view('front.test.no_result');
		}
	}

}
