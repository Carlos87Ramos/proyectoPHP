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
    imgElement.src = '/img/' + product[4];
    imgElement.style.width = '40px';
    // Agregar la imagen al div del producto
    productDiv.appendChild(imgElement);

      productsContainer.appendChild(productDiv);
    });
    
}





// Llama a la función para mostrar los productos
displayAllProducts();

searchInput.addEventListener('keyup', filterProducts);

// Mostrar todos los productos al cargar la página
displayAllProducts();
// Función para aumentar el tamaño de la div al pasar el cursor sobre ella
function increaseSizeOnHover(divElement) {
  divElement.addEventListener('mouseenter', function () {
    divElement.style.transform = 'scale(2)'; // Duplica el tamaño
    divElement.style.transition = 'transform 0.3s ease'; // Agrega una transición suave
  });

  divElement.addEventListener('mouseleave', function () {
    divElement.style.transform = 'scale(1)'; // Vuelve al tamaño original
  });
}



function displayAllProducts() {
  productsContainer.innerHTML = "";

  products.forEach(product => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('product');
    productDiv.textContent = product[2];

    // Resto del código para crear la imagen...

    // Agrega el manejador de eventos para cambiar el tamaño al pasar el cursor
    increaseSizeOnHover(productDiv);

    // Agrega botones de "Editar" y "Eliminar" a la parte inferior de la div
    const buttonContainer = document.createElement('div');
    buttonContainer.classList.add('button-container');

    const editButton = document.createElement('button');
    editButton.textContent = 'Editar';
    editButton.classList.add('edit-button');
    // Agrega aquí el manejador de eventos para el botón de editar si es necesario

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Eliminar';
    deleteButton.classList.add('delete-button');
    // Agrega aquí el manejador de eventos para el botón de eliminar si es necesario

    buttonContainer.appendChild(editButton);
    buttonContainer.appendChild(deleteButton);

    productDiv.appendChild(buttonContainer);

    productsContainer.appendChild(productDiv);
  });
}

// Llama a la función para mostrar los productos
displayAllProducts();
