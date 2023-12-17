
<style>
    .heading-form {
        text-align: center;
        font-size: 26px;
        font-family: var(--font-text);
        color: var(--brand-icon-2);
        margin: 28px;
    }

    .form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: fit-content;
    }

    .form form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 5px;
    }

    .form form input,
    textarea {
        width: 420px;
        margin: 8px;
        height: 36px;
        border-radius: 5px;
        border: none;

    }

    .form form input[type="submit"] {
        background-color: var(--brand-icon-2);
    }

    .form form input[type="submit"]:hover {
        background-color: var(--brand-icon);
    }
</style>

<div class="contact-form" id="contact">
    <div class="heading-form">
        Contact Us
    </div>
    <div class="form">
        <form action="">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Name">
            <textarea name="query" placeholder="Query" cols="55" rows="6"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<style>
    .container {
        max-width: 1170px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style: none;
    }

    .footer {
        background-color: var(--bg);
        padding: 70px 0;
    }

    .footer-col {
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-family: var(--font-text);
        font-size: 18px;
        color: var(--brand-icon-2);
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: var(--brand-icon);

        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-family: var(--font-text);

        font-size: 16px;
        text-transform: capitalize;
        color: white;
        text-decoration: none;
        font-weight: 300;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: var(--brand-icon-2);

        padding-left: 8px;
    }

    .footer-col .social-links a {
        font-family: var(--font-text);

        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
        .footer-col {
            width: 50%;
            margin-bottom: 30px;
        }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
        }
    }
</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/header.js"></script>

</html>