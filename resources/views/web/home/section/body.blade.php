<section class="descripcionHome">
    <div class="contenidoDescripcionHome">
        <h1>Noob</h1>
        <span>Compra sin <u>esfuerzo</u>, vive con <u>estilo</u></span>
        <br>
        <span>Adquiere los mejores <i>productos tecnológicos</i> en un solo lugar y recibelo en la puerta de tu <i>hogar</i></span>
    </div>
</section>

<section class="bannerHome">
    <div class="imgBxBannerHome">
        <img src="{{ asset('assets/img/home/set-up-minimalista.jpg') }}" alt="" class="active">
        <img src="{{ asset('assets/img/home/accesorios-de-domotico.jpg') }}" alt="">
    </div>

    <div class="contentBxBannerHome">
        <div class="active">
            <h2>Arma tu propio Set Up !!</h2>
            <p>Encuentra los mejores accesorios para armar tu propia estación de descanso, desde componentes para computadora, hasta gadgets tecnológicos.</p>
            <a href="#" class="boton">Ver Colección</a>
        </div>
        <div>
            <h2>Un hogar Inteligente</h2>
            <p>Haz que tu casa sea inteligente con los mejores productos de dómotica, verificados y recomendados por nuestros clientes.</p>
            <a href="#" class="boton">Ver Colección</a>
        </div>
    </div>

    <ul class="controlsBannerHome">
        <li onclick="prevSlideBannerHome(); prevSlideBannerHomeText(); nextControlsLiBannerHome(); prevControlsLiBannerHome();" class="active"></li>
        <li onclick="nextSlideBannerHome(); nextSlideBannerHomeText(); nextControlsLiBannerHome(); prevControlsLiBannerHome();"></li>
    </ul>
</section>