<?php get_header(); ?>
    <div class="banner">
        <div class="main">
            <video id='main-video' src="<?= DIR ?>/videos/Video-1.mp4" loop muted autoplay></video>
        </div>
        <div class="gallery">
            <div class="container">
                <?php for($i = 0 ; $i < 6 ; $i++ ): ?>
                    <div>
                        <div class="place">
                            Sau Paulo - 2017
                        </div>
                        <video src="<?= DIR ?>/videos/Video-15.mp4" loop muted></video>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h1>
                WELCOME TO WORLD FASHION
            </h1>
            <div class="middle">
                <div class="image">
                    <img src="<?= DIR ?>/image/map3.png" alt="map">
                </div>
                <div class="word">
                    <div class="place">
                        Held In Abu Dhabi - 21 Oct 2017
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto asperiores aspernatur cum debitis doloribus, fuga impedit ipsam iste maiores molestiae necessitatibus nesciunt nisi omnis qui quisquam sunt vero vitae.
                    </div>
                    <div id="countdown">
                        <div>
                            <div id="days">40</div>
                            <div>DAYS</div>
                        </div>
                        <div>
                            <div id="hours">40</div>
                            <div>HOURS</div>
                        </div>
                        <div>
                            <div id="minutes">40</div>
                            <div>MINUTES</div>
                        </div>
                        <div>
                            <div id="seconds">40</div>
                            <div>SECONDS</div>
                        </div>
                    </div>
                    <a href="#"><button>BOOK TICKET</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <span>RECENT POST</span>
        <div class="container">
            <div class="row">
                <?php for($i = 1 ; $i < 4; $i++): ?>
                <div class="wrapper" data-image="<?= $i ?>">
                    <div class="item">
                        <div class="image">
<!--                            <img src="--><?//= DIR ?><!--/image/Images-1.jpeg" alt="thumbnail">-->
                        </div>
                        <div class="word">
                            <div class="icon"></div>
                            <div class="title">
                                Lorem ipsum dolor sit amet.
                            </div>
                            <div class="message">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consectetur corporis dolorem eligendi facilis inventore iusto molestias perspiciatis placeat porro praesentium repellendus, sint temporibus. Animi cum dignissimos esse laborum quas?
                            </div>
                            <div class="bot">
                                <div class="date">26 Oct 2017</div>
                                <a href="#"><button class="ghost">READ MORE</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
