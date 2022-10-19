<?php
$senha_correta = "1234";
$senha_digitada = "12345";

$hash = password_hash($senha_correta, PASSWORD_DEFAULT); //usa o que a linguagem php considera melhor (retorna até 255 caracteres)
$hash2 = password_hash($senha_correta, PASSWORD_BCRYPT); //usa o método bcrypt em específico (retorna 60 caracteres)
//OBS: ao recarregar a página, a hash fica diferente, a função consegue gerar várias hashs p/ uma mesma senha

if(password_verify($senha_digitada, $hash)){
    echo "senha correta<br>";
}
else{
    echo "senha errada<br>";
}

$hash3 = md5($senha_correta); //essa função gera sempre uma mesma hash p/ uma mesma senha
if(md5($senha_digitada) == $hash3){
    echo "senha correta<br>";
}
else{
    echo "senha errada<br>";
}
//OBS: ao usar o md5 existe uma pequena possibilidade de strings diferentes gerarem a mesma hash



echo "SENHA: ".$senha_correta."<br>";
echo "PASSWORD HASH: ".$hash."<br>";
echo "MD5: ".$hash3."<br>";
?>