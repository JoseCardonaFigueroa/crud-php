<?php
  /**
   * Persona
   */
  class Persona
  {
    var $nombre;
    var $ap_pa;
    var $ap_ma;
    var $l_nacimiento;
    var $f_nacimiento;
    var $vio_sw;
    var $lenguajes_id;
    var $errors;

    public function __construct()
    {
      $this->lenguajes_id = array();
      $this->errors = array();
    }

    public function set_nombre($nombre){
  		if(strlen($nombre)!=0){
  			$this->nombre = $nombre;
  			return true;
  		}
  		$this->errors[] = "El campo nombre es obligatorio";
  		return false;
  	}

    public function set_ap_pa($ap_pa){
  		if(strlen($ap_pa)!=0){
  			$this->ap_pa = $ap_pa;
  			return true;
  		}
  		$this->errors[] = "El campo apellido paterno es obligatorio";
  		return false;
  	}

    public function set_ap_ma($ap_ma){
  			$this->ap_ma = $ap_ma;
  			return true;
  	}

    public function set_l_nacimiento($l_nacimiento){
  		if(strlen($l_nacimiento)!=0){
  			$this->l_nacimiento = $l_nacimiento;
  			return true;
  		}
  		$this->errors[] = "El campo lugar de nacimiento es obligatorio";
  		return false;
  	}

    public function set_f_nacimiento($f_nacimiento){
  		if(strlen($f_nacimiento)!=0){
  			$this->f_nacimiento = $f_nacimiento;
  			return true;
  		}
  		$this->errors[] = "El campo fecha de nacimiento es obligatorio";
  		return false;
  	}

    public function set_vio_sw($vio_sw){
  		if(strlen($vio_sw)!=0){
        if ($vio_sw) {
          $vio_sw = 1;
        } else{
          $vio_sw = 0;
        }
  			$this->vio_sw = $vio_sw;
  			return true;
  		}
  		$this->errors[] = "El campo vio star wars es obligatorio";
  		return false;
  	}

    public function set_lenguaje_id($lenguaje_id)
    {
      if(isset($lenguaje_id)!=0){
  			$this->lenguaje_id = $lenguaje_id;
  			return true;
  		}
      $this->errors[] = "El campo lenguaje de programación es obligatorio";
      return false;
    }

  	function to_sql(){
  		return "INSERT INTO personas (nombre, apellido_paterno, apellido_materno, fecha_nacimiento, l_nacimiento, vio_pelicula) VALUES ('
        $this->nombre',
        '$this->ap_pa',
        '$this->ap_ma',
        $this->f_nacimiento,
        '$this->l_nacimiento',
        $this->vio_sw
      )";
  	}

  	function has_errors(){
  		return count($this->errors) > 0 ? true:false;
  	}
  	function get_errors(){
  		if(!$this->has_errors()){
  			return false;
  		}
  		return $this->errors;
  	}
  }
 ?>
