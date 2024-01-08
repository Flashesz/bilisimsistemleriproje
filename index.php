<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yapın</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >Fadem Estetik</h1>
        <div>
          <h2 class=" sign-in text-uppercase">Giriş Yap</h2>
        <p>Giriş Bilgilerini Giriniz:</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
            lütfen mail adresinizi ya da şifrenizi giriniz:
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              e-posta ya da kullanıcı adı bulunamadı
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Mail adresini girin" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Şifre:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Şifreyi girin" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>" autocomplete="on">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Giriş Yap</button>
          <p class="mt-4">Site ana sayfasına dönmek için <a href="fademsite/index.html">buraya tıklayınız</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Hesap Oluştur</button>
     </div>

   </main>

          <div class="bg"></div>

   <div class="register d-flex justify-content-center align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase">Kayıt Ol</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">Kullanıcı Adı <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Kullanıcı Adını Girin" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Email Adresini Girin" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Şifre <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Şifrenizi Girin" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Şifreyi Doğrula <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Şifrenizi tekrardan yazın" name="conPass" autocomplete="on">
           </div>
           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Kayıt Ol</button>
           <p class="mt-4">Hesabınız var mı? <a href="index.php">Giriş Yapın</a></p>
       </form>
   </div>
   </div>
   <script src="/js/bootstrap.bundle.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>