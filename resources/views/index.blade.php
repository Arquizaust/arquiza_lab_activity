<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/Users/jaysonarquiza/example-app/resources/css/styles.css">
  <link rel="stylesheet" href="/Users/jaysonarquiza/example-app/resources/css/navbar.css">
   <link rel="stylesheet" href="/Users/jaysonarquiza/example-app/resources/css/footer.css">
  <title>Shoe Store - Product Page</title>
</head>
<header>
       <img src="123.png" alt="Logo Placeholder" class="logo-placeholder">
    </header>
<body>
  
    <div class="container">
        <div class="bars"></div>
    </div>

    <nav>
        <h2>Shoes</h2>

        <div class="close">
            <div></div>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Sale</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script type="text/javascript"> const open = document.querySelector('.container');
        const close = document.querySelector('.close');
        var tl = gsap.timeline({ defaults: { duration: 1, ease: 'expo.inOut' } });
        open.addEventListener('click', () => {
            if (tl.reversed()) {
                tl.play();
            } else {
                tl.to('nav', { right: 0 })
                    .to('nav', { height: '100vh' }, '-=.1')
                    .to('nav ul li a', { opacity: 1, pointerEvents: 'all', stagger: .2 }, '-=.8')
                    .to('.close', { opacity: 1, pointerEvents: 'all' }, "-=.8")
                    .to('nav h2', { opacity: 1 }, '-=1');
            }
        });

        close.addEventListener('click', () => {
            tl.reverse();
        });</script>
    
  <main class="product-container">
    <div class="product-image">
      <img src="shoe-image.jpg" alt="Shoe Name">
    </div>
    <div class="product-details">
      <h2>Stylish Sneakers</h2>
      <p class="product-price">$99.99</p>
      <p class="product-description">Step out in style with these comfortable and trendy sneakers.</p>
      <button class="buy-button"><a href="checkout.html">Buy Now</a></button>
    </div>
  </main>
</body>
<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Something</h1>
        
    <h2>Contact</h2>
    
    <address>
      Anywhere<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Get Help</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Order Status</a>
        </li>

        <li>
          <a href="#">Delivery</a>
        </li>
            
        <li>
          <a href="#">Returns</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">About Shoe</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">News</a>
        </li>
        
        <li>
          <a href="#">Careers</a>
        </li>
        
        <li>
          <a href="#">Investors</a>
        </li>
        
        <li>
          <a href="#">Sustainability</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Something. All rights reserved.</p>
    
    <div class="legal__links">
    </div>
  </div>
</footer>
</html>