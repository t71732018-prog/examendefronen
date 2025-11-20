const seccionFunkopops = document.querySelector(".funkos")


fetch("http://127.0.0.1:8000/api/funkos").then(
    function (peticion) {
        return peticion.json()
    }
).then(
    function (datos) {
        console.log(datos);

        const funko = datos.map(
            function (item) {
                return `<article>

        <div>
            <img src="${item.images.jpg.large_image_url}" alt="">
        </div>
        <button value="10">USD <span value="10">10</span></button>
    </article>`
            }
        )
        seccionFunkopops.insertAdjacentHTML("afterbegin", funko.join(""))
    }
)

const carrito = []
let total = 0
const items = document.querySelector("#items")
const monto = document.querySelector("#monto")
const pagar = document.querySelector("#pagar")
const borrar = document.querySelector("#borrar")

seccionFunkopops.addEventListener("click", function (evento) {
    const elemento = evento.target
    console.log(elemento, elemento.tagName);
    if (elemento.tagName === "BUTTON" || elemento.tagName === "SPAN") {
        //alert(elemento.value)
        carrito.push(parseInt(elemento.value))
        items.textContent = carrito.length
        console.log(carrito);
        total = 0
        for (let posicion = 0; posicion < carrito.length; posicion++) {
            total = total + carrito[posicion];
        }
        monto.textContent = total
    }
    
})

/*este para que salga elcosocuando */
pagar.addEventListener("click", function () {
    confetti({
        particleCount: 120,
        angle: 60,   
        spread: 100,    
        origin: { x: 0.5, y: 0.5 }, 
        colors: ['#ff6f61', '#4a90e2', '#50c878'] 
    });
    Swal.fire({
        title: "compra ishida",
        text: `gracias por esta plata ${items.textContent} gastaste ${monto.textContent}`,
        icon: "success"
    });
    monto.textContent = 0
    items.textContent = 0
})



/* const button = document.getElementById('confettiButton');


button.addEventListener('click', () => {
  
    

  
    confetti({
        particleCount: 120, 
        angle: 120,         
        spread: 100,   
        origin: { x: 0.5, y: 0.5 }, 
        colors: ['#ff6f61', '#4a90e2', '#50c878'] 
    });
});
 */






