<?php 
    class CommonFunc{
        public static function ChangeURL($url){
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
        }
    }
?>