<html>
    <head>
        <link rel="shortcut icon" href="img/icon.ico">
        <title>Kriptografi</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <style>
            
            #head {
                text-align: center;
                color: yellow;
                font-size: 40px;
            }

            body {
                background: #000000;
                
            }

            .bgr-animate {
                height: 800px !important;
            }

            .bgr-canvas {
                width: 100% !important;
                height: 100% !important;
            }

            #card1 {
                background: transparent;
                border-radius: 10px;
                box-shadow: 0px 1px 8px #00ff37;
                height: 410px;
                margin-top: -385px;
                margin-bottom: 8px;
                margin-left: -480px; 
                margin-right: 20px;
                width: 329px;
            }

            #card2 {
                background: transparent;
                border-radius: 10px;
                box-shadow: 0px 1px 8px #00ff37;
                height: 410px;
                margin-top: -600px;
                margin-bottom: 8px;
                margin-left: 700px; 
                margin-right: 9px;
                width: 329px;
            }

            #card-content {
                padding: 12px 44px;
            }

            #card-tittle {
                font-family: "Raleway Thin", sans-serif;
                color: white;
                letter-spacing: 3px;
                padding-bottom: 23px;
                padding-top: 13px;
                text-align: center;
            }

            .underline-tittle {  
                height: 2px;
                margin: -1.1rem auto 0 auto;
                width: 150px;
                background-color: #00ff37;
                animation-name: example;
                animation-duration: 60s;
            }

            .underline-tittle2 {  
                height: 2px;
                margin: 0.2rem auto 0 auto;
                width: 190px;
                background-color: #00ff37;
                animation-name: example;
                animation-duration: 60s;
            }

            @keyframes example {
                0%   {background-color: #00ff37;}
                25%  {background-color: red;}
                50%  {background-color: yellow;}
                100% {background-color: blue;}
            }

            #key-box {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 100%; 
                height: 30px; 
                margin-top: 15px; 
                margin-bottom: 20px;
            }

            #messages-box {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 100%; 
                height:180px; 
                margin-bottom:5px;
            }

            #submit-button {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                box-shadow: 0px 1px 8px #00ff37;
                cursor: pointer;
                color: white;
                font-family: "Raleway SemiBold", sans-serif;
                height: 30px;
                margin-left:60px; 
                margin-top:15px; 
                width: 50%;
                transition: 0.25s;
            }

            #key-box2{
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 75%; 
                height: 30px; 
                margin-top: 2px; 
                margin-bottom: 20px;
                margin-left: 40px;
            }

            #messages-box2 {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 75%; 
                height:180px; 
                margin-bottom:5px;
                margin-left: 40px;
            }

            #submit-button2 {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                box-shadow: 0px 1px 8px #00ff37;
                cursor: pointer;
                color: white;
                font-family: "Raleway SemiBold", sans-serif;
                height: 30px;
                margin-left:100px; 
                margin-top:15px; 
                width: 38%;
                transition: 0.25s;
            }

            #card-info {
                background: transparent;
                border-radius: 0px;
                box-shadow: 0px 1px 8px #ff0000;
                height: 400px;
                margin-top: 100px;
                margin-bottom: 8px;
                margin-left: 0px; 
                width: 329px;
            }

            #card-info2 {
                background: transparent;
                border-radius: 0px;
                box-shadow: 0px 1px 8px #ff0000;
                height: 400px;
                margin-top: 88px;
                margin-bottom: 8px;
                margin-left: 700px; 
                width: 329px;
            }            

            ::placeholder {
                color: white;
            }

            #tittle-proses {
                font-family: "Raleway Thin", sans-serif;
                color: white;
                padding-bottom: 50px;
                padding-top: -5px;
                text-align: left;
            }

            #plaint-box {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 70%; 
                height: 25px; 
                margin-left: 50px;
                margin-top: -40px;
            }

            #plaint-box2 {
                background: -webkit-linear-gradient(right,#413f3f, #202020);
                border: none;
                border-radius: 4px;
                box-shadow: 0px 1px 8px #00ff37;
                color: white;
                width: 100%; 
                height: 100px;
                margin-top: 2px;
                margin-bottom: 10px;
            }

        </style>


<div id="head"> Cryptography
    <div class="underline-tittle2"></div>
