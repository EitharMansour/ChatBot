<html>
<head><link rel="stylesheet" href="StyleTask.css"> </head>
<body>

<form  action="RangeSlider.php" method = "POST" >

<div class="container">
<div class="slidecontainer">

<h1>Control Robot Arm </h1>

<div class="text">

<p>(<span id="value1"name="value1" ></span> θ)  :المحرك ١ </p>
<input type="range" name="engine1" min="1" max="180" value="90" class="slider" id="myRange1">

<p>(<span id="value2" name="value2"></span> θ)  :المحرك ٢ </p>
<input type="range" name="engine2" min="1" max="180" value="90" class="slider" id="myRange2">

<p>(<span id="value3"name="value3"></span> θ)  :المحرك ٣ </p>
<input type="range" name="engine3" min="1" max="180" value="90" class="slider" id="myRange3">

<p>(<span id="value4" name="value4"></span> θ)  : المحرك ٤</p>
<input type="range" name="engine4" min="1" max="180" value="90" class="slider" id="myRange4">

<p>(<span id="value5" name="value5" ></span> θ)  :المحرك ٥ </p>
<input type="range" name="engine5" min="1" max="180" value="90" class="slider" id="myRange5">

<p>(<span id="value6" name="value6" ></span> θ)  :المحرك ٦ </p>
<input type="range" name="engine6" min="1" max="180" value="90" class="slider" id="myRange6">

<p>(<span id="value7"name="value7" ></span> θ)  :المحرك ٧ </p>
<input type="range" name="engine7" min="1" max="180" value="90" class="slider" id="myRange7">

</div>
<br><br>
<input type="submit" name="save" value="حفظ" >
<input type="submit" name="on"value="تشغيل" >

<script src="JavaScript.js"></script>
<?php
$mysqli = mysqli_connect("localhost","root","123456789","robotarm");

if (isset($_POST['save'])) {

$query="CREATE TABLE allengine(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
engine1 INT(3) ,
engine2 INT(3) ,
engine3 INT(3) ,
engine4 INT(3) ,
engine5 INT(3) ,
engine6 INT(3) ,
engine7 INT(3)
)";

$sql = "INSERT INTO allengine (engine1,engine2,engine3,engine4,engine5,engine6,engine7)VALUES
('".$_POST['engine1']."','".$_POST['engine2']."','".$_POST['engine3']."','".$_POST['engine4']."',
'".$_POST['engine5']."','".$_POST['engine6']."','".$_POST['engine7']."')";

   if (mysqli_query($mysqli, $sql)) {
			echo "تم حفظ البيانات";
		} else {
			echo "<br>" . mysqli_error($mysqli);
		}
}

if (isset($_POST['on'])) {

$query2="CREATE TABLE  workengine(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
on_off VARCHAR(3))";

$sql2 = "INSERT INTO workengine (on_off) VALUES ('on')";

	if (mysqli_query($mysqli, $sql2)) {
			echo "تم التشغيل";
		} else {
			echo "<br>" . mysqli_error($mysqli);
		}
}
?>
</div>
</div>
</form>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "2a342df2-9ff5-4ba2-aa9a-de4bfb3343dc", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "ce709502-59d2-4854-9e57-fc67a3b1ad45", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


</body>
</html>
