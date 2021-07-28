<?php
namespace Numbers;

class Numbers
{
    public function apply($index)
    {
        $count = count($index);
        $results = [0, 0, 0]; //[Positives, Negatives, Zeroes]

        foreach ($index as $number) {
        	if ($number > 0) {
        		$results[0]++;
        	}

        	if ($number < 0) {
        		$results[1]++;
        	}

        	if ($number == 0) {
        		$results[2]++; 
        	}
        }

        foreach ($results as $key => $result) {
        	$division = $result / $count;
        	$results[$key] = number_format($division, 4);
        }

        return $results;
    }
}
