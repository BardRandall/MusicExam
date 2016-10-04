<?php while (true){
$rand = rand(1, 10);
if(file_exists("system/".$rand.".ini")){

}else{
file_put_contents("system/".$rand.".ini", "");
return $rand;
break;
}
}
