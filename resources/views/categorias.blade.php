
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        @csrf
        <div>
            <label for="">nombre: </label>
           <input type="text" placeholder="hola" name="nombre">
        </div>
          <div><label for="nombre">nombre:</label><input type="text"  placeholder="nombre" name="nombre"></div>
        
                 <button>guardar</button>
        
    </form>
</body>
</html>