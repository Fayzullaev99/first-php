<?
function writeNavigation($arr) {
  $list = '';
  
  foreach($arr as $key => $value){
    if ($key === $_GET['page']) {
      $active = 'active';
    }else{
      $active = '';
    }
    
    if ($value['user'] && $_SESSION['login']) {
      $list .= "<li><a href='/?page=$key' class='menu__list-link $active'><i class='fal $value[icon]'></i>$value[name]</a></li>";
    }elseif($value['user'] === false){
      $list .= "<li><a href='/?page=$key' class='menu__list-link $active'><i class='fal $value[icon]'></i>$value[name]</a></li>";
    }
  }
  
  return $list;
}