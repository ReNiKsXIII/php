  public function addDiscipline($d){
  array_push($this->disciplines, $d);
  }


  public function display(){

    echo '<h1>Группа '.$this->title.'</h1>';
@@ -32,7 +34,6 @@ public function display(){
        $discipline->display();
    }
  }


 }
 ?> 