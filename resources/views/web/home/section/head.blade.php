<style>
    /*
        Banner
    */

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
        width: 80px;
        height: 80px;
        background-color: #fff;
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .controlsBannerHome li:hover {
        background-color: #ffeb3b;
    }

    .controlsBannerHome li:before {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-left: 3px solid #111;
        border-bottom: 3px solid #111;
        transform: rotate(45deg);
    }

    .controlsBannerHome li:nth-child(2):before {
        transform: rotate(225deg);
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
        padding-left: 100px;
        background: rgba(0, 0, 0, 0.2);
    }

    .contentBxBannerHome div h2 {
        color: #fff;
        font-size: 2em;
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