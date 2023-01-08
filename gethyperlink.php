<?php

function gethyperlink($tokno_row, $texttype) {

    if ($texttype == "kievbl") {
      $hyperlink = "/site/search_context.php?text_id=3&tokno=".$tokno_row;
      return $hyperlink;
    }
  
    if ($texttype == "1229_riga") {
      $hyperlink = "/site/search_context.php?text_id=4&tokno=".$tokno_row;
      return $hyperlink;
    }
    if($texttype == "marianus") {
      $book = 1;
      $chapter = 5;
  
      if($tokno_row > 0 AND $tokno_row <= 426) {$book = 1; $chapter = 5;}
      elseif($tokno_row > 426 AND $tokno_row <= 1038) {$book = 1; $chapter = 6;}
      elseif($tokno_row > 1038 AND $tokno_row <= 1501) {$book = 1; $chapter = 7;}
      elseif($tokno_row > 1501 AND $tokno_row <= 2044) {$book = 1; $chapter = 8;}
      elseif($tokno_row > 2044 AND $tokno_row <= 2637) {$book = 1; $chapter = 9;}
      elseif($tokno_row > 2637 AND $tokno_row <= 3291) {$book = 1; $chapter = 10;}
      elseif($tokno_row > 3291 AND $tokno_row <= 3739) {$book = 1; $chapter = 11;}
      elseif($tokno_row > 3739 AND $tokno_row <= 4527) {$book = 1; $chapter = 12;}
      elseif($tokno_row > 4527 AND $tokno_row <= 5466) {$book = 1; $chapter = 13;}
      elseif($tokno_row > 5466 AND $tokno_row <= 5966) {$book = 1; $chapter = 14;}
      elseif($tokno_row > 5966 AND $tokno_row <= 6523) {$book = 1; $chapter = 15;}
      elseif($tokno_row > 6523 AND $tokno_row <= 6995) {$book = 1; $chapter = 16;}
      elseif($tokno_row > 6995 AND $tokno_row <= 7464) {$book = 1; $chapter = 17;}
      elseif($tokno_row > 7464 AND $tokno_row <= 8109) {$book = 1; $chapter = 18;}
      elseif($tokno_row > 8109 AND $tokno_row <= 8628) {$book = 1; $chapter = 19;}
      elseif($tokno_row > 8628 AND $tokno_row <= 9168) {$book = 1; $chapter = 20;}
      elseif($tokno_row > 9168 AND $tokno_row <= 9966) {$book = 1; $chapter = 21;}
      elseif($tokno_row > 9966 AND $tokno_row <= 10546) {$book = 1; $chapter = 22;}
      elseif($tokno_row > 10546 AND $tokno_row <= 11141) {$book = 1; $chapter = 23;}
      elseif($tokno_row > 11141 AND $tokno_row <= 11887) {$book = 1; $chapter = 24;}
      elseif($tokno_row > 11887 AND $tokno_row <= 12573) {$book = 1; $chapter = 25;}
      elseif($tokno_row > 12573 AND $tokno_row <= 13735) {$book = 1; $chapter = 26;}
      elseif($tokno_row > 13735 AND $tokno_row <= 14665) {$book = 1; $chapter = 27;}
      elseif($tokno_row > 14665 AND $tokno_row <= 14972) {$book = 1; $chapter = 28;}
  
      elseif($tokno_row > 14972 AND $tokno_row <= 15620) {$book = 2; $chapter = 1;}
      elseif($tokno_row > 15620 AND $tokno_row <= 16122) {$book = 2; $chapter = 2;}
      elseif($tokno_row > 16122 AND $tokno_row <= 16623) {$book = 2; $chapter = 3;}
      elseif($tokno_row > 16623 AND $tokno_row <= 17250) {$book = 2; $chapter = 4;}
      elseif($tokno_row > 17250 AND $tokno_row <= 17905) {$book = 2; $chapter = 5;}
      elseif($tokno_row > 17905 AND $tokno_row <= 18846) {$book = 2; $chapter = 6;}
      elseif($tokno_row > 18846 AND $tokno_row <= 19406) {$book = 2; $chapter = 7;}
      elseif($tokno_row > 19406 AND $tokno_row <= 20021) {$book = 2; $chapter = 8;}
      elseif($tokno_row > 20021 AND $tokno_row <= 20868) {$book = 2; $chapter = 9;}
      elseif($tokno_row > 20868 AND $tokno_row <= 21718) {$book = 2; $chapter = 10;}
      elseif($tokno_row > 21718 AND $tokno_row <= 22259) {$book = 2; $chapter = 11;}
      elseif($tokno_row > 22259 AND $tokno_row <= 23007) {$book = 2; $chapter = 12;}
      elseif($tokno_row > 23007 AND $tokno_row <= 23594) {$book = 2; $chapter = 13;}
      elseif($tokno_row > 23594 AND $tokno_row <= 24757) {$book = 2; $chapter = 14;}
      elseif($tokno_row > 24757 AND $tokno_row <= 25392) {$book = 2; $chapter = 15;}
      elseif($tokno_row > 25392 AND $tokno_row <= 25692) {$book = 2; $chapter = 16;}
  
      elseif($tokno_row > 25692 AND $tokno_row <= 26772) {$book = 3; $chapter = 1;}
      elseif($tokno_row > 26772 AND $tokno_row <= 27559) {$book = 3; $chapter = 2;}
      elseif($tokno_row > 27559 AND $tokno_row <= 28022) {$book = 3; $chapter = 3;}
      elseif($tokno_row > 28022 AND $tokno_row <= 28749) {$book = 3; $chapter = 4;}
      elseif($tokno_row > 28749 AND $tokno_row <= 29434) {$book = 3; $chapter = 5;}
      elseif($tokno_row > 29434 AND $tokno_row <= 30294) {$book = 3; $chapter = 6;}
      elseif($tokno_row > 30294 AND $tokno_row <= 31125) {$book = 3; $chapter = 7;}
      elseif($tokno_row > 31125 AND $tokno_row <= 32163) {$book = 3; $chapter = 8;}
      elseif($tokno_row > 32163 AND $tokno_row <= 33254) {$book = 3; $chapter = 9;}
      elseif($tokno_row > 33254 AND $tokno_row <= 33999) {$book = 3; $chapter = 10;}
      elseif($tokno_row > 33999 AND $tokno_row <= 34937) {$book = 3; $chapter = 11;}
      elseif($tokno_row > 34937 AND $tokno_row <= 35921) {$book = 3; $chapter = 12;}
      elseif($tokno_row > 35921 AND $tokno_row <= 36545) {$book = 3; $chapter = 13;}
      elseif($tokno_row > 36545 AND $tokno_row <= 37140) {$book = 3; $chapter = 14;}
      elseif($tokno_row > 37140 AND $tokno_row <= 37672) {$book = 3; $chapter = 15;}
      elseif($tokno_row > 37672 AND $tokno_row <= 38236) {$book = 3; $chapter = 16;}
      elseif($tokno_row > 38236 AND $tokno_row <= 38776) {$book = 3; $chapter = 17;}
      elseif($tokno_row > 38776 AND $tokno_row <= 39417) {$book = 3; $chapter = 18;}
      elseif($tokno_row > 39417 AND $tokno_row <= 40125) {$book = 3; $chapter = 19;}
      elseif($tokno_row > 40125 AND $tokno_row <= 40790) {$book = 3; $chapter = 20;}
      elseif($tokno_row > 40790 AND $tokno_row <= 41349) {$book = 3; $chapter = 21;}
      elseif($tokno_row > 41349 AND $tokno_row <= 42392) {$book = 3; $chapter = 22;}
      elseif($tokno_row > 42392 AND $tokno_row <= 43213) {$book = 3; $chapter = 23;}
      elseif($tokno_row > 43213 AND $tokno_row <= 44021) {$book = 3; $chapter = 24;}
  
      elseif($tokno_row > 44021 AND $tokno_row <= 44499) {$book = 4; $chapter = 1;}
      elseif($tokno_row > 44499 AND $tokno_row <= 44864) {$book = 4; $chapter = 2;}
      elseif($tokno_row > 44864 AND $tokno_row <= 45442) {$book = 4; $chapter = 3;}
      elseif($tokno_row > 45442 AND $tokno_row <= 46309) {$book = 4; $chapter = 4;}
      elseif($tokno_row > 46309 AND $tokno_row <= 47061) {$book = 4; $chapter = 5;}
      elseif($tokno_row > 47061 AND $tokno_row <= 48172) {$book = 4; $chapter = 6;}
      elseif($tokno_row > 48172 AND $tokno_row <= 48938) {$book = 4; $chapter = 7;}
      elseif($tokno_row > 48938 AND $tokno_row <= 49946) {$book = 4; $chapter = 8;}
      elseif($tokno_row > 49946 AND $tokno_row <= 50598) {$book = 4; $chapter = 9;}
      elseif($tokno_row > 50598 AND $tokno_row <= 51237) {$book = 4; $chapter = 10;}
      elseif($tokno_row > 51237 AND $tokno_row <= 52098) {$book = 4; $chapter = 11;}
      elseif($tokno_row > 52098 AND $tokno_row <= 52889) {$book = 4; $chapter = 12;}
      elseif($tokno_row > 52889 AND $tokno_row <= 53494) {$book = 4; $chapter = 13;}
      elseif($tokno_row > 53494 AND $tokno_row <= 54037) {$book = 4; $chapter = 14;}
      elseif($tokno_row > 54037 AND $tokno_row <= 54488) {$book = 4; $chapter = 15;}
      elseif($tokno_row > 54488 AND $tokno_row <= 55067) {$book = 4; $chapter = 16;}
      elseif($tokno_row > 55067 AND $tokno_row <= 55560) {$book = 4; $chapter = 17;}
      elseif($tokno_row > 55560 AND $tokno_row <= 55991) {$book = 4; $chapter = 18;}
      elseif($tokno_row > 55991 AND $tokno_row <= 56713) {$book = 4; $chapter = 19;}
      elseif($tokno_row > 56713 AND $tokno_row <= 57266) {$book = 4; $chapter = 20;}
      elseif($tokno_row > 57266 AND $tokno_row <= 57596) {$book = 4; $chapter = 21;}
      
      $hyperlink = "/site/search_context.php?text_id=1&book=".$book."&chapter=".$chapter."&tokno=".$tokno_row;
      return $hyperlink;
    }
  
    if($texttype == "zographensis") {
  
        if($tokno_row < 116) { $book = 1; $chapter = 3;}
        elseif($tokno_row > 116 AND $tokno_row < 515) {$book = 1; $chapter = 4;}
        elseif($tokno_row > 515 AND $tokno_row < 1282) {$book = 1; $chapter = 5;}
        elseif($tokno_row > 1282 AND $tokno_row < 1890) {$book = 1; $chapter = 6;}
        elseif($tokno_row > 1890 AND $tokno_row < 2358) {$book = 1; $chapter = 7;}
        elseif($tokno_row > 2358 AND $tokno_row < 2910) {$book = 1; $chapter = 8;}
        elseif($tokno_row > 2910 AND $tokno_row < 3322) {$book = 1; $chapter = 9;}
        elseif($tokno_row > 3322 AND $tokno_row < 3985) {$book = 1; $chapter = 10;}
        elseif($tokno_row > 3985 AND $tokno_row < 4433) {$book = 1; $chapter = 11;}
        elseif($tokno_row > 4433 AND $tokno_row < 5253) {$book = 1; $chapter = 12;}
        elseif($tokno_row > 5253 AND $tokno_row < 6182) {$book = 1; $chapter = 13;}
        elseif($tokno_row > 6182 AND $tokno_row < 6675) {$book = 1; $chapter = 14;}
        elseif($tokno_row > 6675 AND $tokno_row < 7232) {$book = 1; $chapter = 15;}
        elseif($tokno_row > 7232 AND $tokno_row < 7516) {$book = 1; $chapter = 16;}
        elseif($tokno_row > 7516 AND $tokno_row < 7984) {$book = 1; $chapter = 24;}
        elseif($tokno_row > 7984 AND $tokno_row < 8683) {$book = 1; $chapter = 25;}
        elseif($tokno_row > 8683 AND $tokno_row < 9853) {$book = 1; $chapter = 26;}
        elseif($tokno_row > 9853 AND $tokno_row < 10777) {$book = 1; $chapter = 27;}
        elseif($tokno_row > 10777 AND $tokno_row < 11090) {$book = 1; $chapter = 28;}

        else {return 99;}
        
        $hyperlink = "/site/search_context.php?text_id=2&book=".$book."&chapter=".$chapter."&tokno=".$tokno_row;
        return $hyperlink;
    }
  
    return 99;
   
  }




?>