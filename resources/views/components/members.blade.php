<div class="va-carrousel-section">
    <div class="va-whitewrap">
        <div id="va_container">
            <button class="deals-scroll-left deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                     class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path fill="currentColor"
                          d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="va-carrousel-flexbox">


                <div class="va-card">
                    <a class="link-plain" target="_blank">
                        <img class="va-thumbnail" src="https://via.placeholder.com/170/9796f0/1c1c1c?text=Card_Item">
                        <div class="va-title">Card Title </div>
                        <div class="va-start-from"> card description can be written here</div>
                    </a>
                </div>
            </div>

            <button class="deals-scroll-right deals-paddle">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                     class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path fill="currentColor"
                          d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
        </div>


    </div>

</div>

<style>
    html{
        font-family: Roboto, Arial, Helvetica, sans-serif;
        padding:0;
        margin:0;
    }

    *{
        box-sizing: border-box;
    }



    .link-plain,
    .link-plain:hover,
    .link-plain:active,
    .link-plain:visited {
        text-decoration: none;
    }

    .link-plain-f,
    .link-plain-f:hover,
    .link-plain-f:active,
    .link-plain-f:focus,
    .link-plain-f:visited {
        color: initial;
        text-decoration: none !important;
    }

    .div-center {
        display: inline-block;
        width: 100%;
        text-align: center;
    }
    #va_container {
        position: relative;
        max-width: 1140px;
        margin: auto;
    }

    .va-thumbnail {
        border-radius: 5px;
        border: 0px;
        max-width: 100%;
    }

    .va-title {
        margin-top: 0px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .va-carrousel-flexbox {

        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .va-carrousel-flexbox .va-card {
        flex: 0 0 auto;
        padding-left: 15px;
    }

    .va-carrousel-flexbox .va-card:last-child {
        margin-right: 15px;
    }

    .va-carrousel-flexbox .va-card:last-child::after {
        content: ' ';
        display: inline-block;
    }

    .va-card {
        width: 100px;
        cursor: pointer;
        user-select: none;
        outline: none;
    }

    .va-card:hover {
        user-select: none;
        outline: none;
    }

    .va-card a {
        display: block;
    }

    @media (min-width: 768px) {
        .va-card {
            width: 130px;
        }
    }

    .va-carrousel,
    .va-carrousel-flexbox {
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .va-carrousel::-webkit-scrollbar,
    .va-carrousel-flexbox::-webkit-scrollbar {
        display: none;
    }

    .va-carrousel-title {
        display: inline-block;

        color: white;
        font-weight: 700;
        padding-bottom: 8px;

        margin-bottom: 18px;
    }

    .va-title {
        margin-top: 8px;
        font-size: 11px;
        max-height: 3em;
        overflow: hidden;
        color: white;
        font-weight: 700;
    }

    @media (min-width: 768px) {
        .va-title {
            font-size: 13px;
        }
    }

    .va-start-from {
        font-size: 9px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: white;
    }

    .va-points {
        font-size: 12px;
        font-weight: 700;
        display: inline-block;
        color: white;
    }

    .deals-paddle {
        height: 38px;
        width: 38px;
        color: white;
        background-color: #00000089;
        border-radius: 50%;
        border: 0px solid;
        margin: auto;
        position: absolute;

        display: flex;
        justify-content: center;
        align-items: center;
        cursor:pointer;
    }

    .deals-paddle:focus {
        outline: none;
    }

    .deals-paddle:active {
        border-style: solid;
        outline: none;
        user-select: none;
    }

    .deals-paddle svg {
        width: 10px;
    }

    @media (min-width: 768px) {
        .other-game-button {
            width: 300px;
        }
    }

    .deals-scroll-left {
        top: 0;
        left: 5px;
        bottom: 0;
    }

    .deals-scroll-right {
        top: 0;
        bottom: 0;
        right: 5px;
    }

    .va-carrousel-section {
        font-family: "Roboto"
        padding: 0px;
        position: relative;
    }

    @media (min-width: 768px) {

        .va-carrousel-section {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    .va-whitewrap {
        /*         background-color: white; */
        padding-top: 15px;
        margin-top: 15px;
    }

    .va-seeall {
        display: block;
        font-size: 18px;
        font-weight: 700;
        border-top: 1px solid #DDDDDD;
        text-align: center;
        padding: 10px;
    }

</style>
<script>
    var isAnimating = false;

    function scrollLeftAnimate(elem, unit) {

        if (!elem || isAnimating) {
            //if element not found / if animating, do not execute slide
            return;
        }

        var time = 300; // animation duration in MS, the smaller the faster.
        var from = elem.scrollLeft; // to continue the frame posistion
        var aframe =
            10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
        isAnimating = true; //if animating prevent double trigger animation

        var start = new Date().getTime(),
            timer = setInterval(function () {
                var step = Math.min(1, (new Date().getTime() - start) / time);
                elem.scrollLeft = ((step * unit) + from);
                if (step === 1) {
                    clearInterval(timer);
                    isAnimating = false;
                }
            }, aframe);
    }



    function initDealCarrousel(dealCarrouselID) {
        var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox");
        var cardOutterWidth;
        var maxCarrouselScroll;

        function updateUpaCarrouselInfo() {
            cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
            maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox")
                .clientWidth;
        }

        document.querySelector("#" + dealCarrouselID + " .deals-scroll-left").addEventListener("click",
            function () {
                updateUpaCarrouselInfo(); //in case window resized, will get new info
                if (target.scrollLeft > 0) {
                    scrollLeftAnimate(target, -cardOutterWidth * 2);
                }
            }
        );

        document.querySelector("#" + dealCarrouselID + " .deals-scroll-right").addEventListener("click",
            function () {
                updateUpaCarrouselInfo(); //in case window resized, will get new info
                if (target.scrollLeft < maxCarrouselScroll) {
                    scrollLeftAnimate(target, cardOutterWidth * 2);
                }
            }
        );
    }
    // Initiate the container with ID
    initDealCarrousel('va_container'); //carrousel ID
</script>
