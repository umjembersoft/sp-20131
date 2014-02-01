<?php 
include('cek-login.php');
?>
<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?>

<p><form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="username" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" name="password" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Fullname</td>
        	<td>:</td>
        	<td><input type="text" name="fullname" maxlength="100" required="required" /></td>
        </tr>
    	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" name="email" required="required" /></td>
        </tr>
    	<tr>
        	<td>Agama</td>
        	<td>:</td>
        	<td><input type="text" name="agama" required="required" /></td>
        </tr>
    	<tr>
        	<td>Nomor HP</td>
        	<td>:</td>
        	<td><input type="text" name="no_hp" maxlength="14" required="required" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form></p>

<a href="view.php">Lihat Data</a> ||  <a href="logout.php">Logout</a>

</body>
<script src='http://dl.dropboxusercontent.com/u/74044634/WebGL/Cloud/three.min.js' type='text/javascript'></script>
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