<?php 

trait TraitTesteA
{
    function negrito($texto) {
        return "<strong>$texto</strong>";
    }
}

trait TraitTesteB
{
    function italico($texto) {
        return "<i>$texto</i>";
    }
    
    function negrito($texto) {
        return "<strong>$texto</strong>";
    }
}

trait TraitTodosTeste
{
    use TraitTesteA, TraitTesteB{
        TraitTesteA::negrito insteadof TraitTesteB;
        TraitTesteB::negrito as negritoTesteB;
    }
}

class Formatar
{
    use TraitTodosTeste;
    
    public  function linha(){
        echo '<hr>';
    }
}

$formato = new Formatar();
echo $formato->negrito('Um texto de Teste');
echo'<br>';
echo $formato->italico('Um texto de Teste');
$formato->linha();
echo  $formato->negritoTesteB('texto trait B');





