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
                origin: 'https://hereyougo.io',
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
                        To create a prototype we will buy Tesla, using crypto currency. We will split Tesla ownership
                        proportionally to contribution, using smart contract protocol. We will split profit from ride
                        sharing between contributors. We will promote this experience in social media. Do you want to
                        own a share of the future?

                    </p>

                    <div class="contribution-progress">
                        <div class="contribution-progress__heading">Contribution progress</div>

                        <div class="contribution-progress__progress-container">
                            <div class="contribution-progress__line" style="width: 1%">
                                <div class="contribution-progress__sign">$1 000</div>
                            </div>
                        </div>

                        <div class="contribution-progress__goal">$100 000</div>
                    </div>

                    <a href="#subscribe" class="btn btn-primary btn-lg want-to-join-button page-link">I want to join</a>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="idea" class="tesla-block tesla-block--idea">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="heading-description">The idea behind is to create the first taxi service with diversified car ownership in Silicon Valley. We are going to raise $100 000 from contributors to create a prototype and to test the service with crypto transactions.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <p class="idea-text">
                    We want to organize the prototype test to prove the possibility of:
                    joint ownership for a car
                    application of blockchain technology to ride-sharing services
                    increase the efficiency of transport system due to new technologies in finance.
                </p>
                <p class="idea-text">When contributions will be raised and Telsa will be bought, we will organize the registration of the car ownership in the DMV for all contributors proportionally to contributions. Then we will organize an insurance for the car taking into account decentralized ownership. We will test a new role in the industry – the role of administrator of the car. In our vision this role can be executed by current drivers. So, when the self-driving technology will be mass deployed, the drivers will not lose their jobs, they will take another role. The new role will be consisted of organizational activities related to a car like coordination of registration, technical services, profit payments to contributors in crypto currency and insurance.</p>
                <p class="idea-text">We consider the blockchain technology as the most effective platform for transactional business execution. We plan to demonstrate the capabilities of the blockchain technology with our business prototype. We will reveal the simplicity and efficiency of transactions for purchasing of a share of a car as well as for receiving the profit in crypto currency into the same crypto wallet from which the contribution was transferred.</p>
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
        <form role="form" method="post" action="sendEmail.php" id="accelerateForm" class="accelerate-form">

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
                    <label>Text</label>
                    <input type="text" class="form-control" name="contactText" placeholder="...">
                </div>
                <div class="col-xs-10 col-xs-offset-1 text-center">
                    <button class="btn btn-primary btn-lg send-button">Send</button>
                    <p class="form-description">By clicking the button, you agree with our terms of services.</p>
                    <div class="message-warning"></div>
                </div>
            </div>

        </form>

        <div class="message-success">Thank you for your request, we will respond as soon as possible.</div>
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

                    <p class="heading-description">we will promote your business in Silicon Valley in front of best
                        investors and possible clients
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="idea-text">
                    <strong>Why I need it?</strong><br/>
                    You will have outdoor advertisement in Silicon Valley. You can get a connections with investors
                    inside San Francisco Bay area thought our service. We will provide photo with the car on different
                    locations in Silicon Valley what will bring credibility and recognizability for your project.
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
