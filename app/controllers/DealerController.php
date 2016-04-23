<?php

class DealerController extends BaseController {

 
  
  //This segment displays all of our dealers.
  public function index(){
    
    $dealers = Dealer::paginate(25);
		
		//Test
		//For each dealer, we need to determine a rating.
		//Ok. Let's try a dealer
		foreach($dealers as $dealer){
				$rating = Rating::where('Dealer_Key', '=', $dealer->id);
				//Each rating needs to be added to a total. This total needs to 
				//be appended to each dealer and echoed out.
				//Take each rating and iterate through it.
				$total =0;
				$count =0;
				foreach($rating as $rate){
					$total += $rate->Rating;
					var_dump($rate->Rating);

					$count++;
				}
				//Let's take the average.
				//If both $total and $count are 0
				if( $total ==0 && $count == 0){
					$total = 1;
				}else{
					$total = $total/$count;

				}
			//Dynamic properties??
			$dealer->total = $total;
		}
	
    $script = View::make("dealer/script");
    //Echo them to the page we specify.
		return View::make('dealer/view_all', ["dealers" => $dealers, "script" =>$script]);
    
  }
  
  
  
  public function view(){
    //This segment displays an individual dealer to the user.
    //This will display a view for a single case. 
    return View::make("dealer/view_single");
    
    
  }
  
  
  
  
  
  
}