<?php
$params = [
    'title' => 'Own a Fraction of Tesla Model 3',
    'url' => 'https://hereyougo.io/crowdfunding-tesla.php',
    'description' => 'Contribute just $10 to secure fractional ownership of a ride-shared Tesla Model 3',
    'socialImage' => 'https://hereyougo.io/assets/img/crowd-social.jpg'
];
?>

<?php require_once('inc/header.php') ?>


<link rel='stylesheet' href='/assets/lib/unitegallery/css/unite-gallery.css' type='text/css'/>

<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#gallery").unitegallery({
            gallery_theme: "compact",
            slider_enable_text_panel: true,
            slider_scale_mode: "fit",
            gallery_width: '100%',
            strip_thumbs_align: 'center'
        });
    });

</script>

<section class="tesla-block tesla-block--main crowd-block">

    <div class="container container--top-layer">
        <div class="row row-v-centered">
            <div class="col-md-7">
                <div class="headings text-center">
                    <div id="gallery" style="margin:0px auto;display:none;">

                        <img alt="Crowdfunding Video"
                             data-type="youtube"
                             data-videoid="i7LmN4s4YOM"
                             data-description="Become the owner of Tesla Model 3 with just $10">

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/1.jpg"
                             data-image="/assets/img/crowdfunding/gallery/1.jpg"
                             data-description="We made prototype with small robotic RC car and smart-contract on blockchain technology."
                        >

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/5.jpg"
                             data-image="/assets/img/crowdfunding/gallery/5.jpg"
                             data-description="The Future of Automotive: Pitch Night with International Auto Industry Experts in San Francisco."
                        >

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/6.jpg"
                             data-image="/assets/img/crowdfunding/gallery/6.jpg"
                             data-description="We started our company with research at Draper University in Silicon Valley."
                        >

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/7.jpg"
                             data-image="/assets/img/crowdfunding/gallery/7.jpg"
                             data-description="Contribute and enjoy the ownership of the Tesla Model 3"
                        >

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/8.jpg"
                             data-image="/assets/img/crowdfunding/gallery/8.jpg"
                             data-description="Testing Tesla Model 3 autopilot in Silicon Valley."
                        >

                        <img alt=""
                             src="/assets/img/crowdfunding/gallery/9.jpg"
                             data-image="/assets/img/crowdfunding/gallery/9.jpg"
                             data-description="We were part of Y Combinator Startup School."
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-5 crowd-description">
                <h1 class="wow animated fadeInDown">
                    Own a Fraction of Tesla Model 3
                </h1>
                <p>Contribute just $10 to secure fractional ownership of a ride-shared Tesla Model 3</p>

                <div class="contribution-progress">
                    <div class="contribution-progress__heading">$20,101 USD raised by 34 backers</div>

                    <div class="contribution-progress__progress-container">
                        <div class="contribution-progress__line" style="width: 30%"></div>
                    </div>

                    <div class="contribution-progress__goal">$60,000</div>
                </div>

                <div class="crowd-buttons">
                    <div class="back-it-form">
                        <form id="backItForm">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control crowd-email-input" placeholder="E-mail">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg back-it-button" type="submit">Back it</button>
                                </span>

                            </div><!-- /input-group -->
                        </form>
                        <div class="message-warning"></div>

                    </div>

                    <div class="message-success">Thank you for your request, we will respond as soon as possible.
                    </div>


                    <div class="social-share-buttons">
                        <div class="ya-share2"
                             data-services="facebook,twitter,vkontakte,linkedin,tumblr,telegram"
                             data-lang="en"
                        ></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>


