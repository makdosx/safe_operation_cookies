<?php


   // SAFE OPERATION COOKIES

    class  COOKIES_OPERATION
        {


        public  $cookie_user = "maksound"; //set your name of cookie
      
        var $cookie_path = "/";


  
        public function DEFINITION_COOKIE_NAME ()
            {
        
             if ($this->cookie_user == true )
              {
           return $this -> cookie_user;
               }

              
             else
              {
               return !$this -> cookie_user ." <div align=center> DEFFINITTION ERROR NAME </div>"; 
               } 

           }




       
        public function DEFINITION_COOKIE_VALUE ()
            {
        
 
        
         $crypt_start   = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 16, '0Xx', STR_PAD_LEFT);
         $crypt_middle1 = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 6, '0', STR_PAD_LEFT);
         $crypt_middle2 = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 6, '0', STR_PAD_LEFT);
         $crypt_end     = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 16, '01', STR_PAD_LEFT);

          $crypt_full = 
                  $crypt_start[0] .$crypt_start[2] .$crypt_start[3] 
                 .$crypt_start[4] .$crypt_start[5]  .$crypt_start[6]
                 .$crypt_middle1[0] .$crypt_middle1[1] .$crypt_middle1[2] 
                 .$crypt_middle1[3] .$crypt_middle1[4]  .$crypt_middle1[5]
                 .$crypt_middle2[0] .$crypt_middle2[1] .$crypt_middle2[2] 
                 .$crypt_middle2[3] .$crypt_middle2[4]  .$crypt_middle2[5]
                 .$crypt_end[0] .$crypt_end[1] .$crypt_end[2] 
                 .$crypt_end[3] .$crypt_end[4]  .$crypt_end[5];

             $cookie_value = $crypt_full; 

   

             if ($cookie_value == true )
              {
           return ($cookie_value);
               }

              
             else
              {
               return (!$cookie_value ." <div align=center> DEFFINITTION ERROR VALUE </div>"); 
               } 

             }



        public function DEFINITION_COOKIE_TIME ($user_time)
           {
             
          $cookie_time = time()+3600*1; // set cookie exprire for 1 hour

             
         if ($cookie_time == true )
              {
           return ($cookie_time);
               }

              
             else
              {
               return (!$cookie_time ." <div align=center> DEFFINITTION ERROR TIME </div>"); 
              }
          }




       
        public function DEFINITION_COOKIE_PATH ()
            {
        
             if ($this->cookie_path == true )
              {
           return $this -> cookie_path;
               }

              
             else
              {
               return !$this -> cookie_path ." <div align=center> DEFFINITTION ERROR PATH </div>"; 
               } 


             }


         } // end of class






      class  SET_COOKIES_OPERATION extends COOKIES_OPERATION
        {


        public  $cookie_user = "mak_sound"; //set your name of cookie
      
        var $cookie_path = "/";


  
        public function DEFINITION_COOKIE_NAME ()
            {
        
             if ($this->cookie_user == true )
              {
           return $this -> cookie_user;
               }

              
             else
              {
               return !$this -> cookie_user ." <div align=center> DEFFINITTION ERROR NAME </div>"; 
               } 

           }




       
        public function DEFINITION_COOKIE_VALUE ()
            {
        
 
        
         $crypt_start   = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 16, '0Xx', STR_PAD_LEFT);
         $crypt_middle1 = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 6, '0', STR_PAD_LEFT);
         $crypt_middle2 = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 6, '0', STR_PAD_LEFT);
         $crypt_end     = str_pad(dechex(mt_rand(0, 0xFFFFFFFF)), 16, '01', STR_PAD_LEFT);

          $crypt_full = 
                  $crypt_start[0] .$crypt_start[2] .$crypt_start[3] 
                 .$crypt_start[4] .$crypt_start[5]  .$crypt_start[6]
                 .$crypt_middle1[0] .$crypt_middle1[1] .$crypt_middle1[2] 
                 .$crypt_middle1[3] .$crypt_middle1[4]  .$crypt_middle1[5]
                 .$crypt_middle2[0] .$crypt_middle2[1] .$crypt_middle2[2] 
                 .$crypt_middle2[3] .$crypt_middle2[4]  .$crypt_middle2[5]
                 .$crypt_end[0] .$crypt_end[1] .$crypt_end[2] 
                 .$crypt_end[3] .$crypt_end[4]  .$crypt_end[5];

             $cookie_value = $crypt_full; 

   

             if ($cookie_value == true )
              {
           return ($cookie_value);
               }

              
             else
              {
               return (!$cookie_value ." <div align=center> DEFFINITTION ERROR VALUE </div>"); 
               } 

             }



        public function DEFINITION_COOKIE_TIME ($user_time)
           {
             
          $cookie_time = time()+3600*1; // set cookie exprire for 1 hour

             
         if ($cookie_time == true )
              {
           return ($cookie_time);
               }

              
             else
              {
               return (!$cookie_time ." <div align=center> DEFFINITTION ERROR TIME </div>"); 
              }
          }




       
        public function DEFINITION_COOKIE_PATH ()
            {
        
             if ($this->cookie_path == true )
              {
           return $this -> cookie_path;
               }

              
             else
              {
               return !$this -> cookie_path ." <div align=center> DEFFINITTION ERROR PATH </div>"; 
               } 


             }


         } // end of class with extends


?>
