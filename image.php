<?php

$error = "";
$src = "http://cube.crider.co.uk/visualcube.php";
if($fmt != ''){
    $src .= "?fmt=" .$fmt;
}else{
        $src .= "?fmt=gif";
}
if($algorithm==''){
    //処理なし
}elseif($algtype=='alg'){
    $src .= "&alg=" .preg_replace("/( |　)/", "", $algorithm );
}elseif($algtype=='case'){
    $src .= "&case=" .preg_replace("/( |　)/", "", $algorithm );
}
if($arw != ''){
    $src .= "&arw=" .preg_replace("/( |　)/", "", $arw );
}
if($pzl != '' AND $pzl != '3'){
    $src .= "&pzl=" .$pzl;
}
if($size != '' AND $size != '128'){
    $src .= "&size=" .$size;
}
if($view != ''){
    $src .= "&view=" .$view;
}
if($stage != ''){
    $src .= "&stage=" .$stage;
    if($stage_axis != '' AND $stage_axis == '-'){
        $src .= "-" .$stage_axis;
    }
}
if($r1 != '' OR $r2 != '' OR $r3 != ''){
    if($r1axis=='ry1' AND $r1=='45' AND $r2axis=='rx2' AND $r2=='-34' AND $r3 ==''){
        //処理なし
    }else{
    $src .= "&r=";
        if($r1 != '' AND $r1 != 0){
            switch($r1axis){
                case rx1: $src .= "x"; break;
                case ry1: $src .= "y"; break;
                case rz1: $src .= "z"; break;
            }
            $src .= $r1;
        }
        if($r2 != '' AND $r2 != 0){
            switch($r2axis){
                case rx2: $src .= "x"; break;
                case ry2: $src .= "y"; break;
                case rz2: $src .= "z"; break;
            }
            $src .= $r2;
        }
        if($r3 != '' AND $r3 != 0){
            switch($r3axis){
                case rx3: $src .= "x"; break;
                case ry3: $src .= "y"; break;
                case rz3: $src .= "z"; break;
            }
            $src .= $r3;
        }
    }
}
if($sch=='wcs'){
    switch ($sch_t){
        case white:
            switch ($sch_f){
                case white : $error .= "The color scheme is incorrect"; break;
                case yellow: $error .= "The color scheme is incorrect"; break;
                case red   : $src .= "&sch=wbrygo"; break;
                case blue  : $src .= "&sch=wobyrg"; break;
                case orange: $src .= "&sch=wgoybr"; break;
                case green : $src .= "&sch=wrgyob"; break;
            }
            break;
        case yellow:
            switch ($sch_f){
                case white : $error .= "The color scheme is incorrect"; break;
                case yellow: $error .= "The color scheme is incorrect"; break;
                case red   : $src .= "&sch=ygrwbo"; break;
                case blue  : break; // default
                case orange: $src .= "&sch=ybowgr"; break;
                case green : $src .= "&sch=yogwrb"; break;
            }
            break;
        case red:
            switch ($sch_f){
                case white : $src .= "&sch=rgwoby"; break;
                case yellow: $src .= "&sch=rbyogw"; break;
                case red   : $error .= "The color scheme is incorrect"; break;
                case blue  : $src .= "&sch=rwboyg"; break;
                case orange: $error .= "The color scheme is incorrect"; break;
                case green : $src .= "&sch=rygowb"; break;
            }
            break;
        case blue:
            switch ($sch_f){
                case white : $src .= "&sch=brwgoy"; break;
                case yellow: $src .= "&sch=boygrw"; break;
                case red   : $src .= "&sch=byrgwo"; break;
                case blue  : $error .= "The color scheme is incorrect"; break;
                case orange: $src .= "&sch=bwogyr"; break;
                case green : $error .= "The color scheme is incorrect"; break;
            }
            break;
        case orange:
            switch ($sch_f){
                case white : $src .= "&sch=obwrgy"; break;
                case yellow: $src .= "&sch=ogyrbw"; break;
                case red   : $error .= "The color scheme is incorrect"; break;
                case blue  : $src .= "&sch=oybrwg"; break;
                case orange: $error .= "The color scheme is incorrect"; break;
                case green : $src .= "&sch=owgryb"; break;
            }
            break;
        case green:
            switch ($sch_f){
                case white : $src .= "&sch=gowbry"; break;
                case yellow: $src .= "&sch=grybow"; break;
                case red   : $src .= "&sch=gwrbyo"; break;
                case blue  : $error .= "The color scheme is incorrect"; break;
                case orange: $src .= "&sch=gyobwr"; break;
                case green : $error .= "The color scheme is incorrect"; break;
            }
            break;
    }
}elseif($sch=='jcs'){
    switch ($sch_t){
        case white:
            switch ($sch_f){
                case white : $error .= "The color scheme is incorrect"; break;
                case yellow: $src .= "&sch=woybrg"; break;
                case red   : $src .= "&sch=wyrbgo"; break;
                case blue  : $error .= "The color scheme is incorrect"; break;
                case orange: $src .= "&sch=wgobyr"; break;
                case green : $src .= "&sch=wrgboy"; break;
            }
            break;
        case yellow:
            switch ($sch_f){
                case white : $src .= "&sch=yrwgob"; break;
                case yellow: $error .= "The color scheme is incorrect"; break;
                case red   : $src .= "&sch=ybrgwo"; break;
                case blue  : $src .= "&sch=yobgrw"; break;
                case orange: $src .= "&sch=ywogbr"; break;
                case green : $error .= "The color scheme is incorrect"; break;
            }
            break;
        case red:
            switch ($sch_f){
                case white : $src .= "&sch=rgwoyb"; break;
                case yellow: $src .= "&sch=rwyobg"; break;
                case red   : $error .= "The color scheme is incorrect"; break;
                case blue  : $src .= "&sch=rybogw"; break;
                case orange: $error .= "The color scheme is incorrect"; break;
                case green : $src .= "&sch=rbgowy"; break;
            }
            break;
        case blue:
            switch ($sch_f){
                case white : $error .= "The color scheme is incorrect"; break;
                case yellow: $src .= "&sch=brywog"; break;
                case red   : $src .= "&sch=bgrwyo"; break;
                case blue  : $error .= "The color scheme is incorrect"; break;
                case orange: $src .= "&sch=byowgr"; break;
                case green : $src .= "&sch=bogwry"; break;
            }
            break;
        case orange:
            switch ($sch_f){
                case white : $src .= "&sch=oywrgb"; break;
                case yellow: $src .= "&sch=obyrwg"; break;
                case red   : $error .= "The color scheme is incorrect"; break;
                case blue  : $src .= "&sch=ogbryw"; break;
                case orange: $error .= "The color scheme is incorrect"; break;
                case green : $src .= "&sch=owgrby"; break;
            }
            break;
        case green:
            switch ($sch_f){
                case white : $src .= "&sch=gowyrb"; break;
                case yellow: $error .= "The color scheme is incorrect"; break;
                case red   : $src .= "&sch=gwrybo"; break;
                case blue  : $src .= "&sch=grbyow"; break;
                case orange: $src .= "&sch=gboywr"; break;
                case green : $error .= "The color scheme is incorrect"; break;
            }
            break;
    }
    if($error != ''){
        $src .= "&sch=brywog";
    }
}
if($bg != '' AND $bg != 'white'){
    $src .= "&bg=" .$bg;
}
if($cc != '' AND $cc != 'black'){
    $src .= "&cc=" .$cc;
}
if($dist != '' AND $ac != 'grey'){
    $src .= "&ac=" .$ac;
}
if($co != '' AND $co != '100'){
    $src .= "&co=" .$co;
}
if($fo != '' AND $fo != '100'){
    $src .= "&fo=" .$fo;
}
if($dist != '' AND $dist != '5'){
    $src .= "&dist=" .$dist;
}

echo "<img class='align-center' src=\"" .$src ."\">";
echo "<br><span class='text-danger'>" . $error . "</span>";
echo "<br>" . $src;

?>