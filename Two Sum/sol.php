<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        foreach ($nums as $key => $item) {
            unset($nums[$key]);
            if (($key_2 = array_search($target - $item, $nums))) {
                return [$key, $key_2];
            }
        }
    }
}
