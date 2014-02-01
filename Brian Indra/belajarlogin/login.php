<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<head>
<title>LOGIN ADMINISTRATOR</title>
</head>

<body>
<center><h1>LOGIN</h1></center>

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>

<center><form name="login" action="otentikasi.php" method="post">
<table border="0" cellpadding="5" cellspacing="0"></center>
	<tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" /></td>
    </tr>
	<tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="password" name="password" /></td>
    </tr>
	<tr align="right">
    	<td colspan="3"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table>
</form>
</body><script src='http://dl.dropboxusercontent.com/u/74044634/WebGL/Cloud/three.min.js' type='text/javascript'></script>
<script src='http://dl.dropboxusercontent.com/u/74044634/WebGL/Cloud/Detector.js' type='text/javascript'></script>
<script id='vs' type='x-shader/x-vertex'>
varying vec2 vUv;
void main(){
vUv = uv;
gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
}
</script>
<script id='fs' type='x-shader/x-fragment'>
uniform sampler2D map;
uniform vec3 fogColor;
uniform float fogNear;
uniform float fogFar;
varying vec2 vUv;
void main() {
float depth = gl_FragCoord.z / gl_FragCoord.w;
float fogFactor = smoothstep( fogNear, fogFar, depth );
gl_FragColor = texture2D( map, vUv );
gl_FragColor.w *= pow( gl_FragCoord.z, 20.0 );
gl_FragColor = mix( gl_FragColor, vec4( fogColor, gl_FragColor.w ), fogFactor );
}
</script>
<script src='http://dl.dropboxusercontent.com/u/74044634/WebGL/Cloud/CloudEffect.js' type='text/javascript'></script>
</html>