<?php 
header('Access-Control-Allow-Origin:*');

class Home
{
	use Controller;

	public function index(){
		$this->view('home');
	}

	public function checkApi(){
		echo "JASIR PARAKKATTIL";
	}    

public function searchResults(){ 

	  include('../public/test.php');
	  $originalArray = $a;
 	  $newArray = [];
	  $resultArray =[];
	  $indexArray  = [];
	  
	  $input_data = file_get_contents('php://input');
		if(count(json_decode($input_data)) > 0 ){
			foreach(json_decode($input_data) as $key=>$value){
				$decodeData = json_decode(json_encode($value),true);
				$newArray[array_keys($decodeData)[0]]= array_values($decodeData)[0];
			}

			foreach($newArray as $key=>$value){ 
				$index       =  array_keys(array_column($originalArray, $key) , $value);
				$indexArray  =  count($indexArray) > 0 ? array_intersect($indexArray,$index):array_merge($indexArray,$index);      	               
			}
			if(count($indexArray) > 0){
				foreach($indexArray as $value){
				array_push($resultArray, $originalArray[$value]);
				}	
			}
			}  

			$page = intval($_GET['page']);
			$page_size = 20;
			$total_records = count($resultArray);
			$total_pages   = ceil($total_records / $page_size);

			//Page to display can not be greater than the total number of pages
			if ($page > $total_pages) {
				$page = $total_pages;
			}

			//Page to display can not be less than 1
			if ($page < 1) {
				$page = 1;
			}

			// Calculate the position of the first record of the page to display
			$offset = ($page - 1) * $page_size;

			// Get the subset of records to be displayed from the array
			$data = array_slice($resultArray, $offset, $page_size);

			if(count($data) > 0 ){
				$response['status']   		  = 'success';
				$response['data']     		  =	$data;
				$response['totalRecords']     = $total_records;
				$response['totalPages']       = $total_pages;
			}
			else{
				$response['status']   		  = 'success';
				$response['data']     		  =	$data;
				$response['totalRecords']     = $total_records;
				$response['totalPages']       = $total_pages;
			}

	      echo json_encode($response);
	 }
}
