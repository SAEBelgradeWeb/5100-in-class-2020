<?php
//echo "Copyright &copy; " . date('Y');
//$bd = strtotime("7 December 2020");
//$now = time();
////
//$diff = $bd - $now;
//
//$years =  abs($diff / 24 /60 / 60 / 365);
//$calculated = $years * 24*60*60*365;
//$reminder = $diff - $calculated;
//
//$months = abs($reminder / 24/60/60/30);
//$calculated = $months * 24*60*60*30;
//$reminder = $reminder - $calculated;

//if(isset($_POST['name'])) {
//    echo $_POST['name'];
//}

//$months = 2;
//$days = 4;
//$years = 5;
//printf("It was before %s years, %s months and %s days", $years, $months, $days );
//$result = str_split("PHP is Cool");
//$result = ['P', 'H', 'P', " ", 'I', "s", " ", "C" , 'o', 'o', 'l'];

//foreach ($result as $index => $character) {
//    if($index == 0 || $index == 4 || $index == 7) {
//        $result[$index] = "<span style='color:red'>" . $character . '</span>';
//    }
//}

//echo filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); //boolean
//
//if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//    echo "Sve u redu";
//} else {
//    echo "Mail nije dobar";
//}
//$dir = scandir('originalni_folder');
////['.', '..', 'fajl1.kajd', 'dir2'....]
//$imena = ['vlada', 'nikola', 'neven'];
//
//foreach ($imena as $element) {
//    
//}
//foreach ($dir as $element) {
//    if (is_file($element)) {
//        copy($element, "novifolder/" . $element);
//    }
//}
//copy('jedafajl.txt', 'novifolder/jedanfajl.txt');

//$ar = scandir('.');
//
//var_dump($ar);
for($i = 0; $i < 10; $i++) {
        $ts1 = strtotime("1st January 2020 Wednesday +$i weeks");
        $datum1 = date('d M Y', $ts1);
        if($datum1 != '01 Jan 2020') echo $datum1 . "\n";
}