<!DOCTYPE html>
<html>
	
	<head>
	
	    <title>Index</title>
	
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


			<h1>Semua Absensi</h1>
			
			@if (Session::has('message'))

			    <div class="alert alert-info">{{ Session::get('message') }}</div>
			
			@endif

			
			<table class="table table-striped table-bordered">
			    
			    <thead>
			    
			        <tr>
			            <td>ID</td>
			            <td>NAMA</td>
			            <td>JAM MASUK</td>
			            <td>JAM PULANG</td>
			            <td>KETERANGAN</td>
			            <td></td>           
			        </tr>
			    
			    </thead>
			    
			    <tbody>

				    @foreach($absensi as $a)

					    <tr>

					    	<td>{{$a->id}}</td>
					    	<td>{{$a->nama}}</td>
					        <td>{{$a->jam_masuk}}</td>
					        <td>{{$a->jam_pulang}}</td>
					        <td>{{$a->keterangan}}</td>		    
			            
				            <td>
				                
				              


				                <form action="/absensi/{{ $a->id }}" method="post">
				                	
				                	<a class="btn btn-small btn-success" href="/absensi/{{ $a->id }}">Show</a>
				                
				                	<a class="btn btn-small btn-info" href="/absensi/{{ $a->id }}/edit">Edit</a>
				                	
				                	<input class="btn btn-small btn-danger" type="submit" name="delete" value="delete">            					            					                
						            {{ csrf_field() }}

						            <input type="hidden" name="_method" value="DELETE">

					            </form>				                


				            </td>

				        </tr>

			    	@endforeach

			    </tbody>

			</table>

		</div>

	</body>

</html>