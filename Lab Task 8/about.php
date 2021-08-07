<?php
include 'header.php';
?>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>


<div class="about-section">
    <h1>About Us</h1>
    <p>We tried to create a friendly and helpful environment for our students and alumni through which alumnies
        can provide all the resources to help the students to get acquainted with the research and marketplace.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="MyPic.jpg" alt="Ankur" style="width:100%">
            <div class="container">
                <h2>Ankur Saha</h2>
                <p class="title">Founder</p>
                <p>I am full stack web developer having good experience in the development of a responsive websites. I can develop new and fully secure websites from scratch with the latest features.
                    your satisfactions and top quality work from my side are my priorities. My expertise are:
                    PHP & HTML5, CSS3, javascript, bootstrap Mysql.</p>
                <p>ankursahabindu@gmail.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="MyPic1.jpg" alt="Pulok" style="width:100%">
            <div class="container">
                <h2>Pulok Rehan</h2>
                <p class="title">Founder</p>
                <p>Hello! My name is Pulok, I'm working as web developer/designer from last 2 years. I am experienced in PHP, custom code, CakePHP, Codeignitor, wordpress, graphics and HTML.
                    My objective is to write well designed, testable, efficient code by using best web development practices.</p>
                <p>pulokrehan@gmail.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="MyPic2.jpg" alt="Sazid" style="width:100%">
            <div class="container">
                <h2>Sazid Ahmed</h2>
                <p class="title">Founder</p>
                <p>Hello! My name is Sazid, I'm working as web developer/designer from last 2 years. I am experienced in PHP, custom code, CakePHP, Codeignitor, wordpress, graphics and HTML.
                    My objective is to write well designed, testable, efficient code by using best web development practices.</p>
                <p>sazidahmed@gmail.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="MyPic3.jpg" alt="Sazid" style="width:100%">
            <div class="container">
                <h2>Asiqur Rahaman Shourov</h2>
                <p class="title">Founder</p>
                <p>Hello! My name is Shourov, I'm working as web developer/designer from last 2 years. I am experienced in PHP, custom code, CakePHP, Codeignitor, wordpress, graphics and HTML.
                    My objective is to write well designed, testable, efficient code by using best web development practices.</p>
                <p>asiqurrahaman@gmail.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>