</div>

    </head>
    
    <body>
    <?php include 'chiper.php';?>

    <backgound class="bgr-animate" id="bali-animation" style="position: relative; height: 100% !important;">
    <canvas class="bgr-canvas" id="bali-canvas" width="100%" height="0%"></canvas></background>

    <div id="card2">
        <div id="card-content">
            <div id="card-tittle">
                <h3>DECRYPTION</h3>
                <div class="underline-tittle"></div>
            </div>
        </div>
                <form action="" method="post" style="padding: 0px; margin: 0 auto;">
                        <input id="key-box2" class="form-control smooth text-center" placeholder="input key..." name="key2" type="text"/>
                        <textarea id="messages-box2" class="form-control smooth text-center" rows="3" name="messages2" id="messages" placeholder="input meesages..."    ></textarea>
                        <input id="submit-button2" type="submit" name="submit2" value="Decrypt"/>
                </form>


        <div id="card1"> 
            <div id="card-content">
                <div id="card-tittle">
                    <h3>ENCRYPTION</h3>
                    <div class="underline-tittle"></div>
                </div>
                    <form action="" method="post" style="padding: 0px; margin: 0 auto;">
                        <input id="key-box" class="form-control smooth text-center" placeholder="input key..." name="key" type="text"/>
                        <textarea id="messages-box" class="form-control smooth text-center" rows="3" name="messages" id="messages" placeholder="input meesages..."    ></textarea>
                        <input id="submit-button" type="submit" name="submit" value="Encrypt"/>
                    </form>
                </div>
            <div id="card-info">
                <div id="card-content">
                    <div id="tittle-proses">

                            <?php 
                                if (isset($_POST['submit'])) {
                                    $kunci=$_POST['key'];
                                    $pesan=$_POST['messages'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci); ?>
                                    <p style="color: green"> Key : </p><textarea id="plaint-box" class="form-control smooth text-center" > <?php echo $kunci; ?></textarea>
                                    <p style="color: green"> Messages :</p><textarea id="plaint-box2" class="form-control smooth text-center" > <?php echo $plainText; ?></textarea>
                                <?php } else {?>
                                    <p>
                                        Waiting Input Proses..</p>
                                <?php };?>
                                    
                        
                            <p style="color: red">Plaintext :</p>
                            
                                <?php 
                                if (isset($_POST['submit'])) {
                                    $kunci=$_POST['key'];
                                    $pesan=$_POST['messages'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci); ?>
                                    <p style="color: red"><textarea id="plaint-box2" style="color: red" class="form-control smooth text-center" > <?php echo $cipherText = Encipher($chiperkeyText, 3); ?></textarea></p>
                                <?php } else {?>
                                    <p style="color: red"> Waiting Input Proses..</p>
                                <?php };?>      
                        </div>
                    </div>
                </div>
            </div>
                 

        </div>
                  
            <div id="card-info2">
                <div id="card-content">
                    <div id="tittle-proses">
                    
                                <?php 
                                if (isset($_POST['submit2'])) {
                                    $kunci=$_POST['key2'];
                                    $pesan=$_POST['messages2'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci);
?>
                                    <p style="color: green"> Key : </p><textarea id="plaint-box" class="form-control smooth text-center" > <?php echo $kunci; ?></textarea></p>
                                    <p style="color: green"> Messages :</p><textarea id="plaint-box2" class="form-control smooth text-center" > <?php echo $plainText; ?></textarea></p>
                                <?php } else {?>
                                    <p style="color: white"> Waiting Input Proses..</p>
                                <?php };?>
                        
                                <p style="color: red">Plaintext :</p>
                            
                                <?php 
                                if (isset($_POST['submit2'])) {
                                    $kunci=$_POST['key2'];
                                    $pesan=$_POST['messages2'];
                                    //Input
                                    $plainText = $pesan;
                                    
                                    $cipherText2 = Decipher($plainText, 3); ?>
                                    <p style="color: red"><textarea id="plaint-box2" style="color: red" class="form-control smooth text-center"> <?php  echo dekripsi($cipherText2, $kunci); ?></textarea></p>
                                <?php } else {?>
                                    <p style="color: red"> Waiting Input Proses..</p>
                                <?php };?>
                    </div>
                </div>
            </div> 
                                
    </div>
</div>

    <script src="https://intranet.balitower.co.id/assets/GreenSh/js/libs/gsap/TweenLite.min.js"></script>   
    <script src="https://intranet.balitower.co.id/assets/GreenSh/js/libs/gsap/easing/EasePack.min.js"></script>
    <script src="https://intranet.balitower.co.id/assets/js/anmt.js"></script>

    </body>

    <footer>
    <p style="color: white; margin-top: 100px;">code by : © 2020 Ridwan Aden - 41519110089 | Stellar@CP-0 #################</p> 
    </footer>
</html>