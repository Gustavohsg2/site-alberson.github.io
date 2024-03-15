<?php 
    $cpf = $_POST['cpf']; 
    $n10 = $n11 = $z = 0;
    $y = 10;
	for ($x=0; $x <= 8; $x++){
    	#$r = $r+($cpf[$z]*$x);
        #$r1 = $r1+($cpf[$z]*$y);
        $n10 += $cpf[$x]*$y;
        $n11 += $cpf[$x]*($y+1);
        $y--;     
	}

    $n10 = $n10%11>=2 ? ($n10%11)+11 : 0;
    $n11 += 2*$n10;
    $n11 = $n11%11>=2 ? ($n11%11)+11 : 0;	
    if(($n10==$cpf[9]) && ($n11==$cpf[10])){
        printf('<p style="color: green;"><b>CPF VÁLIDO</b></p>'); 
    }else{
        print('<p style="color: red;"><b>CPF INVÁLIDO</b></p>');
    }

?>