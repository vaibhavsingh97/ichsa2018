<!-- Footer -->
<footer class="page-footer teal darken-1">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">ICHSA 2018</h5>
        <div class="wrp">
          <a class="icon icon-facebook" href="https://www.facebook.com/ICHSA2018/"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="ImportantDates.php">Important Dates</a></li>
          <li><a class="grey-text text-lighten-3" href="CallForPapers.php">Call For papers</a></li>
          <li><a class="grey-text text-lighten-3" href="Registration.php">Registrations</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright teal darken-2">
    <div class="container">
      &copy; ICHSA 2018
      <a class="grey-text text-lighten-4 right" href="#!">Made with &hearts; by BML Munjal University</a>
    </div>
  </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript">
  $('.button-collapse').sideNav({
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true, // Choose whether you can drag to open on touch screens
  });
  $('.collapsible').collapsible();

  $('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false // Stops event propagation
  });
  $('.parallax').parallax();
</script>
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-75079553-3', 'auto');
  ga('send', 'pageview');
</script>
<script async type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=73442896"></script>
</body>

</html>
