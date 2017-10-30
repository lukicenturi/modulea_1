<div class="social">
    <h3>
        Follow Us On:
    </h3>
    <div>
        <a href="#">Facebook</a>
        <a href="#">Instagram</a>
        <a href="#">Twitter</a>
    </div>
</div>
<footer>
    <div class="container">
        Copyright &copy; 2017. World Fashion. All Right Reserved
    </div>

    <?php wp_footer(); ?>
</footer>

<div class="side">
    <div id="toggle" onclick="$('.side').toggleClass('active')">
          >
    </div>
    <?php get_sidebar(); ?>
</div>

</body>
</html>
<script>
    $(()=>{
        $(window).on('resize', function(){
            if($(window).width() > 1199){
                $(".menu").show();
            }
        })
        if($("#countdown")){
            toDate = new Date($("meta[name='countdown']").attr('content')).getTime();
            setInterval(()=>{
                now = new Date().getTime();
                dist = Math.floor((toDate - now) / 1000);

                $("#days").html(Math.floor((dist / 86400)));
                $("#hours").html(Math.floor((dist % 86400) / 3600));
                $("#minutes").html(Math.floor((dist % 3600) / 60));
                $("#seconds").html(Math.floor((dist % 60)));
            });
        }

        if($(".gallery")){
            $(".gallery .container > div").on('mouseenter', function(){
                console.log('test');
                $("#main-video")[0].pause();
                $(this).find('video')[0].play();
            })
            $(".gallery .container > div").on('mouseleave', function(){
                $("#main-video")[0].play();
                $(this).find('video')[0].pause();
            })
        }

        $("a").click(function(e){
            src = $(this).attr('href');
            $.get({
                url:src,
                beforeSend:function(data) {
                    document.write('Loading Page...');
                },
                success:function(data){
                    document.open();
                    document.write(data);
                    document.close();
                }
            })
        })
    });
</script>