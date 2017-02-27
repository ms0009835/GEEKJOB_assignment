<?PHP
function br(){ echo nl2br("\n");}
$num = 1000;

while(100<=$num){
$num = $num/2;
echo $num;
br();

}
