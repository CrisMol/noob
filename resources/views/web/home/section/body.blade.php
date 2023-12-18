<section class="descripcionHome">
    <div class="contenidoDescripcionHome">
        <h1>Noob</h1>
        <span>Compra sin Esfuerzo, Vive con Estilo: La mejor tecnología al alcance de tu mano</span>
    </div>
</section>

<section class="bannerHome">
    <div class="imgBxBannerHome">
        <img src="{{ asset('assets/img/home/gaming-products.jpg') }}" alt="" class="active">
        <img src="{{ asset('assets/img/home/minimalism-products.jpg') }}" alt="">
    </div>

    <div class="contentBxBannerHome">
        <div class="active">
            <h2>Slide Text One</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptates fuga doloremque ducimus, veritatis modi pariatur eligendi voluptatum temporibus omnis voluptate, nulla dolorum aliquid dolores eveniet incidunt reiciendis ipsa iusto!</p>
            <a href="#">Details</a>
        </div>
        <div>
            <h2>Slide Text Two</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptates fuga doloremque ducimus, veritatis modi pariatur eligendi voluptatum temporibus omnis voluptate, nulla dolorum aliquid dolores eveniet incidunt reiciendis ipsa iusto!</p>
            <a href="#">Details</a>
        </div>
    </div>

    <ul class="controlsBannerHome">
        <li onclick="prevSlideBannerHome(); prevSlideBannerHomeText(); nextControlsLiBannerHome(); prevControlsLiBannerHome();" class="active"></li>
        <li onclick="nextSlideBannerHome(); nextSlideBannerHomeText(); nextControlsLiBannerHome(); prevControlsLiBannerHome();"></li>
    </ul>
</section>