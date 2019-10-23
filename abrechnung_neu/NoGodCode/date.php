<?php

function datum() {
$date = date('n');
if ($date == 1){
  echo "Januar " . date('Y');
}
else if ($date == 2){
  echo "Februar " . date('Y');
}
else if ($date == 3){
  echo "März " . date('Y');
}
else if ($date == 4){
  echo "April " . date('Y');
}
else if ($date == 5){
  echo "Mai " . date('Y');
}
else if ($date == 6){
  echo "Juni " . date('Y');
}
else if ($date == 7){
  echo "Juli " . date('Y');
}
else if ($date == 8) {
  echo "August " . date('Y');
}
else if ($date == 9){
  echo "September " . date('Y');
}
else if ($date == 10){
  echo "Oktober " . date('Y');
}
else if ($date == 11){
  echo "November " . date('Y');
}
else if ($date == 12){
  echo "Dezember " . date('Y');
}

}

 ?>
