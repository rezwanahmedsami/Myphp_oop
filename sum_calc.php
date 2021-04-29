<?PHP

class sum{
private $data1;
private $data2;

public function __construct(){
  if(!empty($this->data1) && !empty($this->data2)){
  if(is_numeric($this->data1) && is_numeric($this->data2)){
  $sum = $this->data1 + $this->data2;
  if($sum){
  echo $sum;
return true;
}else{
  echo "something went wrong!!";
return false;
}
}else{
 echo "data must be a numeric value";
return false;
}
}else{
echo "Data cant be null";
return false;
}
}
}

?>
