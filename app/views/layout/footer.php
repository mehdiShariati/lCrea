</div>
</div>


<script src="<?= URL_ROOT."/js/swit.js" ?>"></script>

<script src="<?= URL_ROOT ?>/js/flipclock.min.js"></script>
<script>
    $().ready(function () {
        var clock = $('.clock').FlipClock(180, {
            countdown: true,
            clockFace: 'MinuteCounter'
        });
    });


</script>



</body>
</html>