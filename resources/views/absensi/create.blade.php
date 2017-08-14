<html>
    <head>

        <title>Create</title>
    
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

            <h1>Buat Absensi</h1>                    
            
            <form action="/absensi/create" method="post">

            <p>Nama</p>
                <input type="text" value="" name="nama">

            <br>
            <p>Jam Masuk</p>    
                <input type="text" value="" name="jam_masuk">

            <p>Jam pulang</p>    
                <input type="text" value="" name="jam_pulang">
                
            <p>Keterangan</p>        
                <input type="text" value="" name="keterangan">                

            <br>
                <input type="submit" name="submit" value="Create">
            </br>

            {{ csrf_field() }}

            </form>

        </div>
    
    </body>

</html>