<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repo</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="./script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>


</head>
<body>
    <header>
        <h1>tienda de funkos </h1>
    </header>
    <div class="comprar">
    <h2>Total de compras</h2>
    <h3>Items: <span id="items">0</span></h3>
    <h3>Total valor: USD <span id="monto">0</span></h3>
    <button id="pagar">Pagar</button>  
    <button id="borrar">borrar</button> 
</div>
    
    <main>

        <section class="funkos">

            <article>
              

                <h3>goku</h3>
                <div class = "concuchara">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrWZoXvlqYfwJbVUnOTp9z2fWmiIxi4ZfSHg&s">
                </div>

                <div>
                    <strong>quedan</strong>     <span>2</span>
                </div>

                     <div>
            <img src="${item.images.jpg.large_image_url}" alt="">
        </div>
        <button value="10">USD <span value="10">10</span></button>
            </article>
            


   <article>
              

                <h3>tinkerbela</h3>
                <div class = "concuchara">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROF2Y2DL5Ypmu8neEPqnrgrduQOG0JMmUISw&s">
                </div>

                <div>
                    <strong>quedan</strong>     <span>3</span>
                </div>

                     <div>
            <img src="${item.images.jpg.large_image_url}" alt="">
        </div>
        <button value="10">USD <span value="10">10</span></button>
            </article>





            
            <article>
              

                <h3>chaval</h3>
                <div class = "concuchara">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6uQ4JZHY-TFdUxqKnNXs_zoT4qdtDF2rGPg&s">
                </div>

                <div>
                    <strong>quedan</strong>     <span>9</span>
                </div>

                     <div>
            <img src="${item.images.jpg.large_image_url}" alt="">
        </div>
        <button value="10">USD <span value="10">10</span></button>
            </article>


              <article>
              

                <h3>chaval</h3>
                <div class = "concuchara">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5F6rn0nf8rWCb0TuCQW9dnPZ1Q9hTvUU5nA&s">
                </div>

                <div>
                    <strong>quedan</strong>     <span>4</span>
                </div>

                     <div>
            <img src="${item.images.jpg.large_image_url}" alt="">
        </div>
        <button value="10">USD <span value="10">10</span></button>
            </article>

       






        </section>

    </main>
    <footer>

       <button value="10"> </button>
        
        <span> yo &copy; 2028 </span>





    </footer>
</body>
</html>