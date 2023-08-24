const searchInput = document.getElementById('searchInput');
const productsContainer = document.getElementById('productsContainer');
console.log(products);

// Función para mostrar todos los productos
function displayAllProducts() {
  productsContainer.innerHTML = "";
  
  products.forEach(product => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('product');
    productDiv.textContent = product[2];
    // Crear el elemento img
    const imgElement = document.createElement('img');
    // Configurar el atributo src con la URL de la imagen
    imgElement.src = '../../../img/' + product[4];
    imgElement.style.width = '40px';
    // Agregar la imagen al div del producto
    productDiv.appendChild(imgElement);
   
    productsContainer.appendChild(productDiv);
  });
}

// Función para filtrar los productos según el término de búsqueda
function filterProducts() {
  const searchTerm = searchInput.value.toLowerCase();

  productsContainer.innerHTML = "";

  products.filter(product => product[2].toLowerCase().includes(searchTerm))
    .forEach(product => {
      const productDiv = document.createElement('div');
      productDiv.classList.add('product');
      productDiv.textContent = product[2];

      // Crear el elemento img
    const imgElement = document.createElement('img');
    // Configurar el atributo src con la URL de la imagen
    imgElement.src = '../' + product[4];
    imgElement.style.width = '40px';
    // Agregar la imagen al div del producto
    productDiv.appendChild(imgElement);

      productsContainer.appendChild(productDiv);
    });
}


searchInput.addEventListener('keyup', filterProducts);

// Mostrar todos los productos al cargar la página
displayAllProducts();