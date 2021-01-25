<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function downloadPage(Request $request)
    {
      $inputlink = $request['link'];
      $htmlstr = file_get_contents($inputlink);
      $html = str_split($htmlstr);
      $lenght = count($html);

      for ($i=0; $i < $lenght; $i++) {
          if ($html[$i]== '@'){
            $username = "";
            $i = $i +1;
              while ($html[$i] != ")") {
                $username = $username . $html[$i];
              $i++;
              }
              break;
          }
      }


      //taking profilepic


            function getlinkerpic($username)
            {

              $htmlstrpic = file_get_contents("https://www.instagram.com/".$username);
              $htmlpic = str_split($htmlstrpic);
              $lenghtpic = count($htmlpic);
              for ($i=0; $i < $lenghtpic; $i++) {
                  if (
                      $htmlpic[$i]== '<' &&
                      $htmlpic[$i + 1]== 'm' &&
                      $htmlpic[$i + 2]== 'e' &&
                      $htmlpic[$i + 3]== 't' &&
                      $htmlpic[$i + 4]== 'a' &&
                      $htmlpic[$i + 5]== ' ' &&
                      $htmlpic[$i + 6]== 'p' &&
                      $htmlpic[$i + 7]== 'r' &&
                      $htmlpic[$i + 8]== 'o' &&
                      $htmlpic[$i + 9]== 'p' &&
                      $htmlpic[$i + 10]== 'e' &&
                      $htmlpic[$i + 11]== 'r' &&
                      $htmlpic[$i + 12]== 't' &&
                      $htmlpic[$i + 13]== 'y' &&
                      $htmlpic[$i + 14]== '=' &&

                      $htmlpic[$i + 16]== 'o' &&
                      $htmlpic[$i + 17]== 'g' &&
                      $htmlpic[$i + 18]== ':' &&
                      $htmlpic[$i + 19]== 'i' &&
                      $htmlpic[$i + 20]== 'm' &&
                      $htmlpic[$i + 21]== 'a' &&
                      $htmlpic[$i + 22]== 'g' &&
                      $htmlpic[$i + 23]== 'e'
                  ){
                  $start = $i;
                  }

              }

              for ($i=$start; $i < $lenghtpic; $i++) {
                  if (
                      $htmlpic[$i]== '/' &&
                      $htmlpic[$i + 1]== '>'
                  ){
                  $finish = $i;
                  break;
                  }

              }



              for ($j=0; $j < $start+35; $j++) {
                  unset($htmlpic[$j]);
              }

              for ($j=$finish-2; $j < $lenghtpic; $j++) {
                  unset($htmlpic[$j]);
              }

              $i=0;
              foreach($htmlpic as $ht){
                  $arr[$i] = $ht;
                  $i++;
              }

              $linkerpic = implode( "" , $arr );
              return $linkerpic;
          };

      $linkerpic = getlinkerpic($username);




       for ($i=0; $i < $lenght; $i++) {
           if (
               $html[$i]== 'v' &&
               $html[$i + 1]== 'i' &&
               $html[$i + 2]== 'd' &&
               $html[$i + 3]== 'e' &&
               $html[$i + 4]== 'o' &&
               $html[$i + 5]== '/' &&
               $html[$i + 6]== 'm' &&
               $html[$i + 7]== 'p' &&
               $html[$i + 8]== '4'
           ){
               $tipe = "video";
           break;
           }else{
               $tipe = "gambar";
           }

       }

   switch ($tipe) {
       case 'gambar':

           for ($i=0; $i < $lenght; $i++) {
               if (
                   $html[$i]== '<' &&
                   $html[$i + 1]== 'm' &&
                   $html[$i + 2]== 'e' &&
                   $html[$i + 3]== 't' &&
                   $html[$i + 4]== 'a' &&
                   $html[$i + 5]== ' ' &&
                   $html[$i + 6]== 'p' &&
                   $html[$i + 7]== 'r' &&
                   $html[$i + 8]== 'o' &&
                   $html[$i + 9]== 'p' &&
                   $html[$i + 10]== 'e' &&
                   $html[$i + 11]== 'r' &&
                   $html[$i + 12]== 't' &&
                   $html[$i + 13]== 'y' &&
                   $html[$i + 14]== '=' &&

                   $html[$i + 16]== 'o' &&
                   $html[$i + 17]== 'g' &&
                   $html[$i + 18]== ':' &&
                   $html[$i + 19]== 'i' &&
                   $html[$i + 20]== 'm' &&
                   $html[$i + 21]== 'a' &&
                   $html[$i + 22]== 'g' &&
                   $html[$i + 23]== 'e'
               ){
               $start = $i;
               }

           }

           for ($i=$start; $i < $lenght; $i++) {
               if (
                   $html[$i]== '/' &&
                   $html[$i + 1]== '>'
               ){
               $finish = $i;
               break;
               }

           }



           for ($j=0; $j < $start+35; $j++) {
               unset($html[$j]);
           }

           for ($j=$finish-2; $j < $lenght; $j++) {
               unset($html[$j]);
           }

           $i=0;
           foreach($html as $ht){
               $arr[$i] = $ht;
               $i++;
           }

           $linker = implode( "" , $arr );
           $type = "image";
           $filename = "imgdata/" .time() . rand(100,999) . ".jpg";
           break;

       case 'video':

               for ($i=0; $i < $lenght; $i++) {
                   if (
                       $html[$i]== '<' &&
                       $html[$i + 1]== 'm' &&
                       $html[$i + 2]== 'e' &&
                       $html[$i + 3]== 't' &&
                       $html[$i + 4]== 'a' &&
                       $html[$i + 5]== ' ' &&
                       $html[$i + 6]== 'p' &&
                       $html[$i + 7]== 'r' &&
                       $html[$i + 8]== 'o' &&
                       $html[$i + 9]== 'p' &&
                       $html[$i + 10]== 'e' &&
                       $html[$i + 11]== 'r' &&
                       $html[$i + 12]== 't' &&
                       $html[$i + 13]== 'y' &&
                       $html[$i + 14]== '=' &&

                       $html[$i + 16]== 'o' &&
                       $html[$i + 17]== 'g' &&
                       $html[$i + 18]== ':' &&
                       $html[$i + 19]== 'v' &&
                       $html[$i + 20]== 'i' &&
                       $html[$i + 21]== 'd' &&
                       $html[$i + 22]== 'e' &&
                       $html[$i + 23]== 'o'
                   ){
                   $start = $i;
                   break;
                   }

               }

               for ($i=$start; $i < $lenght; $i++) {
                   if (
                       $html[$i]== '/' &&
                       $html[$i + 1]== '>'
                   ){
                   $finish = $i;
                   break;
                   }

               }



               for ($j=0; $j < $start+35; $j++) {
                   unset($html[$j]);
               }

               for ($j=$finish-2; $j < $lenght; $j++) {
                   unset($html[$j]);
               }

               $i=0;
               foreach($html as $ht){
                   $arr[$i] = $ht;
                   $i++;
               }

               $linker = implode( "" , $arr );

               $type = "video";

               // echo '<video controls="" autoplay="" name="media"><source src="'. $linker .'" type="video/mp4"></video>';
               $filename = "imgdata/" .time() . rand(100,999) . ".mp4";
               }


              file_put_contents( $filename, file_get_contents($linker));

     return view('home.downloadpage',compact(['linker','filename','username','linkerpic','type']));
    }


}
