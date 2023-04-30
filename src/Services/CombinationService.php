<?php
namespace AizPackages\CombinationGenerate\Services;

class CombinationService {

    public function generate_combination($arrays, $i=0)
    {
        if (!isset($arrays[$i])) {
            return array();
        }
        if ($i == count($arrays) - 1) {
            $result = array();
            foreach ($arrays[$i] as $v) {
                $result[][] = $v;
            }
            return $result;
        }
    
        // get combinations from subsequent arrays
        $tmp = $this->generate_combination($arrays, $i + 1);
    
        $result = array();
    
        // concat each array from tmp with each element from $arrays[$i]
        foreach ($arrays[$i] as $v) {
            foreach ($tmp as $t) {
                $result[] = is_array($t) ? 
                    array_merge(array($v), $t) :
                    array($v, $t);
            }
        }
    
        return $result;
    }
}