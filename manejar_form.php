<?php
include_once ('Persona.php');
 $p = new Persona ();

function get_form_data(){
  $persona_array = array();
  if (isset($_POST)) {
    $persona_array['nombre'] = $_POST['nombre'];
    $persona_array['ap_pa'] = $_POST['ap_pa'];
    $persona_array['ap_ma'] = $_POST['ap_ma'];
    $persona_array['f_nacimiento'] = $_POST['f_nacimiento'];
    $persona_array['l_nacimiento'] = $_POST['l_nacimiento'];
    $persona_array['vio_sw'] = $_POST['star_wars'];
    $persona_array['prog_lang'] = $_POST['prog_lang'];
    $persona_array['star_wars'] = $_POST['star_wars'];
    return $persona_array;
  }
  return false;
}

$p_arr = get_form_data();
// var_dump($p_arr);
$p->set_nombre($p_arr['nombre']);
$p->set_ap_pa($p_arr['ap_pa']);
$p->set_ap_ma($p_arr['ap_ma']);
$p->set_l_nacimiento($p_arr['l_nacimiento']);
$p->set_f_nacimiento($p_arr['f_nacimiento']);
$p->set_vio_sw($p_arr['vio_sw']);
// var_dump($p); exit;


if ($p_errors = $p->get_errors()) {
  var_dump($p_errors); exit;
  foreach ($p_errors as $e) {
    echo $e;
  }
} else {
  include_once ('insert_persona.php');
  echo insert_persona($p);
}
