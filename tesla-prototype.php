<?php require_once('inc/header.php') ?>


<script>
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer', {
            height: '100%',
            width: '100%',
            videoId: 'jWreyC2l-dw',
            playerVars: {
                controls: 0,
                enablejsapi: 1,
                origin: 'https://hereyougo.io/',
                rel: 0
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange() {
        player.playVideo();
    }

    function onPlayerReady() {
        player.playVideo();
        player.mute();
    }

</script>

<section class="tesla-block tesla-block--main">

    <div class="video-background">
        <div id="ytplayer"></div>
    </div>

    <div class="container container--top-layer">
        <a class="slidedown wow animated zoomIn page-link" data-wow-delay="2s" href="#idea"><i
                class="ion-ios-download-outline"></i></a>
        <div class="row row-v-centered">
            <div class="col-md-12">
                <div class="headings text-center">
                    <h1 class="wow animated fadeInDown">
                        Prototype with Tesla
                    </h1>
                    <p>
                        We will buy Tesla car with crypto, we will split the ownership of the car between
                        contributors
                        by</br>
                        smart-contracts and we will bring profit for the car owners using it for ride sharing.</br>
                        We will share that experience in social networks. Want to have a share of the future?
                    </p>
                    <a href="#subscribe" class="btn btn-primary btn-lg want-to-join-button">I want to join</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="idea" class="tesla-block tesla-block--idea">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="heading-description">The idea behind is to create first diversified ownership taxi service in
                    Silicone
                    Valley, we going to collect
                    money and organise the test of the service with crypto transactions as benefits for all car owners.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <p class="idea-text">
                    We want to organize a prototype test to show the possibility of several things: joint ownership of
                    the car, transactions on the technology of blockchain, the possibility of increasing the efficiency
                    of the transport system due to new technologies in finance.
                </p>
                <p class="idea-text">Blockchain transaction. An important part of our business is the creation of an
                    ecosystem around autonomous technologies, at the same time we see financial and transactional
                    aspects as an obstacle to the development of this technology of self-driving cars.</p>
                <p class="idea-text">Prototype. In the course of the experiment, we will test transport and financial
                    issues related to the provision of ride-sharing services. The main question for which we want to
                    find the answer is how to increase the efficiency of the transport infrastructure through blockchain
                    technology?</p>
            </div>
            <div class="col-md-6">
                <img class="default-image" src="/assets/img/tesla-page/kostya-on-tesla-palo.jpg">
                <p class="image-label">CEO of HereYouGo Konstantin in Tesla Palo Alto Branch.</p>
            </div>
        </div>

    </div>
</section>


<section id="details" class="block tesla-block tesla-block--details">
    <section class="container">
        <section class="row">
            <div class="title-box" style="color:#fff;">
                <h1 class="block-title wow animated rollIn">
                    Details of the project
                </h1>
                <p>How we will execute things?</p>
            </div>

            <div class="black-text-container">

                <ul class="details-list">
                    <li><strong>Car ownership</strong>
                        we will collect all transactions of people who want to become Tesla car owner, we will split
                        ownership by smart-contracts. If you want to participate send us the letter to
                        <a href="mailto:hello@hereyougo.io" target="_blank">
                            hello@hereyougo.io
                        </a>
                    </li>
                    <li><strong>Taxi service</strong> we will provide
                        taxi service with ride-sharing transportation partner. Which one? We choosing between them
                        now.
                    </li>

                    <li><strong>Benefits for owners</strong> we will
                        send the benefits with crypto, on the daily or weekly basis, depending on the transaction
                        volume (bigger transactions will be faster).
                    </li>
                    <li><strong>Who will care about the car</strong>
                        we will organise the competition between drivers to choose the best, also we will publish
                        interview with him or her on our social networks.
                    </li>

                    <li><strong>Who will clean the car</strong>
                        this is very important issue, we have a surprising answer for that question) Check it in
                        social networks during next month.
                    </li>
                    <li><strong>What is that prototype for</strong>
                        the idea is to create eco-system around new tech in transport, we believe that self-driving
                        and blockchain technology will create many new roles in this area, we want to test new
                        business mode it in real life with real users. It will be exciting!
                    </li>
                </ul>

                <p class="default-text">

                </p>
            </div>

        </section>

    </section>
