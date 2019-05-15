<!DOCTYPE HTML>



<head>
</head>

<body>
	<form action="chat.php" method="post">
		<input type="text"><br>
		<input type="password" placeholder="Password"><br>
		<input type="submit">
</form>

<div id="rooty"></div>
<script>
function doing(){
	document.getElementById('rooty').innerHTML = "clicked";
}
</script>

<button onclick ="doing()">Clickme</button>
<p>Is there a space before this?</p>

</body>
