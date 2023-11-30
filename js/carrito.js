                    <script>
                        // Simulación de la cantidad de elementos en el carrito
                        let cartItemCount = 0;

                        // Actualiza el contador en el ícono del carrito
                        function updateCartItemCount() {
                            document.getElementById('cartItemCount').innerText = cartItemCount;
                        }

                        // Evento al hacer clic en el botón del carrito
                        document.getElementById('cartButton').addEventListener('click', function() {
                            // Puedes cargar dinámicamente el contenido del carrito aquí si es necesario
                            // En este ejemplo, simplemente se muestra el modal y se actualiza el contador
                            $('#cartModal').modal('show');
                            updateCartItemCount();
                        });
                    </script>