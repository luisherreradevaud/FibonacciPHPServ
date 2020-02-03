<?php

  if ( isset($_GET['n'])) {
    $n = $_GET['n'];
    if ( !is_numeric($n) ) {
       response_http_code(400);
    }
  } else {
    response_http_code(400);
  }

  function fibonacci($n) {
    
    if ( $n < 0 ) {
      return 0;
    }
  
    $total     = 0;
    $prev_prev = 0;
    $prev      = 1;

    for ( $i = 0; $i < $n ; $i++ ) {
      $total = $prev + $prev_prev;
      $prev_prev = $prev;
      $prev = $total;
    }
   
    return $total;
    
  }
  
  print fibonacci($n);
  
?>
