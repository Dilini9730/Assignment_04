<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a1712a2031.js" crossorigin="anonymous"></script>
<title>KANDY TRAVELERS</title>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>

.topnav {
  background-color: #333;
  overflow: hidden;
  padding:20px 10px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  line-height:25px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  color: white;
}
.topnav.news{
  background-color:#555;
  color:#ccc;
}

.sidenav{
  height:100%;
  float:left;
  width:160px;
  position:fixed;
  z-index:1;
  top:8px;
  left:8px;
  overflow:auto;
  padding-top:20px;
  background-image:url(Image_1.jpg);
}
.sidenav a {
  padding:6px 8px 6px 16px;
  text-decoration:none;
  font-size:25px;
  color:black;
  display:block;
}
.sidenav a:hover{
  color:#9FE2BF;
  background-color:#566773
}

.row {
    display: flex;
    flex-wrap: wrap;
  }
.text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); 
}

body {
  font-family: Arial, Helvetica, sans-serif;
  padding-left: 160px;
  background-color:skyblue;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0.8px;
  background-color: #555;
  color: #555;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about{
  padding: 50px;
  text-align: center;
  color:black;
  background-color:cadetblue;}

.container {
  padding: 0 16px;
  color:#000;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: gray;
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
table{
    table-layout:fixed;
    width:100%;
    letter-spacing: 2px;
}
.td a{
    word-wrap: break-word;
    width:"60%";
}

* {
  box-sizing: border-box;
}
input[type=text], input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
.column_1 {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
@media screen and (max-width: 600px) {
  .column_1, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

#login-form {
  border: 10px solid #555;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 300px;
  margin: 0 auto;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

.footer {
  width:100%;
  padding:100px;
  background:black;
  color:#efefef;
  display:flex;
  height:20px;
}
.col-1{
  text-align:center;
}
.col-2{
  flex-grow:2;
  text-align:center;
}
.col-3{
  text-align:center;
}
.footer div h3{
  font-weight:300;
  margin-bottom:30px;
  letter-spacing:1px;
}
.social-icons{
  margin-top:20px;
}
.social-icons i{
  font-size:22px;
  margin:10px;
  cursor:pointer;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#news">News</a>
  <a href="#contact">Contact Us</a>
  <a style="float:right" href="#login">Login</a>
</div>

<div id="Sidenav" class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#places">Places</a>
  <a href="#contact">Contact</a>
</div>

<table>
  <tr>
      <td width="40%"><img src="Image_2.jpeg"></td>
      <td class="a"><p style="font-size: 45px;font-weight: bold">KANDY TRAVELERS<br><br><pr style="background-color: dimgray;font-size: 45px;font-weight: bold;">your trusted travel partner</pr><br><br><pr style="color:#566573;font-size: 45px;font-weight: bold;">based in Sri Lanka.</pr>
      <p style="font-size: 20">Enjoy the wonder of the Kandy.Come and join us.<br>You can join us to travel anywhere in Kandy district according to your wish.Have fun with your family as you wish for easy money.wWe are united to provide you with reliable service. </p>
      </td>
  </tr>
</table>

<div id="about" class="about">
  <div class="about">
    <div style="text-align:left">
      <h1>ABOUT US</h1>
      <p>Kandy Travelers is your trusted travel partner in Sri Lanka, specializing in creating unforgettable experiences in the beautiful city of Kandy. With a team of passionate travel enthusiasts, we offer personalized services tailored to your preferences and budget. From affordable accommodation to convenient travel options and immersive cultural experiences, we are dedicated to ensuring your journey is seamless and memorable. Let us be your guide to discovering the wonders of Kandy.</p>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Image_7.jfif">
            <h2>AMBULUWAWA</h2>
        </div>
        <div class="swiper-slide">
          <img src="Image_8.jfif">
            <h2>GALABODA WATERFALLS</h2>
        </div>
        <div class="swiper-slide">
          <img src="Image_9.jfif">
            <h2>KELEBOKKA</h2>
        </div>
        <div class="swiper-slide">
          <img src="Image_10.jfif" >
          <h2>SIGIRIYA </h2>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>

<div id="places" class="places">
  <div class="places">
    <div style="text-align:center">
      <h1>TRAVELED PLACES</h1>
    </div>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="Image_3.jpg" alt="Sri Dalada maligawa" width="100%">
        <div class="container">
          <h2>Sri Dalada Maligawa</h2>
          <p>The Sri Dalada Maligawa, or Temple of the Sacred Tooth Relic, is a revered Buddhist temple located in Kandy, Sri Lanka. It houses a precious relic believed to be the tooth of Gautama Buddha, making it a place of great religious significance.
            The temple complex is a magnificent architectural marvel, showcasing intricate designs, golden roofs, and beautiful artwork. Surrounded by serene gardens, it offers a peaceful ambiance for spiritual contemplation and meditation.
            Visitors to the Sri Dalada Maligawa can witness daily rituals and ceremonies performed by Buddhist monks. The highlight is the puja, a sacred offering made to the tooth relic, accompanied by soothing chants and music. The temple also hosts cultural events and festivals, including the grand Esala Perahera procession, attracting thousands of devotees and tourists.
            Stepping into the Sri Dalada Maligawa is a journey into the heart of Sri Lankan Buddhism, allowing visitors to immerse themselves in the country's rich spiritual heritage. It is a place of reverence, beauty, and cultural significance, inviting all who visit to experience the essence of Sri Lanka's religious and architectural heritage.</p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="Image_5.jpg" alt="Peradeniya" width="100%">
        <div class="container">
          <h2>Perdeniya Botanical Garden</h2>
          <p>Peradeniya Botanical Gardens, also known as the Royal Botanic Gardens, is a stunning botanical garden located near Kandy in Sri Lanka. Spread over 147 acres, it is one of the most beautiful and well-maintained gardens in Asia.
            The Peradeniya Gardens offer a diverse collection of plant species, including rare and exotic plants from around the world. The garden's highlight is its vast collection of orchids, showcasing vibrant colors and captivating fragrances. Visitors can also explore a variety of palm trees, medicinal plants, giant bamboo groves, and a majestic avenue of royal palms.
            Strolling through the garden's winding pathways, visitors are treated to picturesque landscapes, serene water bodies, and breathtaking vistas. The garden is also home to a beautiful orchid house, a spice garden, and a collection of towering fig trees. There is even a massive Javan fig tree with an expansive canopy, believed to be one of the largest of its kind in the world.
            The Peradeniya Gardens not only serve as a haven for plant enthusiasts but also offer a tranquil escape for nature lovers and families.</p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="Image_4.jpg" alt="Bahirawakanda" width="100%">
        <div class="container">
          <h2>Bahirawakanda Temple</h2>
          <p>Bahirawakanda Temple, located in Kandy, Sri Lanka, is a prominent Buddhist temple known for its magnificent Buddha statue and panoramic views of the city. Perched atop Bahirawakanda Hill, the temple offers a serene and spiritual retreat for visitors.<br>The main highlight of Bahirawakanda Temple is the towering white Buddha statue that stands at a height of approximately 88 feet (26.8 meters). This majestic statue, visible from many parts of Kandy, is a symbol of peace, compassion, and enlightenment. Visitors can climb the steps leading to the statue and admire its grandeur up close, as well as enjoy the stunning views of the surrounding landscape.<br>The temple grounds are beautifully landscaped, with well-maintained gardens and peaceful surroundings. As you explore the temple complex, you'll encounter smaller statues, colorful flower offerings, and ornate decorations that reflect the rich Buddhist heritage of Sri Lanka.<br>Bahirawakanda Temple is not only a place of worship but also a popular tourist attraction. It provides a tranquil atmosphere for meditation and reflection, allowing visitors to immerse themselves in the spiritual ambiance.</p>
      </div>
    </div>
  </div>
  </div>
</div>

<table>
  <tr>
    <td width="40%"><img src="Image_12.jfif" width="75%"></td>
    <td>
        <section id="news" class="topnav news">
          <div class="container">
            <div style="text-align:center">
            <h1>NEWS</h1>
            <h3>GRAB YOUR CHANCE</h3>
            </div>
            <ul class="news-list">
              <div style="text-align: left;">
              <li>
                <p>Offers are available in April and December months.....</p>
              </li>
              <li>
                <p>Special offers up to joining three members.....</p>
              </li>
              <li>
                <p>If you take more than three travels per month,one is free.....</p>
              </li>
              <li>
                <p>Points are added for every travel opportunity you get.....</p>
              </li>
              </div>
            </ul>
          </div>
        </section>
    </td>
  </tr>
</table>

<div id="services" class="topnav">
  <div class="container">
    <div style="text-align:center">
      <h1>OUR SERVICES</h1>
    </div>
    <ol class="services-list">
      <div style="text-align: left;">
      <li>
        <p>Afforadable Hotels</p>
      </li>
      <li>
        <p>Fastest Travel</p>
      </li>
      <li>
        <p>Food And Drinks</p>
      </li>
      <li>
        <p>Safety Guide</p>
      </li>
      <li>
        <p>New Adventures</p>
      </li>
      <li>
        <p>Arranged according to your requirements</p>
      </li>
      </div>
    </ol>
  </div>
</div>

<div id="contact" class="topnav">
  <div class="container">
  <div class="Contact">
    <div class="topnav">
        <div class="contact">
          <div style="text-align:center;color:#ccc">
            <h1>CONTACT US</h1>
            <p>KANDY TRAVELERS</p>
          </div>
          <div class="row">
            <div class="column_1">
              <img src="Image_6.png" style="width:100%">
            </div>
            <div class="column_1">
            <form action="contact.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
                <label for="email">E-mail Address</label>
                <input type="text" id="email" name="email" placeholder="Your email..">
                <label for="phone_number">Contact Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Your contact number..">
                <label for="city">City</label>
                <select id="city" name="city">
                  <option value="Kandy">Kandy</option>
                  <option value="Matale">Matale</option>
                  <option value="Nuwaraeliya">Nuwaraeliya</option>
                  <option value="other">other</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something about your plan and what do yo want.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
  </div>
  </div>
</div>

<div id="login" class="login">
  <div class="login">
    <div style="text-align:center">
      <h1>LOGIN TO <br>KANDY TRAVERLER</h1>
        <div class="login-container">
        <form action="login.php" method="POST">
              <h2>KANDY TRAVELERS</h2>
              <input type="text" id="username" placeholder="Username" required>
              <input type="password" id="password" placeholder="Password" required>
              <button type="submit">Login<br></button>
            </form>
        </div>
        <p>New Here?<a href="signup.php">Register</a></p>
    </div>
  </div>
</div>


  <div class="footer">
    <div class="col-1">
      <h3>Find us on</h3>
      <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
      </div>
    </div>
    <div class="col-2">
      <p>All right reserved@KANDY TRAVELERS 2023</p>
    </div>
    <div class="col-3">
      <h3>Contact</h3>
      <p>081-8523697</p>
    </div>
  </div> 

<script>
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

</script>
</body>
</html>
