<?php
	function page_numbers ($current_page, $page_count, $link_count) {
		if ($link_count<10) {$link_count=10;}
		$page_links=array(1=>true, $page_count=>true);
		for ($i=$current_page-1;$i<$current_page+2;$i++) {
			if ($i<1 || $i>$page_count) {continue;}
			$page_links[$i]=true;
		}
		$left=$current_page-4; if ($left<1) {$left=false;}
		$right=$page_count-$current_page-3; if ($right<1) {$right=false;}
		$available=$link_count-count($page_links);
		$left_step=($left) ? $left/($left+$right)*$available : false;
		$right_step=($right) ? $right/($left+$right)*$available : false;
		if ($left_step) {
			$left_step=($left>$right) ? floor($left_step) : ceil($left_step);
			$left_step=$left/($left_step+1);
			$power=floor(log10($left_step));
			$round=(($left_step/pow(10, $power))<5) ? pow(10, $power) : pow(10, $power+1);
			for ($i=1;$i<$current_page-1;$i+=$left_step) {
				$i=round($i/$round)*$round;
				if ($i<1 || $i>$page_count) {continue;}
				$page_links[$i]=true;
			}
			$i=end(array_keys($page_links));
			if ($current_page-$i>$left_step/2) {
				$i+=$round/2;
				$page_links[$i]=true;
			}
		}
		if ($right_step) {
			$right_step=($left>$right) ? ceil($right_step) : floor($right_step);
			$right_step=$right/($right_step+1);
			$power=floor(log10($right_step));
			$round=(($right_step/pow(10, $power))<5) ? pow(10, $power) : pow(10, $power+1);
			for ($i=$page_count;$i>$current_page+1;$i-=$right_step) {
				$i=round($i/$round)*$round;
				if ($i<1 || $i>$page_count) {continue;}
				$page_links[$i]=true;
			}
			$i=end(array_keys($page_links));
			if ($i-$current_page>$right_step/2) {
				$i-=$round/2;
				$page_links[$i]=true;
			}
		}
		ksort($page_links);
		return array_keys($page_links);
	}
