<script type="text/javascript">
    const imgBxBannerHome = document.querySelector('.imgBxBannerHome')
    const slidesImgBxBannerHome = imgBxBannerHome.getElementsByTagName('img')
    let i = 0;

    function nextSlideBannerHome() {
        slidesImgBxBannerHome[i].classList.remove('active')
        i = (i + 1) % slidesImgBxBannerHome.length
        slidesImgBxBannerHome[i].classList.add('active')
    }

    function prevSlideBannerHome() {
        slidesImgBxBannerHome[i].classList.remove('active')
        i = (i - 1 + slidesImgBxBannerHome.length) % slidesImgBxBannerHome.length
        slidesImgBxBannerHome[i].classList.add('active')
    }

    const contentBxBannerHome = document.querySelector('.contentBxBannerHome')
    const slidesContentBxBannerHome = contentBxBannerHome.getElementsByTagName('div')
    let j = 0;

    function nextSlideBannerHomeText() {
        slidesContentBxBannerHome[j].classList.remove('active')
        j = (j + 1) % slidesContentBxBannerHome.length
        slidesContentBxBannerHome[j].classList.add('active')
    }

    function prevSlideBannerHomeText() {
        slidesContentBxBannerHome[j].classList.remove('active')
        j = (j - 1 + slidesContentBxBannerHome.length) % slidesContentBxBannerHome.length
        slidesContentBxBannerHome[j].classList.add('active')
    }

    const controlsBannerHome = document.querySelector('.controlsBannerHome')
    const controlsLiBannerHome = controlsBannerHome.getElementsByTagName('li')
    let k = 0

    function nextControlsLiBannerHome() {
        controlsLiBannerHome[j].classList.remove('active')
        j = (j + 1) % controlsLiBannerHome.length
        controlsLiBannerHome[j].classList.add('active')
    }

    function prevControlsLiBannerHome() {
        controlsLiBannerHome[j].classList.remove('active')
        j = (j - 1 + controlsLiBannerHome.length) % controlsLiBannerHome.length
        controlsLiBannerHome[j].classList.add('active')
    }
</script>