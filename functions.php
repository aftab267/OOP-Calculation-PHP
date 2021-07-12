===========================
create class
<?php
    class calculator{        
        public $a,$b,$c;
        public function sum(){
            $this->c=$this->a+$this->b;
            return  $this->c;
        }
    }
    $cal=new calculator();
    $cal->a=20;
    $cal->b=30;
    echo $cal->sum();
    ?>
=======================================================
