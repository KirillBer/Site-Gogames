<div class="formpage" id="form">
            <form action="forma.php" method="post">
                <div class="formname">Feedback</div>
                    <div class="formusername">Name</div>
                    <input class="formusernamefield" placeholder="Enter your name" name="name" required type="text" minlength="1" maxlength="32" pattern="[a-z]|[A-Z]|[а-я]|[А-Я]{1-30}">
                        <div class="formemail">Email</div>
                        <input class="formemailfield" placeholder="Enter your email" name="email" required type="email" minlength="4" maxlength="32">
                            <div class="formnumber">Age</div>
                            <input class="formnumberfield" placeholder="Enter your age" name="age" required type="number" min="4" max="150">
                                <div class="pozhelaniya">Recommendations</div>
                                <textarea class="pozhelaniyafield" name="comment" required maxlength="1024"></textarea>
                                    <div class="formcheckbox"><input class="formcheckboxfield" required type="checkbox"> You agree to the processing of personal data</div>
                                        <input class="button" type="submit" value="Send">
                </form>
        </div>
        <div class="footerpage">  
            <section class="footer">
                <a href="#">
                    <img src="img/Logo.png" class="HeaderLogo" class="FooterLogo">
                </a>
                <b class="FooterRights">Copyright © 2022 HEALAS.LT. All Rights Reserved.</b>
                <a href="#">
                    <img src="img/FTI.png" class="FTI">
                </a>
                <input type="button" class="btn" value="Our contacts">
            </section>
        </div>    
</body>
</html>