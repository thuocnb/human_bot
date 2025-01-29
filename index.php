<?php include 'header.php';?>
<main>
    <div class="cursor"></div>
    <section class="box-home-template">
        <div class="avr"><img src="assets/images/banner.png" class="w-100" alt=""></div>
        <div class="content-home-cover text-center">
            <div class="title-cover"><img src="assets/images/cover-home.png" alt=""></div>
            <div class="desc">
                Lorem ipsum dolor sit amet consectetur. Risus gravida et ornare pellentesque sit lobortis. Adipiscing pellentesque fringilla augue tempor. Tellus commodo tristique porta ornare.
            </div>
            <div class="play-video text-center d-none">
                <a href="javascript:void(0)">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 6.66669C21.6 6.66669 6.66667 21.6 6.66667 40C6.66667 58.4 21.6 73.3334 40 73.3334C58.4 73.3334 73.3333 58.4 73.3333 40C73.3333 21.6 58.4 6.66669 40 6.66669ZM48.8667 45.7667L44.6 48.2334L40.3333 50.7C34.8333 53.8667 30.3333 51.2667 30.3333 44.9334V40V35.0667C30.3333 28.7 34.8333 26.1334 40.3333 29.3L44.6 31.7667L48.8667 34.2334C54.3667 37.4 54.3667 42.6 48.8667 45.7667Z" fill="#292D32"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <div class="hver-cursor"></div>
    <div class="video-template">
        <video controls playsinline muted>
            <source src="assets/video/video.mp4" type="video/mp4">
        </video>
    </div>
</main>
<?php include 'footer.php';?>

<script>
    var cursor = $(".cursor"),
        follower = $(".cursor-follower");

    var posX = 0,
        posY = 0,
        mouseX = 0,
        mouseY = 0;

    TweenMax.to({}, 0.016, {
        repeat: -1,
        onRepeat: function() {
            posX += (mouseX - posX) / 9;
            posY += (mouseY - posY) / 9;


            TweenMax.set(cursor, {
                css: {
                    left: mouseX,
                    top: mouseY
                }
            });
        }
    });

    $(document).on("mousemove", function(e) {
        mouseX = e.pageX;
        mouseY = e.pageY;
    });

</script>
