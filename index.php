<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>author book</title>
    <link rel="stylesheet" href="stylesheets/style.css">
  </head>
  <body>
     
        <header class="header-main clearfix"><!--Begin-header-->
        <div class="header-top-line clearfix">
        </div>
         <div class="container clearfix">
          <div class="logo">
            <img src="images/logo.png" width="102" height="78" alt="logo">
          </div>
          <nav class="navigation-main" role="navigation">
            <ul>
              <li><a href="#">Главная</a></li>
              <li><a href="#">Обо мне</a></li>
              <li><a href="#">Написать мне</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </nav>
          </div>
        </header><!--End-header-->
        
    
    
    <div class="container clearfix"><!--Begin-content-->
     
      <main role="main"><!--Begin-main-->
        <div class="block-content-left">
          <h1>Рабыня<br>
          изаура <br>
          вернулась
          
          </h1>
          <a href="№">скачать в pdf</a>
          <a href="№">скачать в pdf</a>
          <a href="№">скачать в pdf</a> 
        </div>
        <div class="block-content-right">
          <figure class="book-cover">
            <img src="images/book-cover.jpg" width="370" height="370" alt="book-cover">
          </figure>  
        </div>
      </main><!--End-main-->
      
      <div class="feature-block" role="complementary"><!--Begin-feature-block-->
        <div class="block">
          <h2 class="block-title">Обо мне</h2>
          <div class="block-content">
            <p>
              Меня зовут Василий Пупкин .....................sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero. 
            </p>
            <a href="#">Читать далее</a>
          </div>
        </div>
        
         <div class="block">
          <h2 class="block-title">От автора</h2>
          <div class="block-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.   
            </p>
            <p>
              Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat  
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.   
            </p>
          </div>
        </div>
        
         <div class="block">
          <h2 class="block-title">О книге</h2>
          <div class="block-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. 
            </p>
            <i>Василий Пупкин</i> <a href="#">Vasilii-Pupkin.ru</a>
          </div>
        </div>
      </div><!--End-feature-block-->
      
      <div class="call-back-form"><!--Begin-call-back-form-->
        <h2 class="block-title">Написать мне</h2>
        <form action="/echo" method="post">
          <input type="text" name="name"  placeholder="Ваше имя">
          <input type="text" name="mail"  placeholder="Ваша почта">
          <input type="text" name="site"  placeholder="Сайт">
          <textarea placeholder="Сообщение"></textarea>
          <button type="submit" class="btn">Отправить</button>
        </form>
      </div><!--End-call-back-form-->
      
      <div class="social-block"><!--Begin-social-block-->
        <div class="block-left">
          <h3 class="block-title">контакты</h3>
          <ul class="my-contacts">
            <li><a href="#">mail@mail.ru</a></li>
            <li><a href="#">Scype iAuthor</a></li>
          </ul>   
        </div>
        <div class="block-right">
          <h3 class="block-title">я в социальных сетях</h3>
          <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
          </ul>  
        </div>
      </div><!--End-social-block-->
      
    </div><!--End-content-->
    
    <!--Begin-footer-->
    <footer class="footer-main" role="contentinfo">
      <div class="container clearfix">
        <div class="block-left">
          <nav class="navigation-footer">
            <ul>
              <li><a href="#">Главная</a></li>
              <li><a href="#">Обо мне</a></li>
              <li><a href="#">Написать мне</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>  
          </nav>
          <p class="copy-paste">&copy; 2015 pi_3dot14. Все права защищены</p>
        </div>
        <div class="block-right">
          <div class="logo">
            <img src="images/footer-logo.png" width="65" height="51" alt="logo-footer">
          </div>  
        </div>
      </div>
    </footer><!--End-footer-->
    
  </body>
</html>