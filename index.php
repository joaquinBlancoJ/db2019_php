<h1>hola mundo</h1>
html
sin saltos de linea

<?php

echo date ('h:i:s');

echo '<br/>';

echo 2+5;

echo '<br/>';
$ahora=time();
$final=strtotime('2019-09-25');
$dias= ($final-$ahora)/60/60/24;
echo $dias;
echo '<br/>';
echo (strtotime ('2019-09-25') -time())/(
60*60*24
);
echo '<br/>';
$nacimiento=strtotime('1999-07-11');
$hoy=time();
$edad=($nacimiento-$hoy)/60/60/24/365.25;

echo 'edad'.floor($edad);

for($i=0;$i<10;$i++){
	echo $i;
	echo'<br/>';
	
	
}
echo'<br/>';

for($i=0;$i<=10;$i++){
	echo $i*2;
	echo'<br/>';
	
	
}

echo'<br/>';

for($i=0;$i<=10;$i++){
	echo $i**2;
	echo'<br/>';
	
	
}
echo'<br/>';

$f[0]=0;
$f[1]=1;
for($i=2;$i<=10;$i++){
	$f[$i] = $f[$i-1] + $f[$i-2];
	
}
print_r($f);

echo'<br/>';


$f=1;
for($i=2;$i<=10;$i++){
	$f=$f*$i;
	echo $i=$f;
	'<br/>';
}

print_r($f);
for($j=1;$i<=100;$j++){
	for($i=2;$i<=100;$i++){
		if($j>$i) $np[$i*$j]=1;
}
}
for($i;$i<100;$i++){
	if(¡isset($np[$si])) echo $i.'<br/>';
	
}
	
echo '<pro>';

$alumno=[];

$alumno[]=[
'nombre' => 'joaquin',
'apellido' => 'blanco',
'mesa' => '713',
];

$alumno[]=[
'nombre' => 'roberto',
'apellido' => 'fernandez',
'mesa' => '702',
];

$alumno[1]['lenguajes']=[

'html',
'css',
];

echo '<pre>';
print_r($alumno);
echo '</pre>';

echo $alumno[0]['apellido'];
echo $alumno[0]['mesa'];





?>







