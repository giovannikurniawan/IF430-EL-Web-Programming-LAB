<!DOCTYPE html>
<html>
<head>
    <title>Google ReCAPTCHA Demo</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <h1>Google ReCAPTCHA</h1>
    <form id="comment_form" action="responses.php" method="post">
        <input type="text" name="name" placeholder="Insert your name" size="40"><br><br>
        <div class="g-recaptcha" data-sitekey="6LcCGF0aAAAAAOLEvCesspjYqm4H8fk20QwW7NWS" style="margin-bottom: 10px;"></div>
        <input type="submit" name="submit" value="submit"><br><br>
    </form>
</body>
</html>