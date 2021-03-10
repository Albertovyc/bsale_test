const addToShoppingCartButtons = document.querySelectorAll('.todo');
addToShoppingCartButtons.forEach(addToCartButton => {
    addToCartButton.addEventListener('click', addToCartClicked);
});

const mostrarCarrito =  document.querySelector('.mostrarCarrito');

function addToCartClicked(event) {
    const button = event.target;
   const item = button.closest('.columna');
   
   const itemTitle = item.querySelector('.columna .nombre').textContent;
   const itemPrice = item.querySelector('.columna .price').textContent;
   const itemImage = item.querySelector('.columna .imagen').src;
   

   addItemToShoppingCart(itemTitle, itemPrice, itemImage);
}

function addItemToShoppingCart(itemTitle, itemPrice, itemImage){
     const shoppingCartRow = document.createElement('section');
    const shoppingCartContent = `
            <section class="container" >
            <div class="columna">
            <h2>
			<img id="img-product"  src= ${itemImage} >
            </h2>
			<hr>
			<h2 > ${itemTitle}</h2>
			<p>${itemPrice}</p>
            </div>
            </section>
    `;
    shoppingCartRow.innerHTML = shoppingCartContent;
    mostrarCarrito.append(shoppingCartRow);

    updateShoppingCartTotal()

    
}

