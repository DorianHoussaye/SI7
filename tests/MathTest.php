<?php
//bibliothèque de test
use PHPUnit\Framework\TestCase;
class MathTest extends TestCase {
public function testDouble(){
//verifie si le double de 2 est égale à 4
$this->assertEquals(4, \App\Math::double(2));
}
public function testMontantTTC(){
//verifie si le montant TTC est bon
$this->assertEquals(120, \App\Math::montantTTC(100));
}
public function testTypeValeurOK(){
//verifie si les deux types et les deux valeurs sont égaux
$this->assertSame(1, 1);
}
public function testTypeValeurFalse(){
//verifie si les deux types et les deux valeurs ne sont pas égaux
$this->assertSame(1, "Bonjour");
}
public function testValeurOK(){
//verifie si la première valeur n'est pas plus petit que la deuxième valeur
$this->assertLessThan(3, 2);
}
public function testValeurFalse(){
//verifie si la première valeur est plus petit que la deuxième valeur
$this->assertLessThan(2, 3);
}
}
?>
