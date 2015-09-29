<?php
require_once("parameter.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VisualCube Editor</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

  </head>
  <body>
  <?php include_once("analyticstracking.php") ?>

  <div class="container">
    <ol class="breadcrumb">
      <li><a href="http://roudai.net">roudai.net</a></li>
      <li>VisualCube Editor</li>
    </ol>
    <div class="pull-right">
      <a href="http://cube.crider.co.uk/visualcube.php">VisualCube</a><br />
      <a href="https://github.com/roudai/VisualCubeEditor">GitHub</a>
    </div>
  </div>
  
  <div class="text-center">
    <?php include 'image.php'; ?>
  </div>

  <div class="container">
    <form action="" method="get">
      
    <div class="text-center">
      <button type="submit" class="btn btn-primary">submit</button>
    </div>
    
    <div class="container">
      <label for="algtype">Algorithm</label>
      <div class="radio">
        <label><input type="radio" name="algtype" value="alg" <?php if($algtype=='' OR $algtype=='alg') echo checked; ?>>Algorithm to apply</label>
        <label><input type="radio" name="algtype" value="case" <?php if($algtype=='case') echo checked; ?>>Algorithm to solve case</label>
      </div>
      <input class="form-control" type="text" value="<?php if($algtype!='') echo $algorithm; ?>" name="algorithm">

      <label for="arw">Arrow Definition (Example:U0U2,U2U8,U8U0,R6R2R0-s8-i5-yellow)</label>
      <input class="form-control" type="text" value="<?php if($arw!='') echo $arw; ?>" name="arw">
      
  		<label for="fmt">Image Format</label>
    	<SELECT class = "form-control" name = "fmt">
        <OPTION value="png" <?php if($fmt=='png') echo selected; ?>>png</OPTION>
        <OPTION value="gif" <?php if($fmt=='' OR $fmt=='gif') echo selected; ?>>gif</OPTION>
        <OPTION value="jpg" <?php if($fmt=='jpg') echo selected; ?>>jpg</OPTION>
        <OPTION value="svg" <?php if($fmt=='svg') echo selected; ?>>svg</OPTION>
        <OPTION value="tiff" <?php if($fmt=='tiff') echo selected; ?>>tiff</OPTION>
        <OPTION value="icon" <?php if($fmt=='icon') echo selected; ?>>icon</OPTION>
      </SELECT>
    
      <label for="fmt">Puzzle Type</label>
    	<SELECT class = "form-control" name = "pzl">
        <OPTION value="1" <?php if($pzl==1) echo selected; ?>>1</OPTION>
        <OPTION value="2" <?php if($pzl==2) echo selected; ?>>2</OPTION>
        <OPTION value="3" <?php if($pzl=='' OR $pzl==3) echo selected; ?>>3</OPTION>
        <OPTION value="4" <?php if($pzl==4) echo selected; ?>>4</OPTION>
        <OPTION value="5" <?php if($pzl==5) echo selected; ?>>5</OPTION>
        <OPTION value="6" <?php if($pzl==6) echo selected; ?>>6</OPTION>
        <OPTION value="7" <?php if($pzl==7) echo selected; ?>>7</OPTION>
        <OPTION value="8" <?php if($pzl==8) echo selected; ?>>8</OPTION>
        <OPTION value="9" <?php if($pzl==9) echo selected; ?>>9</OPTION>
        <OPTION value="10" <?php if($pzl==10) echo selected; ?>>10</OPTION>
      </SELECT>
      
      <label for="size">Size of generated image</label>
      <input class="form-control" type="number" min="1" max="1024" step="1" value='<?php if($size==''){echo 128;}else{echo $size;} ?>' name="size">
      
      <label for="view">Special View</label>
    	<SELECT class = "form-control" name = "view">
    	  <OPTION value="">-</OPTION>
        <OPTION value="plan" <?php if($view=='plan') echo selected; ?>>view</OPTION>
        <OPTION value="trans" <?php if($view=='trans') echo selected; ?>>trans</OPTION>
      </SELECT>
      
      <label for="stage">Stage Mask</label>
      <div class="row">
        <div class="col-xs-12 col-md-8">
        	<SELECT class = "form-control" name = "stage">
        	  <OPTION value="">-</OPTION>
            <OPTION value="fl" <?php if($stage=='fl') echo selected; ?>>FL</OPTION>
            <OPTION value="f2l" <?php if($stage=='f2l') echo selected; ?>>F2L</OPTION>
            <OPTION value="ll" <?php if($stage=='ll') echo selected; ?>>LL</OPTION>
            <OPTION value="cll" <?php if($stage=='cll') echo selected; ?>>CLL</OPTION>
            <OPTION value="ell" <?php if($stage=='ell') echo selected; ?>>ELL</OPTION>
            <OPTION value="oll" <?php if($stage=='oll') echo selected; ?>>OLL</OPTION>
            <OPTION value="coll" <?php if($stage=='coll') echo selected; ?>>OCLL</OPTION>
            <OPTION value="oell" <?php if($stage=='oell') echo selected; ?>>OELL</OPTION>
            <OPTION value="coll" <?php if($stage=='coll') echo selected; ?>>COLL</OPTION>
            <OPTION value="ocell" <?php if($stage=='ocell') echo selected; ?>>OCELL</OPTION>
            <OPTION value="wv" <?php if($stage=='wv') echo selected; ?>>WV</OPTION>
            <OPTION value="vh" <?php if($stage=='vh') echo selected; ?>>VH</OPTION>
            <OPTION value="els" <?php if($stage=='els') echo selected; ?>>ELS</OPTION>
            <OPTION value="cls" <?php if($stage=='cls') echo selected; ?>>CLS</OPTION>
            <OPTION value="cmll" <?php if($stage=='cmll') echo selected; ?>>CMLL</OPTION>
            <OPTION value="cross" <?php if($stage=='cross') echo selected; ?>>CROSS</OPTION>
            <OPTION value="f2l_3" <?php if($stage=='f2l_3') echo selected; ?>>F2L#3</OPTION>
            <OPTION value="f2l_2" <?php if($stage=='f2l_2') echo selected; ?>>F2L#2</OPTION>
            <OPTION value="f2l_sm" <?php if($stage=='f2l_sm') echo selected; ?>>F2L SM</OPTION>
            <OPTION value="f2l_1" <?php if($stage=='f2l_1') echo selected; ?>>F2L#1</OPTION>
            <OPTION value="f2b" <?php if($stage=='f2b') echo selected; ?>>F2B</OPTION>
            <OPTION value="line" <?php if($stage=='line') echo selected; ?>>line</OPTION>
            <OPTION value="2x2x2" <?php if($stage=='2x2x2') echo selected; ?>>2x2x2</OPTION>
            <OPTION value="2x2x3" <?php if($stage=='2x2x3') echo selected; ?>>2x2x3</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-4">
        	<SELECT class = "form-control" name = "stage_axis">
        	  <OPTION value="-" <?php if($stage_axis=='' OR $stage_axis=='-') echo selected; ?>>-</OPTION>
          	<OPTION value="x" <?php if($stage_axis=='x') echo selected; ?>>x</OPTION>
          	<OPTION value="x'" <?php if($stage_axis=='xp') echo selected; ?>>x'</OPTION>
          	<OPTION value="x2" <?php if($stage_axis=='x2') echo selected; ?>>x2</OPTION>
            <OPTION value="y" <?php if($stage_axis=='y') echo selected; ?>>y</OPTION>
            <OPTION value="y'" <?php if($stage_axis=='yp') echo selected; ?>>y'</OPTION>
            <OPTION value="y2" <?php if($stage_axis=='y2') echo selected; ?>>y2</OPTION>
            <OPTION value="z" <?php if($stage_axis=='z') echo selected; ?>>z</OPTION>
            <OPTION value="z'" <?php if($stage_axis=='zp') echo selected; ?>>z'</OPTION>
            <OPTION value="z2" <?php if($stage_axis=='z2') echo selected; ?>>z2</OPTION>
          </SELECT>
        </div>
        
      </div>

      <label>Rotation Sequence</label>
      <div class="row">
        <div class="col-xs-12 col-md-2">
        	<SELECT class = "form-control" name = "r1axis">
          	<OPTION value="rx1" <?php if($r1axis=='rx1') echo selected; ?>>x</OPTION>
            <OPTION value="ry1" <?php if($r1axis=='' OR $r1axis=='ry1') echo selected; ?>>y</OPTION>
            <OPTION value="rz1" <?php if($r1axis=='rz1') echo selected; ?>>z</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-2">
          <input class="form-control" type="number" min="-180" max="180" step="1" value='<?php if($r1=='' OR r1=='45'){echo 45;}else{echo $r1;} ?>' name="r1">
        </div>
        <div class="col-xs-12 col-md-2">
        	<SELECT class = "form-control" name = "r2axis">
        	  <OPTION value="rx2" <?php if($r2axis=='' OR $r2axis=='rx2') echo selected; ?>>x</OPTION>
            <OPTION value="ry2" <?php if($r2axis=='ry2') echo selected; ?>>y</OPTION>
            <OPTION value="rz2" <?php if($r2axis=='rz2') echo selected; ?>>z</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-2">
          <input class="form-control" type="number" min="-180" max="180" step="1" value='<?php if($r2=='' OR r2=='-34'){echo -34;}else{echo $r2;} ?>' name="r2">
        </div>
        <div class="col-xs-12 col-md-2">
        	<SELECT class = "form-control" name = "r3axis">
        	  <OPTION value="rx3" <?php if($r3axis=='rx3') echo selected; ?>>x</OPTION>
            <OPTION value="ry3" <?php if($r3axis=='ry3') echo selected; ?>>y</OPTION>
            <OPTION value="rz3" <?php if($r3axis=='' OR $r3axis=='rz3') echo selected; ?>>z</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-2">
          <input class="form-control" type="number" min="-180" max="180" step="1" value='<?php if($r3==''){echo '';}else{echo $r3;} ?>' name="r3">
        </div>
      </div>

      
      <div class="row">
        <div class="col-xs-12 col-md-6">
        <label>Colour Scheme</label>
        	<SELECT class = "form-control" name = "sch">
            <OPTION value="wcs" <?php if($sch=='' OR $sch=='wcs') echo selected; ?>>Western Colour Scheme</OPTION>
            <OPTION value="jcs" <?php if($sch=='jcs') echo selected; ?>>Japanese Colour Scheme</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-3">
          <label>top</label>
          <SELECT class = "form-control" name = "sch_t">
            <OPTION value="white" <?php if($sch_t=='white') echo selected; ?>>White</OPTION>
            <OPTION value="yellow" <?php if($sch_t=='' OR $sch_t=='yellow') echo selected; ?>>Yellow</OPTION>
            <OPTION value="red" <?php if($sch_t=='red') echo selected; ?>>Red</OPTION>
            <OPTION value="blue" <?php if($sch_t=='blue') echo selected; ?>>Blue</OPTION>
            <OPTION value="orange" <?php if($sch_t=='orange') echo selected; ?>>Orange</OPTION>
            <OPTION value="green" <?php if($sch_t=='green') echo selected; ?>>Green</OPTION>
          </SELECT>
        </div>
        <div class="col-xs-12 col-md-3">
          <label>front</label>
          <SELECT class = "form-control" name = "sch_f">
            <OPTION value="white" <?php if($sch_f=='' OR $sch_f=='white') echo selected; ?>>White</OPTION>
            <OPTION value="yellow" <?php if($sch_f=='yellow') echo selected; ?>>Yellow</OPTION>
            <OPTION value="red" <?php if($sch_f=='red') echo selected; ?>>Red</OPTION>
            <OPTION value="blue" <?php if($sch_f=='' OR $sch_f=='blue') echo selected; ?>>Blue</OPTION>
            <OPTION value="orange" <?php if($sch_f=='orange') echo selected; ?>>Orange</OPTION>
            <OPTION value="green" <?php if($sch_f=='green') echo selected; ?>>Green</OPTION>
          </SELECT>
        </div>
      </div>

      <label for="bg">Background Colour of image</label>
    	<SELECT class = "form-control" name = "bg">
        <OPTION value="white">white</OPTION>
    	  <OPTION value="black" <?php if($bg=='black') echo selected; ?>>black</OPTION>
        <OPTION value="dgrey" <?php if($bg=='dgrey') echo selected; ?>>dgrey</OPTION>
        <OPTION value="grey" <?php if($bg=='grey') echo selected; ?>>grey</OPTION>
        <OPTION value="silver" <?php if($bg=='silver') echo selected; ?>>silver</OPTION>
        <OPTION value="yellow" <?php if($bg=='yellow') echo selected; ?>>yellow</OPTION>
        <OPTION value="red" <?php if($bg=='red') echo selected; ?>>red</OPTION>
        <OPTION value="orange" <?php if($bg=='orange') echo selected; ?>>orange</OPTION>
        <OPTION value="purple" <?php if($bg=='purple') echo selected; ?>>purple</OPTION>
        <OPTION value="pink" <?php if($bg=='pink') echo selected; ?>>pink</OPTION>
      </SELECT>
      
      <label for="cc">Cube Colour</label>
    	<SELECT class = "form-control" name = "cc">
    	  <OPTION value="black">black</OPTION>
        <OPTION value="white" <?php if($cc=='white') echo selected; ?>>white</OPTION>
        <OPTION value="dgrey" <?php if($cc=='dgrey') echo selected; ?>>dgrey</OPTION>
        <OPTION value="grey" <?php if($cc=='grey') echo selected; ?>>grey</OPTION>
        <OPTION value="silver" <?php if($cc=='silver') echo selected; ?>>silver</OPTION>
        <OPTION value="yellow" <?php if($cc=='yellow') echo selected; ?>>yellow</OPTION>
        <OPTION value="red" <?php if($cc=='red') echo selected; ?>>red</OPTION>
        <OPTION value="orange" <?php if($cc=='orange') echo selected; ?>>orange</OPTION>
        <OPTION value="purple" <?php if($cc=='purple') echo selected; ?>>purple</OPTION>
        <OPTION value="pink" <?php if($cc=='pink') echo selected; ?>>pink</OPTION>
      </SELECT>

      <label for="ac">Default Arrow Colour</label>
    	<SELECT class = "form-control" name = "ac">
    	  <OPTION value="grey">grey</OPTION>
    	  <OPTION value="black" <?php if($ac=='black') echo selected; ?>>black</OPTION>
        <OPTION value="white" <?php if($ac=='white') echo selected; ?>>white</OPTION>
        <OPTION value="dgrey" <?php if($ac=='dgrey') echo selected; ?>>dgrey</OPTION>
        <OPTION value="silver" <?php if($ac=='silver') echo selected; ?>>silver</OPTION>
        <OPTION value="yellow" <?php if($ac=='yellow') echo selected; ?>>yellow</OPTION>
        <OPTION value="red" <?php if($ac=='red') echo selected; ?>>red</OPTION>
        <OPTION value="orange" <?php if($ac=='orange') echo selected; ?>>orange</OPTION>
        <OPTION value="purple" <?php if($ac=='purple') echo selected; ?>>purple</OPTION>
        <OPTION value="pink" <?php if($ac=='pink') echo selected; ?>>pink</OPTION>
      </SELECT>
      
      <label for="co">Cube Opacity</label>
      <input class="form-control" type="number" min="0" max="100" step="1" value='<?php if($co==''){echo 100;}else{echo $co;} ?>' name="co">
 
      <label for="fo">Facelet Opacity</label>
      <input class="form-control" type="number" min="0" max="100" step="1" value='<?php if($fo==''){echo 100;}else{echo $fo;} ?>' name="fo">
     
      <label for="dist">Projection Distance</label>
      <input class="form-control" type="number" min="0" max="100" step="1" value='<?php if($dist==''){echo 5;}else{echo $dist;} ?>' name="dist">
      
    </div>

  
    </form>
  </div>
    

  </body>
</html>