<section id="idea" class="tesla-block tesla-block--idea">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <img class="default-image" src="/assets/img/crowdfunding/tesla-overview.jpg">
                <!--                <p class="image-label">CEO of HereYouGo Konstantin in Tesla Palo Alto Branch.</p>-->
            </div>
            <div class="col-md-7">
                <p class="idea-text">
                    ► The more you contribute, the bigger your Tesla Model 3 share <br/>
                    ► Your contribution will also be credited to your private account in our ride-sharing service<br/>
                    ► Earn credits while others use and pay for the Tesla Model 3<br/>
                    ► Use our ride sharing services at a discount & sometimes for free<br/>
                    ► Smaller contributions are still accepted for fractional ownership<br/>
                </p>
                <p>&nbsp;</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="text-center">
                    <img src="/assets/img/crowdfunding/what-you-get.jpg">
                </div>


                <p class="block-title block-title--sub">What You Receive</p>

                <p class="idea-text">
                    Have you always dreamt of owning a Tesla Model 3? Self-driving cars are the engines of the future,
                    which is why so many people around the world want to own their very own Tesla. We’ve come up with a
                    system that enables multiple people to call the same Tesla car their own. It starts with
                    ride-sharing.</p>

                <p class="idea-text">Receive a proportional fraction of ownership based on the amount you contribute
                    through this
                    campaign. Uniquely within this campaign, we will credit the same amount you donate here in our ride
                    sharing service, enabling you to benefit from HereYouGo for other transportation needs.</p>

                <p class="idea-text">All contributors will receive ongoing bonuses in their private accounts while
                    others use and pay for
                    the Tesla Model 3. Access all of our services at a discount, or sometimes, for free!</p>

                <p class="idea-text">With just $10, you can call yourself a Tesla Model 3 owner.</p>


                <div class="text-center">
                    <img src="/assets/img/crowdfunding/1-dol.jpg">
                </div>

            </div>
        </div>

    </div>

</section>


<section id="details" class="block tesla-block tesla-block--details">
    <section class="container">
        <section class="row">
            <div class="title-box" style="color:#fff;">
                <h1 class="block-title wow animated rollIn">
                    Self-Driving Cars
                </h1>
            </div>

            <div class="black-text-container">
                <p class="default-text">
                    Self-driving cars are a life-changing invention that could potentially spare the millions of lives
                    lost in car accidents every single year due to driver negligence, texting, alcohol, and other
                    mishaps. As many tech publications have put it, the inevitability of self-driving car deployment is
                    imminent. We just need infrastructure, groups, and drivers to be more receptive.
                </p>
                <p class="default-text">
                    We are hoping to accelerate this timeline with our crowdfunding campaign. Now you can own and drive
                    a Tesla without the thousands and thousands of dollars you thought you previously needed.
                </p>


                <div class="text-center">
                    <img class="default-image" src="/assets/img/crowdfunding/impact.jpg">
                </div>

            </div>

        </section>

    </section>
</section>

<section id="impact" class="tesla-block">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="title-box" style="color:#000;">
                    <h1 class="block-title wow animated rollIn">
                        <span class="bb-top-left" style="border-color: #000; "></span>
                        <span class="bb-bottom-left" style="border-color: #000; "></span>
                        From the team
                        <span class="bb-top-right" style="border-color: #000; "></span>
                        <span class="bb-bottom-right" style="border-color: #000; "></span>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="idea-text">
                    We are the HereYouGo team, and we have a dream to bring autonomous driving technology to real life,
                    because it will reduce the number of accidents on the roads and decrease time that you spend in a
                    car.</p>
                <p class="idea-text">
                    We started developing this idea with research at the heart of Silicon Valley one year ago. We have
                    created our first prototype with Donkey.Car – a small robotics car and now we are going to build a
                    business model around a real car with the best level of autopilot available on the market today –
                    Tesla Model 3.</p>
                <p class="idea-text">
                    With this crowdfunding campaign we are going to launch an ownership model with many
                    owners (contributors to this campaign) to bring efficiency in transportation. Self-driving cars will
                    be expensive and at the same time, an average car owner uses the car just 4% of all time, so our
                    model will bring more effectiveness to the roads.
                </p>

                <section class="row team-member-row">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <div style="background-image: url(assets/img/team/1.jpg)" class="team-pic"></div>
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Konstantin Maslennikov</h2>
                        <p class="wow animated fadeIn team-position" data-wow-delay=="0.7s">CEO & Founder</p>

                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            Draper University, New Economic School
                            <br/>ex. TakeBus, Projector Group
                        </p>

                        <ul class="team-social">
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.linkedin.com/in/konstantinmaslennikov/" target="_blank">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.facebook.com/konstantin.maslennikov" target="_blank">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li class="wow animated fadeInLeft instagram">
                                <a href="https://www.instagram.com/maslennikof/" target="_blank">
                                    <i class="ion-social-instagram"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <div style="background-image: url(assets/img/team/5.jpg)" class="team-pic"></div>
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Alex Winter</h2>
                        <p class="wow animated fadeIn team-position" data-wow-delay=="0.7s">CTO</p>

                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            South Ural State University
                            <br/>ex. TakeBus, Malahit
                        </p>

                        <ul class="team-social">
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.linkedin.com/in/alexeywinter/" target="_blank">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <div style="background-image: url(assets/img/team/10.jpg)" class="team-pic"></div>
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Jenny Maslennikova</h2>
                        <p class="wow animated fadeIn team-position" data-wow-delay=="0.7s">COO</p>

                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            Draper University, Omsk State University
                        </p>

                        <ul class="team-social">
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.linkedin.com/in/evgeniya-maslennikova/" target="_blank">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <!--            <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                                    <div style="background-image: url(assets/img/team/9.jpeg)" class="team-pic"></div>
                                    <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Ramesh Manian</h2>
                                    <p class="wow animated fadeIn team-position" data-wow-delay=="0.7s">Blockchain Strategy Director</p>

                                    <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                                        Cornell University Graduate School
                                        <br/>ex. eBay Inc, Ricoh Americas Corporation
                                    </p>

                                    <ul class="team-social">
                                        <li class="wow animated fadeInLeft linkedin">
                                            <a href="https://www.linkedin.com/in/rameshmanian/" target="_blank">
                                                <i class="ion-social-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>-->

                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <div style="background-image: url(assets/img/team/8.jpg)" class="team-pic"></div>
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Carlos Uranga</h2>
                        <p class="wow animated fadeIn team-position" data-wow-delay=="0.7s">Advisor</p>

                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            University of California San Diego, Grenoble Institute of Technology
                            <br/>
                            ex. Singularity University, MakerDojo
                        </p>


                        <ul class="team-social">
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.linkedin.com/in/carlosuranga/" target="_blank">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li class="wow animated fadeInLeft linkedin">
                                <a href="https://www.facebook.com/cauranga" target="_blank">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>

            </div>
        </div>
