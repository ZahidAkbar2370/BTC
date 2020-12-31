@php
    
    $response_value=(Http::get('https://api.coincap.io/v2/assets')->json());
   echo "<pre>";
   print_r($response_value);
   echo "</pre>";
   die();
@endphp