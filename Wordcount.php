<?php 
class WordCount
{
    public function countWords($sentence)
    {
        return count(explode(" ",$sentence));
    }
      // fungsi 2
      public function absolutMath($a, $b)
      {
          return abs($a - $b);
      }
  
      // fungsi 3
      public function pangkatMath($a, $b)
      {
          return pow($a, $b);
      }
  
      // fungsi 4
      public function akarMath($a)
      {
          return sqrt($a);
      }
  
      // fungsi 5
      public function pembulatanMath($a)
      {
          return round($a);
      }
  
      // fungsi 6
      public function luasPersegi($a)
      {
          return $a * $a;
      }
  
      // fungsi 7
      public function kelilingPersegi($a)
      {
          return $a * 4;
      }
  
      // fungsi 8
      public function luasPersegiPanjang($a, $b)
      {
          return $a * $b;
      }
  
      // fungsi 9
      public function kelilingPersegiPanjang($a, $b)
      {
          return 2 * ($a + $b);
      }
  
      // fungsi 10
      public function kelilingSegitiga($a, $b, $c)
      {
          return $a + $b + $c;
      }
}
?>