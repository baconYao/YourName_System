<?php
  // Start the session
  require_once('configure/startsession.php');

  // Insert the page header
  require_once('configure/header.php');
  // Show the navigation menu
  require_once('configure/navbar.php');
  

?>
  <!-- index主內容 -->
  <div id="index_Container">
    
    <div id="videoZone">
      <div class="space canPc"></div>
      <div class="ui grid container">
        <div class="eight wide column">
          <div class="ui yellow huge header">A new technology with novel ideas.</div>
        </div>
        <div class="ten wide column">
          <div class="ui olive huge header">It's like the sparkling stars in the night sky </div>
        </div>
        <div class="ten wide column">
          <div class="ui pink huge header">Secure your home peaceful and make your family safe.</div>
        </div>
      </div>
      
    </div>

    <div id="featureZone">
      <div class="sspace"></div>
      <br>
      <br>
      <div class="ui container red opaci2 segment">
        <div class="ui stackable three column grid">
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive alarm outline icon"></i>
              <div class="content">
                自動通知
                <div class="sub header">發生警戒狀況時會透過裝置通知使用者，並且告知入侵地點(從哪個地方入侵)。</div>
              </div>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive photo icon"></i>
              <div class="content">
                即時監控
                <div class="sub header">不再只是傳統的響起警報器，屋主可以透過手持裝置或電腦即時遠端監控屋中情況。</div>
              </div>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive announcement icon"></i>
              <div class="content">
                聲音嚇阻
                <div class="sub header">可以透過手持裝置傳送即時聲音，除了能嚇阻小偷外，還能避免與小偷發生正面衝突，以確保自身安全。</div>
              </div>
            </h2>
          </div>
        </div>
        <br>
        <br><br><br><br>
        <div class="ui stackable three column grid">
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive thumbs outline up icon"></i>
              <div class="content">
                方便管理
                <div class="sub header">透過使用者帳號可自型增加或移除監控設備，達到單一入口多點監控的效果，並不侷限於單一住家。</div>
              </div>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive lightning icon"></i>
              <div class="content">
                省電模式
                <div class="sub header">平常時段只有監控設備在運行，其餘設備處於關閉狀態，一旦發生警戒攝影機和喇叭才會通電開啟。</div>
              </div>
            </h2>
          </div>
          <div class="column">
            <h2 class="ui center aligned icon header">
              <i class="massive remove circle icon"></i>
              <div class="content">
                錯誤回報
                <div class="sub header">監控設備異常自動回報給使用者</div>
              </div>
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div id="videoIntroZone">
      <div class="space"></div>
      <div class="ui container segment">
        <div class="ui embed" data-url="https://www.youtube.com/embed/Atg5oyd4vns"></div>
      </div>
    </div>

    <div id="architectureZone">
      <div class="space canPhone"></div>
      <div class="canPc"style="height:4vh;"></div>
      <div class="ui container">
        <img class="ui fluid image segment" src="img/arduino.jpg">
      </div>
    </div> <!-- architectureZone -->
    
    <div id="teamZone">
      <div class="space"></div>
      <div class="ui stackable two column grid container">
        <!-- photo card -->
        <div id='yaoPhoto' class="column">
          <div class="ui centered card" >
            <div class="ui slide masked reveal image">
              <img src="img/myself.jpg" class="visible content">
              <img src="img/myself.jpg" class="hidden content">
            </div>
            <div class="content">
              <a class="header center aligned">Pei-Yao Chang</a>
            </div>
          </div>
        </div>


        <div id='yangPhoto' class="column">
          <div class="ui centered card" >
            <div class="ui slide masked reveal image">
              <img src="img/y.jpg" class="visible content">
              <img src="img/y1.jpg" class="hidden content">
            </div>
            <div class="content">
              <a class="header center aligned">Jia-Hong Yang</a>
            </div>
          </div>
        </div>

      </div>
    </div><!-- teamZone -->

  </div>  <!-- index_Container -->



  <!-- 加入會員modal -->
  <div id="signup_modal" class="ui basic modal">
    <i class="close icon"></i>
    <div class="header">
      <strong>加入會員</strong>
    </div>
    <div class="content">
      <form id="signUpForm" class="ui form segment" method="POST" style="background-color:#FFFFCC;">
        <div class="field">
          <label>使用者名稱</label>
          <input class="signup_input" name="account" id="account" type="text" data-content="至少4個字元，可以使用英文字母、數字" data-variation="small">
        </div>
      
        <div class="field">
          <label>建立密碼</label>
          <input class="signup_input" name="password1" id="password1" type="password" data-content="密碼至少要有8個字元。建議您不要使用已在其他網站登錄的密碼或容易被猜到的密碼 " data-variation="small">
        </div>
        <div class="field">
          <label>確認密碼</label>
          <input name="password2" id="password2" type="password">
        </div>

        <div class="field">
          <label>電子信箱</label>
          <input class="signup_input" name="email" id="email" type="text" data-content="我們會藉由這個電子郵件地址來確保您的帳戶安全性，您隨時可以自行透過「帳戶設定」管理相關功能。" data-variation="small">
        </div>

        <input class="ui blue submit button" id="signupSubmit" type="button" value="註冊" />
        <div class="ui error message"></div>
      </form>
    </div>
  </div>



  <!-- 登入modal -->
  <div id="login_modal" class="ui basic modal">
    <i class="close icon"></i>
    <div class="header">
      <strong>會員登入</strong>
    </div>
    <div class="content">
      <form class="ui form segment" method="post" style="background-color:#FFFFCC;">
        <div class="field">
          <label>信箱(email)</label>
          <input id="emailEntry" name="email" type="text" placeholder="wteofficialmail@gmail.com">
        </div>

        <div class="field">
          <label>密碼(password)</label>
          <input id="passwordEntry" name="passwd" type="password" >
        </div>

        <input class="ui green button" type="button" value="登入" name="submit" id="loginBtn">
        <a href="#" class="ui red submit button">忘記密碼</a>
        <div class="ui error message"></div>
      </form>
    </div>
  </div>


<?php
  // Insert the page footer
  require_once('configure/footer.php');
?>


