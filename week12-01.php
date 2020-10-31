<?php
/*ID: 612110264
Name: Zhe Yin
*/
require_once './Car.php';
require_once './Bus.php';
require_once './Person.php';


echo "Input (owner cc capacity): ";
fscanf(STDIN,"%s %d %d",$owner,$piston,$capacity);

$car = new Bus($owner, $piston,$capacity);
do {
echo "command (h for help): ";
$getcom=trim(fgets(STDIN));
$command=explode(" ",$getcom);
switch($command[0]){
	case '0': $car->engineStop(); break;
	case '1': $car->engineStart(); break;
    case 'r': $car->runFor($command[1]); break;
    case '+': $car->load($command[1]); break;
    case '-': $car->unload($command[1]); break;
	case 'i': $car->showLongInfo(); break;
    case 'h': echo " \t0 stop engine
        1 start engine 
        r run for the given km 
        + load the given number of passengers into bus
        - unload the given number of passengers out of bus
	i show information (engine is off only) 
	e exit 
	h print this help\n";
			break;
}
}while($command[0]!='e');