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


			<h1>Edit Data {{ $absensi->nama }}</h1>

		    <form action="/absensi/{{ $absensi->id }}" method="post">

            <p>Nama</p>
                <input type="text" value="{{ $absensi->nama }}" name="nama">

            <br>
            <p>Jam Masuk</p>    
                <input type="text" value="{{ $absensi->jam_masuk }}" name="jam_masuk">

            <p>Jam pulang</p>    
                <input type="text" value="{{ $absensi->jam_pulang }}" name="jam_pulang">
                
            <p>Keterangan</p>        
                <input type="text" value="{{ $absensi->keterangan }}" name="keterangan">                

            <br>
                <input type="submit" name="submit" value="Update">
            </br>            

            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT">

            </form>

		</div>

	</body>

</html>