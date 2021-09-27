```PHP
    <form method="post" action=""> <?php //送信先が空なので、自分自身（index.php）を再度呼び出す
                                    ?>
      <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                      echo $_POST['your_name'];
                                                    } ?>">
        <!-- POSTパラメータが空じゃない場合のみvalue属性にセット -->
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <input type="mail" name="email" value="<?php if (!empty($_POST['email'])) {
                                                  echo $_POST['email'];
                                                } ?>">
      </div>
      <div class="element_wrap">
        <label>性別</label>
        <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male">男性</label>
        <label for="gender_female"><input id="gender_female" type="radio" name="gender" value="female">女性</label>
      </div>
      <div class="element_wrap">
        <label>年齢</label>
        <select name="age">
          <option value="">選択してください</option>
          <option value="1">〜19歳</option>
          <option value="2">20歳〜29歳</option>
          <option value="3">30歳〜39歳</option>
          <option value="4">40歳〜49歳</option>
          <option value="5">50歳〜59歳</option>
          <option value="6">60歳〜</option>
        </select>
      </div>
      <div class="element_wrap">
        <label>お問い合わせ内容</label>
        <textarea name="contact"></textarea>
      </div>
      <div class="element_wrap">
        <label for="agreement"><input id="agreement" type="checkbox" name="agreement" value="1">プライバシーポリシーに同意する</label>
      </div>
      <input type="submit" name="btn_confirm" value="入力内容を確認する">
    </form>



    <form method="post" action="">
      <div class="element_wrap">
        <label>氏名</label>
        <p><?php echo $_POST['your_name']; ?></p>
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <p><?php echo $_POST['email']; ?></p>
      </div>
      <div class="element_wrap">
        <label>性別</label>
        <p><?php if($_POST['gender'] === "male" ){ echo '男性'; } else {echo '女性' ; }?></p>
      </div>
      <div class="element_wrap">
        <label>年齢</label>
        <p>
          <?php if( $_POST['age'] === "1") {
            echo '〜19歳';
          }elseif($_POST['age'] === "2") {
            echo '20歳〜29歳';
            }elseif($_POST['age'] === "3") {
            echo '30歳〜39歳';
            }elseif($_POST['age'] === "4"){
            echo '40歳〜49歳';
            }elseif($_POST['age'] === "5"){
            echo '50歳〜59歳';
            }elseif($_POST['age'] === "6"){
            echo '60歳〜';
            }
          ?>
        </p>
      </div>
      <div class="element_wrap">
        <label>お問い合わせ内容</label>
        <p><?php echo nl2br($_POST['contact']); ?></p>
      </div>
      <div class="element_wrap">
        <p>
          <?php
          if($_POST['agreement'] === "1") {
            echo '同意する';
          } else {
            echo '同意しない';
          }
          ?>
        </p>
      </div>
      <!-- 入力値の受け渡し用 -->
      <input type="submit" name="btn_back" value="戻る">
      <input type="submit" name="btn_submit" value="送信">
      <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
      <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
      <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
      <input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
      <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
      <input type="hidden" name="agreement" value="<?php echo $_POST['agreement']; ?>">
    </form>
```
