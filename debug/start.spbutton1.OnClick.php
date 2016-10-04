<?php GLOBAL $answer, $pos_tune;
c("spButton1")->enabled = false;
c("sqPlayer")->stop();
c("spButton1")->caption = "Следующее";
$pos_tune = $pos_tune + 1;
//pre($pos_tune);
if ($pos_tune < 11){
$number = getTune($pos_tune);
c("sqPlayer")->fileName = "data/".$number.".mp3";
$answer[$pos_tune] = getName($number);
c("sqPlayer")->play();
c("spButton1")->enabled = true;
pre($answer);
}else{
ShowForm(result, SW_SHOW);
HideForm(start, SW_SHOW);
}
