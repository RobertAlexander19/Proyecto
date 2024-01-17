document.querySelector('#agregar-producto').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting
    document.getElementById('productos-espejo').style.display = 'block';
  });
  
  document.querySelector('#productos-espejo button#agregar-producto-espejo').addEventListener('click', function() {
    document.getElementById('productos-espejo').style.display = 'none';
  });
  
  const productos = [
    {
      nombre: 'Producto 1',
      cantidad: 10,
      precio: 100
    },
    {
      nombre: 'Producto 2',
      cantidad: 5,
      precio: 200
    },
    // Agrega más productos aquí
  ];

  const tablaProductos = document.getElementById('tabla-productos');

  // Crea los títulos de la tabla
  const trTitulos = document.createElement('tr');
  const tdNombre = document.createElement('td');
  tdNombre.textContent = 'Nombre';
  trTitulos.appendChild(tdNombre);
  const tdCantidad = document.createElement('td');
  tdCantidad.textContent = 'Cantidad Disponible';
  trTitulos.appendChild(tdCantidad);
  const tdPrecio = document.createElement('td');
  tdPrecio.textContent = 'Precio';
  trTitulos.appendChild(tdPrecio);
  tablaProductos.appendChild(trTitulos);

  productos.forEach(function(producto) {
    const tr = document.createElement('tr');

    const tdNombre = document.createElement('td');
    tdNombre.textContent = producto.nombre;
    tr.appendChild(tdNombre);

    const tdCantidad = document.createElement('td');
    tdCantidad.textContent = producto.cantidad;
    tr.appendChild(tdCantidad);

    const tdPrecio = document.createElement('td');
    tdPrecio.textContent = '$' + producto.precio;
    tr.appendChild(tdPrecio);

    const tdAgregar = document.createElement('td');
    const inputAgregar = document.createElement('input');
    inputAgregar.type = 'number';
    inputAgregar.min = '1';
    inputAgregar.max = producto.cantidad;
    inputAgregar.value = '1';
    tdAgregar.appendChild(inputAgregar);
    tr.appendChild(tdAgregar);

    tablaProductos.appendChild(tr);
  });

  document.querySelector('#agregar-producto').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the form from submitting
    document.getElementById('productos-espejo').style.display = 'block';
  });

  document.querySelector('#productos-espejo button#agregar-producto-espejo').addEventListener('click', function() {
    document.getElementById('productos-espejo').style.display = 'none';
  });