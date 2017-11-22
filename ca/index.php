<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    if(!empty($_POST['captcha_code'])){
        
        //get captcha code from session
        $captchaCode = $_SESSION['captchaCode'];
        
        //get captcha code from input field
        $enteredcaptchaCode = $_POST['captcha_code'];
        
        //verify the captcha code
        if($enteredcaptchaCode === $captchaCode){
            $succMsg = 'Entered captcha code has matched.';
        }else{
            $errMsg = 'Captcha code not matched, please try again.';
        }
        
    }else{
        $errMsg = 'Please enter the captcha code.';
    }
}
?>

<?php if(!empty($errMsg)) echo '<p style="color:#EA4335;">'.$errMsg.'</p>';?>
<?php if(!empty($succMsg)) echo '<p style="color:#34A853;">'.$succMsg.'</p>';?>
<html>
    
    <head>
        <title>
            
        </title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    </head>    

<img src="captcha.php" id="capImage"/>
<br/>Can't read the image? click here to  <a href="javascript:void(0);" onclick="javascript:$('#capImage').attr('src','captcha.php');">refresh</a>.
<form method="post">
    Enter the code: <input name="captcha_code" type="text" value="">
    <input type="submit" name="submit" value="SUBMIT">
</form>
</htm>