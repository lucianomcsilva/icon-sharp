<?php
   header("Content-type: image/png");
   
   //Uncomment next line if you wanna se PHP erros.
   //header("Content-type: text/html; charset=UTF-8");
   
   
   //Get the parameters from the URL. Forced conversion to INT to avoid injections.
   // Does anyone how to avoid string injection? I am not confident to allow users to input strings
   $get_value  = floatval($_GET['value']); 

   $get_model  = intval($_GET['model']);   
   //Check the model. If it does not exist set 4 as default model
   if($get_model > 7)
   {
      $get_model = 4;
   }
   
   $get_color    = $_GET['color'];
   //Check if the color existis. If it does not exists set orange as default color (cause I like orange)
   if(!in_array($get_color, array('black', 'blue', 'darkblue', 'green', 'orange', 'purple', 'red')))
   {
      $get_color = 'orange';
   }
   

   $font        = './font/verdanai.ttf';

   
   $font_size = 15;

   //Widths   
   $text_box      = ImageTTFBBox($font_size, 0, $font, $get_value);
   $text_width    = abs($text_box[4] - $text_box[0]) ;
   $icon_width    = ($text_width < 41) ? 51 : $text_width + 12;
   $margin        = ($icon_width - $text_width)/2;

   //Icons
   $icon_base   = "img/balloon_{$get_color}_{$get_model}.png"; 
   $im          = imagecreatefrompng($icon_base);
   $icon        = imagecreatetruecolor($icon_width, 61);   

   //colors
   $black        = imagecolorallocate($icon, 0, 0, 0);
   $white        = imagecolorallocate($icon, 255, 255, 255);
   $white2       = imagecolorallocate($icon, 254, 254, 254);
   $cinza_escuro = imagecolorallocate($icon, 64, 64, 64);
   $cinza_claro  = imagecolorallocate($icon, 128, 128, 128);
   $azul_escuro  = imagecolorallocate($icon, 63, 99, 143);   
   $trans_colour = imagecolorallocatealpha($icon, 0, 0, 0, 127);
   
   $font_color = in_array($get_model, array(1, 5, 6)) ? $white : $black;  

   //Fillings   
   imagefilledrectangle($icon, 0, 0, $icon_width, 61, $white2);
   imagecopyresized($icon, $im, 0, 0, 0, 0, 30, 61, 30, 61);
   imagecopyresized($icon, $im, 30, 0, 30, 0, $icon_width-41, 61, 11, 61);
   imagecopyresized($icon, $im, $icon_width-11, 0, 40, 0, 11, 61, 11, 61);
   imagettftext($icon, $font_size, 0, $margin, 18+$font_size, $font_color, $font, $get_value);   
   imagecolortransparent($icon,$white2);

   imagepng($icon);
   imagedestroy($icon);

//------------------------------------------------------------------------------
?>