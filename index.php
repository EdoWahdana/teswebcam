<html>
<head>
	<title>WEBCAM</title>
</head>
<body>
	<h1 align="center">APA ANJG</h1>
	<video autoplay></video>

	<button id="stop">STOP</button>
	
	<button id="start">START</button>
<script>
	const constraints = {
		video: true
	};

	const video = document.querySelector('video');
	const stop = document.getElementById('stop');
	const start = document.getElementById('start');

	start.addEventListener('click', function(e) { 
		navigator.mediaDevices.getUserMedia(constraints).then((stream) => {video.srcObject = stream});
	});
	
	stop.addEventListener('click', function(e) {
		video.srcObject.getVideoTracks().forEach(track => track.stop());
	});
	
	function hasGetUserMedia() {
		return !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
	}

	if (hasGetUserMedia()) {
		alert('Berhasil');
	} else {
		alert('Gagal');			
	}
</script>
</body>

</html>
