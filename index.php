<?php
     class rumah {
        public $nama="faudzan";      
        public $warna="merah";
        public $pintu="2";
        public $jendela="4";
        public $genteng="20"; 
        public $lantai="marmer";
        public $pagar="besi";
        
         function set_warna($warna) {
            $this->warna =$warna;
         }

         function set_pintu($pintu) {
            $this->pintu =$pintu;
         }

         function set_jendela($jendela) {
            $this->jendela =$jendela;
         }

         function set_genteng($genteng) {
            $this->genteng =$genteng;
         }

         function set_lantai($lantai) {
            $this->lantai =$lantai;
        
         }

         function set_pagar($pagar) {
            $this->pagar =$pagar;
         }

     }

     $rumah_faudzan = new rumah() ;
     $rumah_faudzan->nama;
     $rumah_faudzan->warna;
     $rumah_faudzan->pintu;
     $rumah_faudzan->jendela;
     $rumah_faudzan->genteng;
     $rumah_faudzan->lantai;
     $rumah_faudzan->pagar;
    
    
     echo "rumah milik : ".$rumah_faudzan->nama;
     echo " <br> ";
     echo "warna rumah : ".$rumah_faudzan->warna;
     echo " <br>";
     echo "jumlah pintu : ".$rumah_faudzan->pintu;
     echo " <br> ";
     echo "jumlah jendela : ".$rumah_faudzan->jendela;
     echo " <br> ";
     echo "jumlah geteng : ".$rumah_faudzan->genteng;
     echo " <br> ";
     echo "lantai : ".$rumah_faudzan->lantai;
     echo " <br> ";
     echo "pagar : ".$rumah_faudzan->pagar;
     echo " <br> ";

     $rumah_irfan = new rumah ();
     $rumah_irfan->warna="putih";
     echo $rumah_irfan->warna;
     echo " <br> "; 

     


    ?>