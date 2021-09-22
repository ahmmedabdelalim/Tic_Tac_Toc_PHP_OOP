<?php


class tic
{

	var $winner = 'n';
	var $box = array('', '', '', '', '', '', '', '', '');

////////////////////////////////
	function player_X()
	{
		if (($this->box[0] == 'x' && $this->box[1] == 'x' && $this->box[2] == 'x')  || ($this->box[3] == 'x' && $this->box[4] == 'x' && $this->box[5] == 'x') || ($this->box[6] == 'x' && $this->box[7] == 'x' && $this->box[8] == 'x') || ($this->box[0] == 'x' && $this->box[3] == 'x' && $this->box[6] == 'x')  || ($this->box[1] == 'x' && $this->box[4] == 'x' && $this->box[7] == 'x') || ($this->box[2] == 'x' && $this->box[5] == 'x' && $this->box[8] == 'x') || ($this->box[0] == 'x' && $this->box[4] == 'x' && $this->box[8] == 'x') || ($this->box[2] == 'x' && $this->box[4] == 'x' && $this->box[6] == 'x')) {
			$this->winner = 'x';
			print "<h1>X Wins!</h1>";
		}
	}
//////////////////////////////////////

	function player_O()
	{
				$i = rand() % 8;
				while ($this->box[$i] != '') {
					$i = rand() % 8;
				}
				$this->box[$i] = 'o';
				if (($this->box[0] == 'o' && $this->box[1] == 'o' && $this->box[2] == 'o')  || ($this->box[3] == 'o' && $this->box[4] == 'o' && $this->box[5] == 'o') || ($this->box[6] == 'o' && $this->box[7] == 'o' && $this->box[8] == 'o') || ($this->box[0] == 'o' && $this->box[3] == 'o' && $this->box[6] == 'o')  || ($this->box[1] == 'o' && $this->box[4] == 'o' && $this->box[7] == 'o') || ($this->box[2] == 'o' && $this->box[5] == 'o' && $this->box[8] == 'o') || ($this->box[0] == 'o' && $this->box[4] == 'o' && $this->box[8] == 'o') || ($this->box[2] == 'o' && $this->box[4] == 'o' && $this->box[6] == 'o')) {
					$this->winner = 'o';
					print "<h1>O Wins!</h1>";
				}
	}

////////////////////////////////////////
	function GameOver()
	{
		$this->winner = 't';
				print "<h1>Game Over!</h1>";
	}


//////////////////////////////
	function game()
	{
		if (isset($_POST["gobtn"])) {
			$this->box[0] = $_POST["box0"];
			$this->box[1] = $_POST["box1"];
			$this->box[2] = $_POST["box2"];
			$this->box[3] = $_POST["box3"];
			$this->box[4] = $_POST["box4"];
			$this->box[5] = $_POST["box5"];
			$this->box[6] = $_POST["box6"];
			$this->box[7] = $_POST["box7"];
			$this->box[8] = $_POST["box8"];

			// method of player x

			$this->player_X();

			///////

			$blank = 0;
			for ($i = 0; $i <= 8; $i++) {
				if ($this->box[$i] == '') {
					$blank = 1;
				}
			}
			if ($blank == 1) {
				$this->player_O();
			} 
			
			else if ($this->winner == 'n') {
				$this->GameOver();
			}
		}
	}
}