</section>

<section id="risks" class="tesla-block">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="block-title block-title--sub wow animated rollIn  block-title--centered">
                    We are part of
                </h1>
            </div>
        </div>

        <section class="row">
            <div class="col-xs-12">
                <div id="backedByLinks" class="owl-carousel owl-theme">
                    <a href="https://www.ieee.org/" target="_blank" class="item"><img
                                src="assets/img/backed-by/ieee.gif" class="wow animated zoomIn"></a>
                    <a href="http://sae.org" target="_blank" class="item"><img
                                src="assets/img/backed-by/sae.png" class="wow animated zoomIn"></a>
                    <a href="https://www.startupgrind.com/" target="_blank" class="item"><img
                                src="assets/img/backed-by/startup-grind.png" class="wow animated zoomIn"></a>
                    <a href="http://www.herocity.com/" target="_blank" class="item"><img
                                src="assets/img/backed-by/herocity.png" class="wow animated zoomIn"></a>
                    <a href="https://www.draperuniversity.com/" target="_blank" class="item"><img
                                src="assets/img/backed-by/drapper-university.png" class="wow animated zoomIn"></a>
                    <a href="https://www.startupschool.org/" target="_blank" class="item"><img
                                src="assets/img/backed-by/y.jpg" class="wow animated zoomIn"></a>
                    <a href="http://deepracing.com/" target="_blank" class="item"><img
                                src="assets/img/backed-by/deep-racing.png" class="wow animated zoomIn"></a>
                    <a href="http://acgsv.org/" target="_blank" class="item"><img
                                src="assets/img/backed-by/acg.jpg" class="wow animated zoomIn"></a>

                </div>

                <div class="customNavigation">
                    <a class="btn backed-by-prev gallery-nav wow animated bounceInLeft"><i
                                class="ion-ios-arrow-left"></i></a>
                    <a class="btn backed-by-next gallery-nav wow animated bounceInRight"><i
                                class="ion-ios-arrow-right"></i></a>
                </div>

            </div>
        </section>

        <p>&nbsp;</p>
</section>

<section id="help" class="tesla-block">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="text-center">

                    <h1 class="block-title block-title--sub block-title--centered wow animated rollIn text-center">
                        How it will look like
                    </h1>
                    <img src="/assets/img/crowdfunding/it-will-look.jpg">
                </div>
            </div>
        </div>
</section>

