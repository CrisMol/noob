<section class="descripcionHome">
    <div class="contenidoDescripcionHome">
        <h2>Somos una empresa Ecuatoriana dedicada a la venta de productos tecnológicos, hogar, juguetes y otros con la mejor asesoría del mercado.</h2>
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