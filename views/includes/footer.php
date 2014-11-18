    <footer>
      <div class="row">
        
        <div class="columns small-12 medium-6 ">
          <ul>
            <li>
              <a href="/menu">Our Menu</a>
            </li>
            <li>
              <a href="/how-it-works">How It Works</a>
            </li>
          </ul>
        </div>
        <div class="columns small-12 medium-6 textright">
          <a class="lang">FRENCH</a>
        </div>
      </div>
      <div class="row">
         <div class="columns small-12 medium-6 ">
          <p>2705 Notre Dame Ouest<br>
          Montreal, Quebec</p>
          <a class="phone">514 316 4585</a>
          <ul>
            <li>
               <a class="social" target="_blank" href="https://www.facebook.com/"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a class="social" target="_blank" href="https://twitter.com/"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a class="social" target="_blank" href="https://twitter.com/"><span class="icon-instagram"></span></a>
            </li>
          </ul>
        </div>
        <div class="columns small-12 medium-6 textright">
          <p>Mon - Fri 11-22<br>
          Thur - Sat 10 - 23</p>
        </div>
      
      </div>
    </footer>

  <div class="overlay"><a class="button modal_close" href="#">Close</a>
    <div class="vert-out">
      <div class="vert-in">

        <div id="signtabs">
          <div class="row">
            <div class="small-12 medium-8 large-6 small-centered columns showpanel">
              <div class="tabs">
                
                <!-- #alltabsnav (hidden) -->
                <ul class="nav hidenav">
                  <li><a href="#signtab" class="changetab current" data-target="#alltabs" data-subtarget="#sign" data-subtab="#signin">Sign</a></li><li><a href="#forgot" class="changetab" data-target="#alltabs">Forgot</a></li><li><a href="#instructions" class="changetab" data-target="#alltabs">Instructions</a></li><li><a href="#reset" class="changetab" data-target="#alltabs">Reset</a></li>
                </ul>

                <div id="alltabs" class="list-wrap noback">
                  <div class="hidetabs"></div>
                 
                  <div id="signtab" class="tabcontent">

                    <!-- #sign nav (visible) -->
                    <ul class="nav">
                      <li><a href="#signup"  class="changetab" data-target="#sign">Sign Up</a></li><li><a href="#signin" class="changetab current" data-target="#sign" >Sign In</a></li>
                    </ul>
                  
                    <div id="sign" class="list-wrap noback">
                      <div class="hidetabs"></div>

                      <div id="signin" class="tabcontent front">
                        <form class="panel">
                          <div class="input">
                            <label for="name-last"></label>
                            <input type="text" id="email" placeholder="Email Address">
                          </div>
                          <div class="input">
                            <label for="name-last"></label>
                            <input type="password" id="pass" placeholder="Password">
                          </div>
                          <p></p>
                          <p class="left small"><a class="changetab" data-target="#alltabs" href="#forgot">Forgot password?</a></p><a class="button right">Sign In</a>
                        </form>
                        <p class="center small moreinfo">Don’t have an account? <a href="#signup"  class="changetab" data-target="#sign">Sign Up Today</a></p>
                      </div> <!-- end #signin -->
                   
                      <div id="signup" class="tabcontent">
                        <form class="panel">
                          <div class="input half">
                            <label for="name-first"></label>
                            <input type="text" id="name-first" placeholder="First Name">
                          </div><div class="input half">
                            <label for="name-last"></label>
                            <input type="text" id="name-last" placeholder="Last Name">
                          </div>
                          <div class="input">
                            <label for="name-last"></label>
                            <input type="text" id="email" placeholder="Email Address">
                          </div>
                          <div class="input">
                            <label for="name-last"></label>
                            <input type="password" id="pass" placeholder="Password">
                          </div>
                          <p></p>
                          <p class="left small">Have an invite code?</p><a class="button right">Sign Up</a>
                        </form>
                        <p class="center small moreinfo">By signing up, you agree to the <a class="">Privacy Policy</a> & <a class="">Terms of Service</a></p>
                      </div> <!-- end #signup -->

                    </div><!--  end .listwrap -->
                  </div> <!-- end #signtab -->

                  <div id="forgot" class="tabcontent">
                    <form class="panel">
                      <h6>Forgot Password</h6>
                      <p class="small toppad-10 bottompad-20">Please enter the email address you used to create your account.</p>
                      <div class="input">
                        <label for="name-last"></label>
                        <input type="text" id="email" placeholder="Registered Email Address">
                      </div>
                      <p></p>
                      <p class="left small"><a class="changetab" data-target="#alltabs" href="#signtab" data-subtarget="#sign" data-subtab="#signin">Return to Sign In?</a></p><a class="button right changetab" data-target="#alltabs" href="#instructions">Instructions</a>
                    </form>
                    <p class="center small moreinfo">Don’t have an account? <a href="#signtab" class="changetab settab" data-target="#alltabs" data-subtarget="#sign" data-subtab="#signup">Sign Up Today</a></p>
                  </div> <!-- end #forgot -->

                  <div id="instructions" class="tabcontent">
                    <div class="panel">
                      <h6>INSTRUCTIONS SENT!</h6>
                      <span class="icon icon-inbox"></span>
                      <p class="small toppad-10 bottompad-20">Password reset instructions have been sent to willem@mookieyams.com. Don’t forget to check your spam and junk filters.</p>
                      <a class="button right changetab" data-target="#alltabs" href="#reset">Reset</a>
                    </div>
                    <p class="center small moreinfo">Don’t have an account? <a href="#signtab" class="changetab" data-target="#alltabs" data-subtarget="#sign" data-subtab="#signup">Sign Up Today</a></p>

                  </div> <!-- end #instructions -->

                  <div id="reset" class="tabcontent">
                    <form class="panel">
                      <h6>Reset Your Password</h6>
                      <p class="small toppad-10 bottompad-20">Please enter a new password.</p>
                      <div class="input">
                        <label for="password"></label>
                        <input type="text" id="password" placeholder="New password">
                      </div>
                      <div class="input">
                        <label for="password"></label>
                        <input type="text" id="password" placeholder="Confirm new password">
                      </div>
                      <p></p>
                      <p class="left small"><a class="changetab" data-target="#alltabs" href="#signtab" data-subtarget="#sign" data-subtab="#signin">Return to Sign In?</a></p><a class="button right">Reset</a>
                    </form>
                  </div> <!-- end #reset -->

                 </div> <!-- end listwrap -->
              </div><!-- .tabs -->
            </div>
          </div> 
        </div> <!-- END #signtabs -->
      </div><!-- END .vert-in -->
    </div><!-- END .vert-out -->
  </div><!-- END .overlay -->
    
    <!-- royalslider -->  
    <script src="/js/min/waypoints-min.js"></script>
    <script src="/js/min/jquery.organictabs-min.js"></script>
    <script src="/js/min/foundation-min.js"></script>
    <script src="/js/min/jquery.matchHeight-min.js"></script>
    <script src="/js/min/custom-min.js"></script>


    <script>
      $(document).foundation();
    </script>
  </body>
</html>