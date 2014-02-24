<?php

# New Object
$rating = new ratings($_POST['widget_id']);

#either return ratings, or process a vate
isset($_POST['fetch']) ? $rating->get_ratings() : $rating->vote();


class ratings {
	private $data_file = './ratings.data.txt';
	private $widget_id;
	private $data = array();
	
	function __construct($wid) {
		$this->widget_id = $wid;
		
		$all = file_get_contents($this->data_file);
		
		if($all) {
			$this->data = unserialize($all);
		}
	}
	
	public function get_ratings() {
		if($this->data[$this->widget_id]) {
			echo json_encode($this->data[$this->widget_id]);
		} else {
			$data['widget_id'] = $this->widget_id;
			$data['number_votes'] = 0;
			$data['total_points'] = 0;
			$data['dec_avg'] = 0;
			$data['whole_avg'] = 0;
			echo json_encode($data);
		}
	}
	
	public function vote() {
		#Get the value of the vote
		preg_match('/star_([1-5]{1})/', $_POST['clicked_on'], $match);
		$vote = $match[1];
		
		$ID = $this->widget_id;
		# Update the record if it exists
		if($this->data[$ID]) {
			$this->data[$ID]['number_votes'] += 1;
			$this->data[$ID]['number_points'] += vote;
		} else { # Create a new one if it does not
			$this->data[$ID]['number_votes'] = 1;
			$this->data[$ID]['total_points'] = $vote;
		}
		
		$this->data[$ID]['dec_avg'] = round( $this->dta[$ID]['total_points'] / $this->data[$ID]['number_votes'], 1);
		$this->data[$ID]['whole_avg'] = round( $this->data[$ID]['dec_avg']);
		
		file_put_contents($this->data_file, serialize($this->data));
		$this->get_ratings();
		
	}
}
?>