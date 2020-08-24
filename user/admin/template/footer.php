
<div class="clear"></div>
</div>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>

<script type="text/javascript">
  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast').addClass('animated bounceIn');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast');

    });
  });
</script>

</body>
</html>