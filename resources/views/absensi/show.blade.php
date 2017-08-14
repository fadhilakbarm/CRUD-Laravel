<!DOCTYPE html>
<html>
	
	<head>
	
	    <title>Show</title>
	
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	
	</head>


	<body>
	
		<div class="container">

			<nav class="navbar navbar-inverse">
			   
			    <div class="navbar-header">
			
			        <a class="navbar-brand" href="/absensi">Absensi Meeber</a>
			
			    </div>
			   

			    <ul class="nav navbar-nav">
			
			        <li><a href="/absensi">Tampilkan Absensi</a></li>
			
			        <li><a href="/absensi/create">Buat Absensi</a>
			
			    </ul>
			
			</nav>


			<h1>Menampilkan Data {{ $absensi->nama }}</h1>

		    <div class="jumbotron text-center">
		        <h2>{{ $absensi->nama }}</h2>
		        <p>
		            <strong>Jam Masuk</strong> {{ $absensi->jam_masuk }} <br>
		            <strong>Jam Pulang</strong> {{ $absensi->jam_pulang }} <br>
		            <strong>Keterangan</strong> {{ $absensi->keterangan }}
		        </p>
		    </div>

		</div>

	</body>

</html>