<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main class="research-area">
  <div class="container"  id="full-width-tool-header">
    <div>
      <div class="intro">
        <h1>Tools</h1>
        <h4><i class="fa fa-info-circle"></i></h4><h6>New ones added every so often.<br>Simple, but handy. See how to include them in your code.</h6>
      </div>
    </div>
  </div>
  <div class="container tool-row">
    <div class="row">
      <div class="col-md-6">
        <label for="colorPicker" class="tool-label">Color Picker</label>
        <p class="tool-p">Click on the box, pick a color and view its <strong>hsl</strong> & <strong>rgb</strong> numbers!<br>For <strong>hex</strong> codes click <a href="https://www.rgbtohex.net/" target="_blank" class="basic-color">here</a>.</p>
        <div  id="colorPicker">
          <input type="color"name="colorPicker" value="#424242">
        </div>
      </div>
      <div class="col-md-6">
        <!--Source: http://www.instructables.com/id/How-to-make-a-simple-calculator-in-html/-->
        <label for="calculator" class="tool-label">Calculator</label>
        <p class="tool-p">Wanna make some rough calculations? You can use this one!</p>
        <div id="calculator">
          <form name="calculator">
          <p>
            <input type="textfield" name="ans" value="" style="width: 194px; height: 40px" disabled>
          </p>
          <p>
            <input type="button" value="1" onclick="document.calculator.ans.value+='1'" style="width: 62px; height: 35px">
            <input type="button" value="2" onclick="document.calculator.ans.value+='2'" style="width: 62px; height: 35px">
            <input type="button" value="3" onclick="document.calculator.ans.value+='3'" style="width: 62px; height: 35px">
          </p>
          <p>
            <input type="button" value="4" onclick="document.calculator.ans.value+='4'" style="width: 62px; height: 35px">
            <input type="button" value="5" onclick="document.calculator.ans.value+='5'" style="width: 62px; height: 35px">
            <input type="button" value="6" onclick="document.calculator.ans.value+='6'" style="width: 62px; height: 35px">
          </p>
          <p>
            <input type="button" value="7" onclick="document.calculator.ans.value+='7'" style="width: 62px; height: 35px">
            <input type="button" value="8" onclick="document.calculator.ans.value+='8'" style="width: 62px; height: 35px">
            <input type="button" value="9" onclick="document.calculator.ans.value+='9'" style="width: 62px; height: 35px">
          </p>
          <p>
            <input type="button" value="0" onclick="document.calculator.ans.value+='0'" style="width: 62px; height: 35px">
            <input type="button" value="+" onclick="document.calculator.ans.value+='+'" style="width: 62px; height: 35px">
            <input type="button" value="-" onclick="document.calculator.ans.value+='-'" style="width: 62px; height: 35px">
          </p>
          <p>
            <input type="button" value="=" onclick="document.calculator.ans.value=eval(document.calculator.ans.value)" style="width: 62px; height: 35px">
            <input type="button" value="*" onclick="document.calculator.ans.value+='*'" style="width: 62px; height: 35px">
            <input type="button" value="/" onclick="document.calculator.ans.value+='/'" style="width: 62px; height: 35px">
          </p>
          <p>
            <input type="reset" value="Reset" style="width: 194px; height: 35px">
          </p>
          </form>
        </div>
      </div>
    </div>
    <!--<div class="row">
      <div class="col-md-6">
        <label for="calendar" class="tool-label">Calendar</label>
        <p class="tool-p">Click on the box, pick a color and view its <strong>hsl</strong> & <strong>rgb</strong> numbers!<br>For <strong>hex</strong> codes click <a href="https://www.rgbtohex.net/" target="_blank" class="basic-color">here</a>.</p>
        <div  id="calendar">
          <input type="date"name="calendar" value="2018-01-01" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
        </div>
      </div>
      <div class="col-md-6"></div>
    </div>-->
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
