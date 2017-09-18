<?php namespace App\Http\Controllers;

use App\raiting;
use Interpro\QuickStorage\Concept\QueryAgent;

class FrontController extends Controller {


	public function getIndex(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('static_index_page', [], []);
		$video	  = $queryAgent->getBlock('dom_videos', ['videos' => ['sorter' => 'DESC']], []);
		$popular  = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$problems = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);

		$services = $queryAgent->getGroupFlat('dom_services','serv_category',[],[]);
		return view('front/index/index',[
			'static_index_page' => $all_site,
			'popular'           => $popular,
			'problems'          => $problems,
			'video'            	=> $video,
			'special'			=> $special,
			'serv'              => $services
		]);
	}
    public function getVideos(QueryAgent $queryAgent ){
        $all_site = $queryAgent->getBlock('static_index_page', [], []);
        $video	  = $queryAgent->getBlock('dom_videos', ['videos' => ['sorter' => 'DESC']], []);
        return view('front/video/video',[
            'static_index_page' => $all_site,
            'video'           => $video,
        ]);
    }
	public function getTitle(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('static_index_page', [], []);
		$video	  = $queryAgent->getBlock('dom_videos', ['videos' => ['sorter' => 'DESC']], []);
		$popular  = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$problems = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);

		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		return view('front/index/title',[
			'static_index_page' => $all_site,
			'popular'           => $popular,
			'problems'          => $problems,
			'video'            	=> $video,
			'special'			=> $special,
			'serv'              => $services
		]);
	}
	public function getNoTitle(QueryAgent $queryAgent ){
		$all_site = $queryAgent->getBlock('static_index_page', [], []);
		$video	  = $queryAgent->getBlock('dom_videos', ['videos' => ['sorter' => 'DESC']], []);
		$popular  = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$problems = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);

		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		return view('front/index/no-title',[
			'static_index_page' => $all_site,
			'popular'           => $popular,
			'problems'          => $problems,
			'video'            	=> $video,
			'special'			=> $special,
			'serv'              => $services
		]);
	}




	public function getAbout(QueryAgent $queryAgent ){
		$st_spec = $queryAgent->getBlock('static_about',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/about/about',[
			'about'  => $st_spec,
			'serv'              => $services,
		]);
	}

	public function getProblems(QueryAgent $queryAgent,$slug ){
		$problems = $queryAgent->getGroupItemBySlug('dom_problems','problems',$slug);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/problems/problem',[
			'problems'          => $problems,
			'special'			=> $special,
			'serv'              => $services
		]);
	}


	public function getSpecialists(QueryAgent $queryAgent ){
		$st_spec = $queryAgent->getBlock('static_spec',[],[]);
		$spec = $queryAgent->getGroupFlat('dom_specialists', 'specs', [], []);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/specialists/specialists',[
			'static_spec' 		=> $st_spec,
			'specs'				=> $spec,
			'special'			=> $special,
			'serv'              => $services
		]);
	}
	public function getSpecialist(QueryAgent $queryAgent, $slug ){
		$spec = $queryAgent->getGroupItemBySlug('dom_specialists','specs',$slug);
		$all_spec = $queryAgent->getGroupFlat('dom_specialists','specs',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/specialists/specialist',[
			'spec' 		=> $spec,
			'all_spec'  => $all_spec,
			'special'			=> $special,
			'serv'              => $services
		]);
	}

	public function getServices(QueryAgent $queryAgent ){
		$st_spec = $queryAgent->getBlock('static_services',[],[]);

		$dom_category = $queryAgent->getGroupFlat('dom_services','serv_category',['serv_category' => ['sorter' => 'ASC']],[]);
		$problems = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/services/services',[
			'services'  => $st_spec,
			'category'  => $dom_category,
			'problems'  => $problems,
			'serv'              => $services
		]);
	}
	public function getService(QueryAgent $queryAgent, $slug ){
		$dom_category = $queryAgent->getGroupItemBySlug('dom_services','services',$slug);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$all_service = $queryAgent->getGroupFlat('dom_services','serv_category',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$serv_descr = $queryAgent->getBlock('static_services',[],[]);

		$rait = new raiting();

		$raiting = $rait->where('entity_id','=',$dom_category->id_field)->get();

		//=Количество проголосовавших================
		$raiting_front['count'] = $raiting->count();
		//===========================================
		if($raiting_front['count'] > 0){
		//=Средняя оценка============================
		$sum = 0;
		foreach($raiting as $item){
			$sum += $item['value'];
		}

		$raiting_front['sred'] = round( $sum/$raiting_front['count'] , 1 );

		//===========================================


		//=Процент для вывода рейтинга в верстке=====
		$raiting_front['proc'] =($sum*100)/($raiting_front['count']*5);
		//===========================================
		}else{
			$raiting_front['sred'] = 0;
			$raiting_front['proc'] = 0;
		}
		return view('front/services/service',[
			'service'  => $dom_category,
			'serv'              => $services,
			'all_serv'          => $all_service,
			'special'			=> $special,
			'raiting'           => $raiting_front,
			'services_descr'    => $serv_descr
		]);


	}

	public function getSpecial(QueryAgent $queryAgent, $slug ){
		$dom_category = $queryAgent->getGroupItemBySlug('dom_specials','special_offers','specials/'.$slug);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		$rait = new raiting();

		$raiting = $rait->where('entity_id','=',$dom_category->id_field)->get();

		//=Количество проголосовавших================
		$raiting_front['count'] = $raiting->count();
		//===========================================
		if($raiting_front['count'] > 0){
			//=Средняя оценка============================
			$sum = 0;
			foreach($raiting as $item){
				$sum += $item['value'];
			}

			$raiting_front['sred'] = round( $sum/$raiting_front['count'] , 1 );

			//===========================================


			//=Процент для вывода рейтинга в верстке=====
			$raiting_front['proc'] =($sum*100)/($raiting_front['count']*5);
			//===========================================
		}else{
			$raiting_front['sred'] = 0;
			$raiting_front['proc'] = 0;
		}


		return view('front/specials/special',[
			'special'  => $dom_category,
			'serv'              => $services,
				'raiting'			=> $raiting_front
		]);
	}
	public function getTechnologys(QueryAgent $queryAgent){
		$static = $queryAgent->getBlock('static_technology',[],[]);
		$dom    = $queryAgent->getBlock('dom_technologys',['technologys'=>['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		return view('front/technology/technologys',[
			'static'  			=> $static,
			'dom'     			=> $dom,
			'serv'              => $services,

		]);
	}
	public function getTechnology(QueryAgent $queryAgent, $slug){
		$dom    = $queryAgent->getGroupItemBySlug('dom_technologys','technologys',$slug);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$dom1    = $queryAgent->getGroup('dom_technologys','technologys',[],[]);

		$rait = new raiting();

		$raiting = $rait->where('entity_id','=',$dom->id_field)->get();

		//=Количество проголосовавших================
		$raiting_front['count'] = $raiting->count();
		//===========================================
		if($raiting_front['count'] > 0){
			//=Средняя оценка============================
			$sum = 0;
			foreach($raiting as $item){
				$sum += $item['value'];
			}

			$raiting_front['sred'] = round( $sum/$raiting_front['count'] , 1 );

			//===========================================


			//=Процент для вывода рейтинга в верстке=====
			$raiting_front['proc'] =($sum*100)/($raiting_front['count']*5);
			//===========================================
		}else{
			$raiting_front['sred'] = 0;
			$raiting_front['proc'] = 0;
		}

		return view('front/technology/technology',[
			'tech'     			=> $dom,
			'special'			=> $special,
			'serv'              => $services,
			'dom'				=> $dom1,
			'raiting'			=> $raiting_front
		]);
	}


	public function getPoleznoes(QueryAgent $queryAgent){
		$static = $queryAgent->getBlock('static_poleznoe',[],[]);
		$dom = $queryAgent->getBlock('dom_poleznoe',[],[]);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/poleznoe/poleznoes',[
			'static'			=> $static,
			'dom'				=> $dom,
			'special'			=> $special,
			'serv'              => $services
		]);
	}
	public function getPoleznoe(QueryAgent $queryAgent, $slug){
		$polez = $queryAgent->getGroupItemBySlug('dom_poleznoe','poleznoe',$slug);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);



		$rait = new raiting();

		$raiting = $rait->where('entity_id','=',$polez->id_field)->get();

		//=Количество проголосовавших================
		$raiting_front['count'] = $raiting->count();
		//===========================================
		if($raiting_front['count'] > 0){
			//=Средняя оценка============================
			$sum = 0;
			foreach($raiting as $item){
				$sum += $item['value'];
			}

			$raiting_front['sred'] = round( $sum/$raiting_front['count'] , 1 );

			//===========================================


			//=Процент для вывода рейтинга в верстке=====
			$raiting_front['proc'] =($sum*100)/($raiting_front['count']*5);
			//===========================================
		}else{
			$raiting_front['sred'] = 0;
			$raiting_front['proc'] = 0;
		}
		return view('front/poleznoe/poleznoe',[
			'polez'			=> $polez,
			'special'       => $special,
			'serv'              => $services,
			'raiting'			=> $raiting_front
		]);
	}


	public function getNews(QueryAgent $queryAgent){
		$static = $queryAgent->getBlock('static_news',[],[]);
		$dom = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$special = $queryAgent->getBlock('dom_specials',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/news/news',[
			'static'			=> $static,
			'dom'				=> $dom,
			'special'			=> $special,
			'serv'              => $services
		]);
	}
	public function getNew(QueryAgent $queryAgent,$slug){
		$polez = $queryAgent->getGroupItemBySlug('dom_news','news','news/'.$slug);
		$special = $queryAgent->getBlock('dom_specials',['special_offers' => ['sorter'=> 'ASC']],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);
		$dom =		$queryAgent->getGroup('dom_news','news',[],[]);


		$rait = new raiting();

		$raiting = $rait->where('entity_id','=',$polez->id_field)->get();

		//=Количество проголосовавших================
		$raiting_front['count'] = $raiting->count();
		//===========================================
		if($raiting_front['count'] > 0){
			//=Средняя оценка============================
			$sum = 0;
			foreach($raiting as $item){
				$sum += $item['value'];
			}

			$raiting_front['sred'] = round( $sum/$raiting_front['count'] , 1 );

			//===========================================


			//=Процент для вывода рейтинга в верстке=====
			$raiting_front['proc'] =($sum*100)/($raiting_front['count']*5);
			//===========================================
		}else{
			$raiting_front['sred'] = 0;
			$raiting_front['proc'] = 0;
		}



		return view('front/news/new',[
			'new'			=> $polez,
			'special'       => $special,
			'serv'              => $services,
			'dom'				=> $dom,
			'raiting' 			=> $raiting_front
		]);
	}


	public function getQuestions(QueryAgent $queryAgent){
		$quest    = $queryAgent->getBlock('static_questions',[],[]);
		$qustions = $queryAgent->getBlock('dom_questions',[],[]);
		$spec     = $queryAgent->getGroupFlat('dom_specialists','specs',[],[]);
		$problem     = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$special  = $queryAgent->getBlock('static_contacts',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/questions/questions',[
			'quest'             => $quest,
			'spec'              => $spec,
			'problem'           => $problem,
			'questions'         => $qustions,
			'contact'			=> $special,
			'serv'              => $services
		]);
	}
	public function getQuestions_pr(QueryAgent $queryAgent,$slug){

		$problems = $queryAgent->getGroupItemBySlug('dom_problems','problems',$slug);
		$id = $problems->id_field;
		$qustions = $queryAgent->getGroup('dom_questions','question',[],['question' =>['problem_id'=>$id]]);
		$quest    = $queryAgent->getBlock('static_questions',[],[]);
		$spec     = $queryAgent->getGroupFlat('dom_specialists','specs',[],[]);
		$problem     = $queryAgent->getGroupFlat('dom_problems','problems',[],[]);
		$special  = $queryAgent->getBlock('static_contacts',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/questions/questions_problem',[
			'quest'             => $quest,
			'spec'              => $spec,
			'problem'           => $problem,
			'questions'         => $qustions,
			'contact'			=> $special,
			'serv'              => $services
		]);
	}



	public function getContacts(QueryAgent $queryAgent){
		$special = $queryAgent->getBlock('static_contacts',[],[]);
		$services = $queryAgent->getGroupFlat('dom_services','services',[],[]);

		return view('front/contacts/contact',[
			'contact'			=> $special,
			'serv'              => $services
		]);
	}





}
