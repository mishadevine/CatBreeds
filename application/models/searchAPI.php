<? php
    class SearchAPI extends CI_Controller {
    
        public function get_search_results() {
            $searchResults = file_get_contents('https://api.rescuegroups.org/http/');
            var_dump($searchResults);
                
            $data = array(
      "apikey" => "ZqNNlRXv",
      "objectType" => "animals",
      "objectAction" => "publicSearch",
      "search" => array (
        "resultStart" => 0,
        "resultLimit" => 20,
        "resultSort" => "animalID",
        "resultOrder" => "asc",
        "calcFoundRows" => "Yes",    "filters" => array(
          array(
            "fieldName" => "animalSpecies",
            "operation" => "equals",
            "criteria" => "cat",
          ),
          array(
            "fieldName" => "animalGeneralSizePotential",
            "operation" => "equals",
            "criteria" => "small",
          ),
        ),
        "fields" => array("animalID","animalOrgID","animalName","animalBreed")
      ),
    );

$jsonData = json_encode($data);

// create a new cURL resource
$ch = curl_init();
 
// set options, url, etc.
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_URL, "https://api.rescuegroups.org/http/json");
 
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_POST, 1);
 
//curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch);
 
if (curl_errno($ch)) {
 
  $results = curl_error($ch);
 
} else {
 
  // close cURL resource, and free up system resources
  curl_close($ch);
 
  $results = $result;
 
}

$resultsArray = json_decode($results);

print_r($resultsArray);
        }

    

}
?>