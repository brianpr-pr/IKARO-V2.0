<?php include "./../utility/connector.php"?>
<?php include "../includes/subpaginas/carro/head_carro.php"?>
<?php include "../includes/body_pages.php"?>
<div id="carro-main-container">
    <div id="titular-carrito">
        <h2 id="titulo-carrito">Carro de compra</h2>
    </div>

    <div id="productos-en-carro">
        <div class="item-en-carro">
            <div class="info-item">
                <img class="info-item-imagen" src="./../productos/stock_uno.jpg">
                <div class="info-item-texto">
                    <h4>Green Tea</h4>
                    <h5>Precio</h5>
                </div>
            </div>
            <div class="acciones-item">
                <div class="acciones-item-cantidad">
                    <div class="acciones-item-cantidad-texto">
                        <h4>Cantidad</h4>
                    </div>
                    <div class="acciones-item-cantidad-botones">
                        <button class="sumar-restar" type="button">-</button>
                        <button class="sumar-restar" type="button">+</button>
                    </div>
                </div>
                <div class="acciones-item-eliminar">
                    <button class="acciones-item-eliminar-boton" type="button">Eliminar</button>
                </div>
            </div>
        </div>
        
        
    </div>

    <div id="botones-acciones">
        <button class="botones-acciones-pagar" type="button">Pagar</button>
        <button class="botones-acciones-seguir" type="button">Seguir mirando</button>
    </div>

</div>
<?php include "../includes/footer_pages.php"?>