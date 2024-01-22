let carrito = {};

function agregarAlCarrito(producto, precio) {
    if (carrito[producto]) {
        carrito[producto].cantidad++;
    } else {
        carrito[producto] = { precio, cantidad: 1 };
    }
    actualizarCarrito();
    actualizarTotalCarrito();
}

function vaciarcarrito() {
    carrito = {};
    actualizarCarrito();
    actualizarTotalCarrito();
}

function quitarDelCarrito(producto) {
    if (carrito[producto] && carrito[producto].cantidad > 0) {
        carrito[producto].cantidad--;
        if (carrito[producto].cantidad === 0) {
            delete carrito[producto];
        }
        actualizarCarrito();
        actualizarTotalCarrito();
    }
}

function actualizarCarrito() {
    const itemsCarrito = document.getElementById('carrito');
    itemsCarrito.innerHTML = '';

    Object.keys(carrito).forEach(producto => {
        const div = document.createElement('div');
        div.innerHTML = `${producto} - Cantidad: ${carrito[producto].cantidad} <button onclick="quitarDelCarrito('${producto}')">Quitar uno</button>`;
        itemsCarrito.appendChild(div);
    });
}

function actualizarTotalCarrito() {
    const totalCarrito = document.getElementById('totalcarrito').getElementsByTagName('p')[0];
    let total = 0;

    Object.keys(carrito).forEach(producto => {
        total += carrito[producto].precio * carrito[producto].cantidad;
    });

    totalCarrito.textContent = 'Total: $' + total;
}

function toggleSidebar() {
    var carritoSidebar = document.getElementById("carrito-sidebar");

    if (carritoSidebar.style.right === "-300px") {
        carritoSidebar.style.right = "0";
    } else {
        carritoSidebar.style.right = "-300px";
    }
}

// Otras funciones relacionadas con el carrito (vaciarcarrito, agregarAlCarrito) pueden permanecer como están.
