<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- <link rel="stylesheet" href="/public/style.css"> -->
</head>

<!-- 
	!Plan
	TODO: 1) Make html frame for platform
	TODO: 2) Make styels for main page
   TODO: 3) Make responsive main page
   TODO: 4) Make sign up and sign in pages
   TODO: 5) Make profile page
   TODO: 6) Make category page for developer
   TODO: 7) Make tool page with previev (image) and description
   TODO: 8) Make machine page
	? Realize database and php app for functionality
 -->

<body>
   <header class="header">
      <div class="container header__container">
         <!-- <img src="#0" alt="logo" class="logo"> -->
         <a href="#0" class="header__logo">VMZ</a>
         <div class="header__wrapper">
            <nav class="navigation">
               <ul class="navigation__list">
                  <li class="navigation__item"><a href="#0" class="navigation__link">Programs</a></li>
                  <li class="navigation__item"><a href="#0" class="navigation__link">Tools</a></li>
                  <li class="navigation__item"><a href="#0" class="navigation__link">Calc time</a></li>
                  <li class="navigation__item"><a href="#0" class="navigation__link">CNC act</a></li>
                  <li class="navigation__item"><a href="#0" class="navigation__link">CNC doc</a></li>
               </ul>
            </nav>
            <div class="user">
               <img src="#0" alt="" class="user__photo user__photo_disable">
               <a href="#0" class="user__sign-in">sign in</a>
               <a href="#0" class="user__sign-in">sign up</a>
            </div>
         </div>
      </div>
   </header>
   <main class="main">
      <section class="intro">
         <div class="intro__wrapper">
            <h1 class="intro__head"></h1>
            <p class="intro__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsa molestiae
               reprehenderit ex inventore quaerat nisi provident id! </p>
            <p class="intro__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis facere dolorem
               dolores asperiores fugit voluptas possimus excepturi soluta.</p>
            <button class="intro__video">Watch intro about VMZ</button>
         </div>
         <img src="#0" alt="VMZ vehicles photo" class="intro__image">
      </section>
      <section class="opportunities">
         <h2 class="opportunities__head">Our customers opinion about us</h2>
         <div class="opportunities__wrapper">
            <article class="card-info">
               <img src="#0" alt="icon" class="card-info__icon">
               <p class="card-info__text">Small and short text about preferences</p>
            </article>
            <article class="card-info">
               <img src="#0" alt="icon" class="card-info__icon">
               <p class="card-info__text">Small and short text about preferences</p>
            </article>
            <article class="card-info">
               <img src="#0" alt="icon" class="card-info__icon">
               <p class="card-info__text">Small and short text about preferences</p>
            </article>
            <article class="card-info">
               <img src="#0" alt="icon" class="card-info__icon">
               <p class="card-info__text">Small and short text about preferences</p>
            </article>
         </div>
      </section>
      <section class="shop">
         <div class="carousel">
            <div class="carousel__wrapper">
               <acrticle class="card-shop">
                  <span class="card-shop__label">new</span>
                  <img src="#0" alt="product image" class="card-shop__image">
                  <span class="card-shop__price">price</span>
                  <h2 class="card-shop__head">head about product</h2>
                  <p class="card-shop__text">middle text up to 25 words</p>
               </acrticle>
               <acrticle class="card-shop">
                  <span class="card-shop__label">new</span>
                  <img src="#0" alt="product image" class="card-shop__image">
                  <span class="card-shop__price">price</span>
                  <h2 class="card-shop__head">head about product</h2>
                  <p class="card-shop__text">middle text up to 25 words</p>
               </acrticle>
               <acrticle class="card-shop">
                  <span class="card-shop__label">new</span>
                  <img src="#0" alt="product image" class="card-shop__image">
                  <span class="card-shop__price">price</span>
                  <h2 class="card-shop__head">head about product</h2>
                  <p class="card-shop__text">middle text up to 25 words</p>
               </acrticle>
            </div>
            <div class="carousel__btn-block">
               <button class="carousel__btn">1</button>
               <button class="carousel__btn">2</button>
               <button class="carousel__btn">3</button>
            </div>
         </div>
      </section>
      <section class="news">
         <h2 class="news__head">News & Events</h2>
         <div class="news__wrapper">
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
            <article class="card-event">
               <div class="card-event__wrapper">
                  <span class="card-event__label">soon/now/exists</span>
                  <img src="#0" alt="event image" class="card-event__image">
                  <time class="card-event__time">20.02.2023</time>
               </div>
               <p class="card-event__description">description up to 30 words</p>
               <a href="#0" class="card-event__link">details</a>
            </article>
         </div>
         <article class="news-letter">
            <h2 class="news-letter__head">Get news about our products and events</h2>
            <div class="news-letter__wrapper">
               <form action="#0" class="news-letter__form">
                  <input type="email" name="email" placeholder="email">
                  <input type="submit">
               </form>
            </div>
            <p class="news-letter__text">disclaimer: you can disable our news-letter in your profile</p>
         </article>
      </section>
   </main>
   <footer class="footer">
      <p class="footer__text">developed and supported by dofamine.<br>All rights reserved.</p>
   </footer>
</body>

</html>