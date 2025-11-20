<!DOCTYPE html>
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
        
        
           <div><label for="tipo">tipo:</label><input type="text"  placeholder="tipo" name="tipo"></div>

            <div><label for="precio">precio:</label><input type="number"  placeholder="precio" name="precio"></div>

             <div><label for="item_number">item:</label><input type="number"  placeholder="item_number" name="item"></div>

              <div><label for="categoria_id">categoria:</label><input type="number"  placeholder="categoria" name="categoria"></div>

               <div><label for="license_id">lisencia:</label><input type="number"  placeholder="license" name="license"></div>

                <div><label for="box_number">numero:</label><input type="number"  placeholder="box_number" name="box_number"></div>

                 <div><label for="imagen">imagen:</label><input type="text"  placeholder="imagen" name="imagen"></div>

               
                 <button>guardar</button>
        
    </form>
</body>
</html>