<section id="contribute" class="block tesla-block tesla-block--details">
    <section class="container">
        <section class="row">
            <div class="title-box" style="color:#fff;">
                <h1 class="block-title wow animated rollIn">
                    Why You Should Contribute
                </h1>
            </div>

            <div class="black-text-container">
                <p class="default-text">
                    Every so often, we receive the opportunity to be part of something bigger. We are aiming to make
                    that campaign something original – something amazing. You can have a share in the future of
                    automotive technology, and it all starts with one donation.
                </p>
                <p>&nbsp;</p>
                <p class="default-text">
                    Here are just a few reasons why you should contribute to this ride sharing idea:</p>
                <p class="default-text">
                    ► It’s a safer future – driving accidents will diminish overnight if we hand over transportation to
                    automated perfection.</p>
                <p class="default-text">
                    ► It’s a replicable idea that could be used in a variety of ways – this kind of crowdfunding idea
                    can
                    be used in a variety of ways in the future, for something like a rocket ship or smart building.</p>
                <p class="default-text">
                    ► You can finally own a Tesla Model 3 – who doesn’t want to say they are a partial owner of a
                    self-driving Tesla vehicle?</p>
                <p class="default-text">
                    ► You’ll receive credits & discounts through our site – at HereYouGo, we are an entire ride sharing
                    solutions platform that you can use to redeem your donated credits.
                </p>

                <p>&nbsp;</p>
                <div class="text-center">
                    <p class="default-text">
                        Others are talking about us too
                    </p>
                    <img class="default-image" src="/assets/img/crowdfunding/talking.jpg">
                </div>

            </div>

        </section>

    </section>
</section>


<section id="faq" class="block">
    <section class="container">
        <section class="row">
            <div class="title-box"><h1 class="block-title wow animated rollIn">
                    <span class="bb-top-left"></span>
                    <span class="bb-bottom-left"></span>
                    faq
                    <span class="bb-top-right"></span>
                    <span class="bb-bottom-right"></span>
                </h1></div>
        </section>

        <div class="faq-container">
            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q1">
                    How can I use Tesla?
                </a>
                <div class="faq-answer collapse" id="q1">
                    You can use the Tesla for transportation needs as part of our ride-sharing service. You can order
                    the car with our driver similar to using a Lyft or Uber app. We don't provide a service to drive
                    this Tesla by yourself, except the special perk “One day of private driving +”.
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q2">
                    Which bonuses will I have from the car ownership?
                </a>
                <div class="faq-answer collapse" id="q2">
                    The main advantage of this model is cheaper or free transportation service. What does it mean for
                    you: - you will get ride-sharing service equal to the amount of your donation during this
                    crowdfunding campaign; - as an owner, you will get ongoing bonuses to your account while others use
                    the car and pay for the service.
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q3">
                    What will be in the certificate of ownership?
                </a>
                <div class="faq-answer collapse" id="q3">
                    The certificate will be created optionally upon your request. The certificate will be indicate: Name
                    of an owner or a company, registration number of the car, the share of ownership, the method of
                    ownership confirmation.
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q3">
                    Can I sell a share of the car in the future?
                </a>
                <div class="faq-answer collapse" id="q3">
                    At the moment we don't have such a feature, but we will create it in the future, approximately in 6
                    months.
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q3">
                    What is the price of car you are going to buy?
                </a>
                <div class="faq-answer collapse" id="q3">
                    We will buy a Tesla with the following specifications: - Model 3 Mid Range Rear - Wheel Drive Red
                    Multi - Coat Paint 19’’ - Sport Wheels - All Black Premium Interior - Enhanced Autopilot The price
                    is $55,000 + commissions of Indiegogo and it's partners $4,565 the amount we collect in total will
                    be $59,565.
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q3">
                    When self-driving cars will be on the roads?
                </a>
                <div class="faq-answer collapse" id="q3">
                    They already are. Tens of companies got accreditation to test self-driving cars on the roads in
                    California. Cruise Automation plans to launch self-driving cars into commercial use in 2019 after 3
                    billion-dollars investment from Softbank and General Motors. Waymo plans to buy up to 62 000
                    self-driving cars from Chrysler this year. So the market is hot and huge companies compete to be the
                    leader in the trillion-dollar market.
                </div>
            </div>


            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q3">
                    Where are you located?
                </a>
                <div class="faq-answer collapse" id="q3">
                    The team is located in San Mateo, Silicon Valley,
                </div>
            </div>

            <div class=faq-item>
                <a class="faq-question" role="button" data-toggle="collapse" href="#q4">
                    What is the best way to communicate with us?
                </a>
                <div class="faq-answer collapse" id="q4">
                    <a href="mailto:hello@hereyougo.io">hello@hereyougo.io</a>
                </div>
            </div>
        </div>
    </section>
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
                <p class="copyright text-right">HereYouGo 2018-<?=date( 'Y' )?></p>
            </div>
        </section>
    </section>
</section>


<?php require_once('inc/footer.php') ?>
