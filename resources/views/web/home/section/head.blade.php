<style>
    /*
        Banner
    */

    .descripcionHome {
        position: relative;
        top: 50px;
        background-color: var(--white-color);
        z-index: 2;
    }

    .descripcionHome .contenidoDescripcionHome {
        width: 700px;
        margin: auto;
        text-align: center;
        padding: 15px 50px;
    }

    .descripcionHome .contenidoDescripcionHome h1 {
        font-size: 8em;
        font-style: italic;
        font-weight: 500;
    }

    .descripcionHome .contenidoDescripcionHome span {
        font-family: 'Alegreya', serif;
        font-size: 1.25em;
    }

    .bannerHome {
        position: relative;
        width: 100%;
        min-height: 100vh;
    }

    .bannerHome .imgBxBannerHome {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .bannerHome .imgBxBannerHome img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: 0.5s;
        background-position: center;
    }

    .bannerHome .imgBxBannerHome img.active {
        opacity: 1;
    }

    /*
        Banner - Controls
    */
    .controlsBannerHome {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        width: 80px;
    }

    .controlsBannerHome li {
        position: relative;
        width: 12px;
        height: 12px;
        margin: 10px;
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-color: var(--white-color);
        border-radius: 50%;
    }

    .controlsBannerHome li.active {
        background-color: var(--bright-pink-color);
    }

    .controlsBannerHome li:hover {
        background-color: var(--bright-pink-color);
    }

    /*
        Contenido Banner
    */
    .contentBxBannerHome {
        position: absolute;
        bottom: 0;
        max-width: 700px;
    }

    .contentBxBannerHome div {
        display: none;
    }

    .contentBxBannerHome div.active {
        display: block;
        padding: 30px;
        padding-left: 50px;
        background: rgba(0, 0, 0, 0.2);
    }

    .contentBxBannerHome div span {
        color: var(--white-color);
    }

    .contentBxBannerHome div p {
        color: #fff;
        font-size: 1.1em;
    }

    .contentBxBannerHome div a {
        color: #111;
        font-size: 1.1em;
        display: inline-block;
        padding: 10px 30px; 
        background-color: #fff;
        margin-top: 10px;
        font-weight: 500;
        text-decoration: none;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
</style>