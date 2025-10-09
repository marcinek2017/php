<?php  
    class auto{
        private $marka;
        private $model;
        public $moc;

        $fiacik= new auto();

         function __construct($marka) {
        $this->marka = $marka
    }
    Function __destruct() {
        echo "The car is {$this ->marka}.";
    }
}


