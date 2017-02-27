<?PHP

function br(){ echo nl2br("\n");}

$message ='';

for ($i=0; $i<30; $i++)
{
 $message = $message.'A';
 echo $message;
 br();
}
