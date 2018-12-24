<?php
  /**
   * class for executing all task related to lung cancer using fuzzy logic
   */
  class Diagnosis
  {

  	const NUMBER_OF_STAGES = 5;
  	
  	// finding disease using if then rules of fuzzy logic
  	public function findDisease($small_cell_cancer_symptoms=[], $non_small_cell_cancer_symptoms=[])
  	{
  		$disease_name = '';
  		$small_cell_fv = 0;
  		$non_small_cell_fv = 0;

  		foreach ($small_cell_cancer_symptoms as $key => $value) {
  			$small_cell_fv += $value;
  		}

  		foreach ($non_small_cell_cancer_symptoms as $key => $value) {
  			$non_small_cell_fv += $value;
  		}

  		if ($small_cell_fv == $non_small_cell_fv || $small_cell_fv > $non_small_cell_fv) {
  			$disease_name = 'Small Cell Lung Cancer';
  		}else {
  			$disease_name = ' Non Small Cell Lung Cancer';
  		}

  		return $disease_name;
  	}

    // calculate threshold value
  	public function calculateThreshold($all_symptoms_fuzzy_set = []){
  		$number_of_symptoms = 0;
  		foreach ($all_symptoms_fuzzy_set as $key => $value) {
  			if ($value != 0) {
  				$number_of_symptoms++;
  			}
  		}

  		$thersholdValue = self::NUMBER_OF_STAGES * $number_of_symptoms;

  		return $thersholdValue;
  	}

  	public function calculateTotalMembershipValue($all_symptoms_fuzzy_set = []){
  		$mv = 0;
  		foreach ($all_symptoms_fuzzy_set as $key => $value) {
  			$mv += $value;
  		}

  		$tmv = ($mv*$mv*4)/self::NUMBER_OF_STAGES;

  		return $tmv;
  	}

  	public function calculateDiseaseStage($all_symptoms_fuzzy_set = []){
  		$tmv = $this->calculateTotalMembershipValue($all_symptoms_fuzzy_set);
  		$thersholdValue = $this->calculateThreshold($all_symptoms_fuzzy_set);

  		$result[] = $tmv + ($thersholdValue/14);
  		$result[] = $tmv + ($thersholdValue/12);
  		$result[] = $tmv + ($thersholdValue/10);
  		$result[] = $tmv + ($thersholdValue/8);
  		$result[] = $tmv + ($thersholdValue/6);
  		$result[] = $tmv + ($thersholdValue/4);

  		return $result;
  	}
  }
?>