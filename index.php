<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php

        //   function  myFirstFunction(){
        //       echo "Good Night"."<br>";
        //   }
        //   MyFirstFunction();
        //   $lastName="John";$firstName="Doe";
        //   function fullName(string $firstName,string $lastName) :string {
        //       return $firstName." ".$lastName;
        //   }
        //   $full=fullName($firstName,$lastName);
        //   var_dump($full);
 

        // function plus_1(&$val){
        //     return ++$val;
        // }
        // $i=4;
        // $ozgar=plus_1($i);
        // var_dump($ozgar);

        // Massivlar/Arrays
        // function dd($a){
        //    echo "<pre style=ʻwidth:100%ʻ;padding:10px;background-color:black;color:lightgreen;ʻ>";
        //    echo print_r($a);
        //    echo "</pre>";
        // }
        // $a1=[];//pustoy massiv
        // $b1=array();//pustoy massiv
        // $a1[0]="a";
        // $a1[1]="b";
        // $a1[2]="c";
        // $b1=array(1,2,3,4,5,6,7);
        // var_dump($a1,$b1);
        // dd($a1);
        // dd($b1);
        // $a2 = [
        //     "name" => "john",
        //     "surname" => "eldor",
        //     "age" => 25
        // ];
        // dd($a2["name"]);
        

        // // Array1
        // function toqlari($n){
        //     $massiv1=[];
        //     $massiv2=[];
        //     for($i=0;$i<$n;$i++){
        //         $x=rand(10,100);
        //         array_push($massiv1,$x);
        //         echo ($massiv1[$i]." ");
        //     }
        //     echo "<br>";
        //     for($i=0;$i<count($massiv1);$i++){
        //         if($massiv1[$i]%2===1){
        //             array_push($massiv2,$massiv1[$i]);
        //         }
        //        print ($massiv2[$i]." ");
        //     }
        //     for($i=0;$i<count($massiv2);$i++){
        //        print ($massiv2[$i]." ");
        //     }
        // }
        // toqlari(10);

// ------------------------------------------------------------------------------

        // Array2
        // function daraja($n){
        //     $massiv=[];
        //     for($i=0;$i<$n;$i++){
        //         array_push($massiv,pow(2,$i));
        //         echo $massiv[$i]." ";
        //     }
        // }
        // daraja(10);

// ------------------------------------------------------------------------------------
         
    // //    Array3
    // function  arifmetik($a,$d,$n){
    //     $massiv=[];
    //      $massiv[0]=$a;
    //      for($i=0;$i<$n;$i++){
    //          array_push($massiv,$massiv[$i]+$d);
    //          echo ($massiv[$i]." ");
    //      }
    // }
    // arifmetik(2,4,10);

//    ------------------------------------------------------

    // Array4
    // function  geometrik($a,$d,$n){
    //     $massiv=[];
    //      $massiv[0]=$a;
    //      for($i=0;$i<$n;$i++){
    //          array_push($massiv,$massiv[$i]*$d);
    //          echo ($massiv[$i]." ");
    //      }
    // }
    // geometrik(2,4,10);
// ------------------------------------------------------------------------

    // function  son($n){
    //     $x=floor($n/100);
    //     $y=(floor($n/10))%10;
    //     $z=$n%10;
    //     switch($x){
    //         case 1:echo "Bir yuz ";break;
    //         case 2:echo "Ikki yuz ";break;
    //         case 3:echo "Uch yuz ";break;
    //         case 4:echo "Toʻrt yuz ";break;
    //         case 5:echo "Besh yuz ";break;
    //         case 6:echo "Olti yuz ";break;
    //         case 7:echo "Yetti yuz ";break;
    //         case 8:echo "Sakkiz yuz ";break;
    //         case 9:echo "Toqqiz yuz ";break;
    //     }
    //     switch($y){
    //         case 1:echo "oʻn ";break;
    //         case 2:echo "yigirma ";break;
    //         case 3:echo "oʻttiz ";break;
    //         case 4:echo "qirq ";break;
    //         case 5:echo "ellik ";break;
    //         case 6:echo "oltmish ";break;
    //         case 7:echo "yetmish ";break;
    //         case 8:echo "sakson ";break;
    //         case 9:echo "toqson ";break;
    //     }
    //     switch($z){
    //         case 1:echo "bir";break;
    //         case 2:echo "ikki";break;
    //         case 3:echo "uch";break;
    //         case 4:echo "toʻrt";break;
    //         case 5:echo "besh";break;
    //         case 6:echo "olti";break;
    //         case 7:echo "yetti";break;
    //         case 8:echo "sakkiz";break;
    //         case 9:echo "toqqiz";break;
    //     }
    // }
    // son();


// --------------------------------------------------------------------------------



   //Array 5
   function fibonaci($n){
       $massiv=[];

       for ($i=0;$i<$n;$i++){
         if($i===0){
             array_push($massiv,0);
         }

         else if($i===1){
             array_push($massiv,1);
         }

         else if($i===2){
             array_push($massiv,1);
         }

         else{
             array_push($massiv,(($massiv[$i-1])+($massiv[$i-2])));
         }
         
         echo($massiv[$i]." ");
       }
   }
   fibonaci(20);

 
//-------------------------------------------------------------------------



// Array 6
//    function  array6($n,$a,$b){
//        $massiv=[];
//        $s=0;
//          if($n>2){
//              array_push($massiv,$a);
//              array_push($massiv,$b);
//              for($i=0;$i<$n;$i++){
//                 for($j=0;$j<count($massiv);$j++){
//                     $s+=$massiv[$j];
//                 }
//                 array_push($massiv,$s);
//                 $s=0;
//                 echo $massiv[$i]." ";
//              }
//          }
//          else{
//              echo "n kichik 2 dan";
//          }
//    }
//      array6(10,4,5);


//------------------------------------------------------------------------------


// array7
    //  function  teskari($n){
    //      $massiv=[];
    //    for($i=0;$i<$n;$i++){
    //     $x=rand(10,100);
    //     array_push($massiv,$x);
    //     echo $massiv[$i]." ";
    //    }
    //    echo "<br>";
    //    $y=array_reverse($massiv);
    //    for($i=0;$i<count($y);$i++){
    //         echo $y[$i]." ";
    //    }
    // //    for($i=0;$i<=count($massiv);$i++){
    // //        array_unshift($massiv,$massiv[count($massiv)-$i]); 
    // //        array_pop($massiv); 
    // //        echo $massiv[$i]." ";     
    // //     }
    //  }

    //  teskari(10);
     







       ?>
</body>
</html>