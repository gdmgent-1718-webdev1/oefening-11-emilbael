<?php
$navigation = ['index' => 'Home', 'about'=>'Over ons', 'portfolio'=> 'Portfolio', 'contact' => 'Contacteer ons'];
echo '<ul>';
foreach ($navigation as $key => $value) {
    echo '<li><a href="'.$value.'.php">' .$value. '</a></li>';
};
echo '</ul';
?>