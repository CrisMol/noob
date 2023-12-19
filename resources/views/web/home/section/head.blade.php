<style>
    /*
        Banner
    */

    .descripcionHome {
        position: relative;
        background-color: var(--white-color);
        z-index: 2;
    }

    .descripcionHome .contenidoDescripcionHome {
        width: 700px;
        margin: auto;
        text-align: center;
        padding: 15px 30px;
    }

    .descripcionHome .contenidoDescripcionHome h1 {
        font-size: 8em;
        font-style: italic;
        font-weight: 500;
    }

    .descripcionHome .contenidoDescripcionHome span {
        font-family: 'Alegreya', serif;
        font-size: 1.10em;
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
        width: 15px;
        height: 15px;
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
        background-color: var(--green-midnight-color);
    }

    .controlsBannerHome li:hover {
        background-color: var(--green-midnight-color);
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
        color: var(--white-color);
        font-size: 1.1em;
        margin-bottom: 30px;
    }

    .contentBxBannerHome div a,
    .contentBxBannerHome div h2 {
        color: var(--white-color);
    }
</style>