</section>


<section id="subscribe">
    <section class="container">
        <section class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="title-box">
                    <h1 class="block-title wow animated rollIn">
                        Accelerate the future with us
                    </h1>
                </div>

                <p class="susbcribe-text">Send us your contact details if you want to participate</p>
            </div>
        </section>
    </section>
    <section class="container subscribe-wrap">
        <form role="form" method="post" action="sendEmail.php" class="accelerate-form">

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <label>E-mail</label>
                <input type="email" class="form-control" name="contactEmail" placeholder="name@mycompany.com">
            </div>
            <div class="col-xs-10 col-xs-offset-1">
                <label>Name</label>
                <input type="text" class="form-control" name="contactName" placeholder="John Smith">
            </div>
            <div class="col-xs-10 col-xs-offset-1">
                <label>Phone</label>
                <input type="text" class="form-control" name="contactPhone" placeholder="+1234 900 0000">
            </div>
            <div class="col-xs-10 col-xs-offset-1 text-center">
                <button class="btn btn-primary btn-lg send-button">Send</button>
                <p class="form-description">By clicking the button, you agree with our terms of services.</p>
            </div>
        </div>

        </form>
    </section>
</section>



<section id="offer" class="tesla-block tesla-block--offer">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="title-box">
                    <h1 class="block-title wow animated rollIn">
                        Offer for Sponsors:<br/>
                        promote your crypto project
                    </h1>

                    <p class="heading-description">we will promote your business in Silicone Valley in front of best investors and possible clients
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="idea-text">
                    <strong>Why I need it?</strong><br/>
                    You will have outdoor advertisement in Silicone Valley. You can get a connections with investors inside San Francisco Bay area thought our service. We will provide photo with the car on different locations in Silicone Valley what will bring credibility and recognizability for your project.
                </p>
                <p class="idea-text">
                    <strong>What promo you can offer?</strong><br/>
                    We will put your logo as stickers on the car doors. We will make t-shirts and promo cards for passengers with your logo and information. We also will put your promo posts in our social networks and the web site (with links) this will help you with SEO, right?</p>
                <p class="idea-text">
                    <strong>Which sponsorship levels you have?</strong><br/>
                    We have 3 sponsorships levels gold, silver and bronze ($40,000, $15,000 and $5,000 respectively) of course we accept crypto (Bitcoin and ETH). There is also $1,500 sponsorship package only for social networks and the web site promo.</p>
            </div>
        </div>
    </div>
</section>



<section id="footer">
    <section class="container">
        <section class="row">
            <div class="col-sm-6">
                <ul class="team-social social-links">
                    <li class="wow animated fadeInLeft"><a href="https://www.facebook.com/hereyougothefirst"
                                                           target="_blank"><i
                            class="ion-social-facebook"></i></a></li>
                    <li class="wow animated fadeInLeft"><a href="https://twitter.com/AutoGoTech" target="_blank"><i
                            class="ion-social-twitter"></i></a></li>
                    <li class="wow animated fadeInRight"><a
                            href="https://www.youtube.com/channel/UCvcC23IJ1YQX3re_VHeeVvQ " target="_blank"><i
                            class="ion-social-youtube"></i></a></li>
                    <li class="wow animated fadeInRight"><a href="https://www.linkedin.com/company/hereyougothefirst/"
                                                            target="_blank"><i class="ion-social-linkedin"></i></a></li>
                    <li class="wow animated fadeInRight"><a href="https://t.me/joinchat/BnYBHRAHsd7W1991EguPoA"
                                                            target="_blank"><i class="ion-paper-airplane"></i></a></li>
                    <li class="wow animated fadeInRight"><a href="https://www.tumblr.com/" target="_blank"><i
                            class="ion-social-tumblr"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <p class="copyright text-right">HereYouGo 2017-2018</p>
            </div>
        </section>
    </section>
</section>


<?php require_once('inc/footer.php') ?>


<script>
    $('title').text('HereYouGo - Prototype with Tesla');
</script>
