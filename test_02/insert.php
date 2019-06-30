<?php
	require_once ("conect.php");
	
$php_zmienna_formularz_1=$_POST['pole_formularz_1'];
$php_zmienna_formularz_2=$_POST['pole_formularz_2'];
$php_zmienna_DL=$_POST['pole_formularz_3'];
$php_zmienna_SZER=$_POST['pole_formularz_4'];

$sql=pg_query("INSERT INTO public.tabela_przykladowa(
	dane_tekstowe, numer, dane_geograficzne)
	VALUES ('$php_zmienna_formularz_1','$php_zmienna_formularz_2', ST_GeomFromEWKT('SRID=4326; POINT($php_zmienna_DL $php_zmienna_SZER)'));");

/*if ($sql){
echo "działa";
}else{
	echo 'nie działa';
};*/
pg_close($polaczenie);

?>