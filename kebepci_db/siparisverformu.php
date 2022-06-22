<html>
    <head>
    <title>Sipariş Sayfası</title>
  <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


         </head>

         <style>
  body {
    background-image: url('liste2.jpg');
       
        background-size: cover;
  }
</style>


    <body>
    <div class="jumbotron text-center">
    <div class="text-success">

    <form action="siparisver.php" method="post">
            <table border=1 class="table table-dark">
            <thead>
            <tr>
                <td>
                    yiyecekler
                </td>
                <td>
                    <input type="radio" name="yiyecekler" value="1,5 porsiyon iskender">
                    1,5 porsiyon iskender=140
                    <input type="radio" name="yiyecekler" value="1 porsiyon iskender">
                    1 porsiyon iskender=95
                    <input type="radio" name="yiyecekler" value="1,5 porsiyon pideli köfte">
                    1,5 porsiyon pideli köfte=110
                    <input type="radio" name="yiyecekler" value="1 porsiyon pideli köfte">
                    1 porsiyon pideli köfte=75
                   
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    içecekler
                </td>
                <td>
                    <input type="radio" name="icecekler" value="sira">
                    şıra = 20
                    <input type="radio" name="icecekler" value="kola">
                    kola = 15
                    <input type="radio" name="icecekler" value="fanta">
                    fanta = 15
                    <input type="radio" name="icecekler" value="ayran">
                 ayran = 15
                   
                </td>
            </tr>
            <tr>
                <td>
                    tatlılar
                </td>
                <td>
                    <input type="radio" name="tatlilar" value="k.pasa">
                    kemalpaşa = 25 
                    <input type="radio" name="tatlilar" value="kadayif">
                   sütlü kadayıf = 25
                    <input type="radio" name="tatlilar" value="sütlac">
                    fırın sütlaç =25
                    
                   
                </td>
            </tr>
            
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="kayit" value="Kaydet">
                </td>
            </tr>
            </tbody>
            </table>
    </form>
    </div>
</div>
    </body>
</html>