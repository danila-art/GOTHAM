 <head>
     <link rel="stylesheet" href="../assets/css/header_style.css">
 </head>
 <div class="module" id="module">
     <!----------------Модуль регистрации ---------- -->
     <div class="module__registration" id="moduleRegistration">
         <div class="module__close" id="closeButtonRegistration">
             <img src="../assets/img/icons/icons8-close-128.png" alt="error__close-button">
         </div>
         <div class="module__heading">
             <h3>Регистрация</h3>
         </div>
         <!-- form -->
         <form action="" method="post" class="form__registration">
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Введите фамилию</h4>
                     <input type="text" name="surname" class="input__registr" placeholder="Фамилия">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Введите имя</h4>
                     <input type="text" name="name" class="input__registr" placeholder="Имя">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Введите отчество</h4>
                     <input type="text" name="patronomyk" class="input__registr" placeholder="Отчество">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Введите свой возраст</h4>
                     <input type="text" name="age" class="input__registr" placeholder="Возраст">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Придумайте логин</h4>
                     <input type="text" name="login" class="input__registr" placeholder="Логин">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Придумайте пароль</h4>
                     <input type="password" name="password" class="input__registr" placeholder="Пароль">
                 </label>
             </div>
             <div class="form__submit">
                 <input type="submit" value="Зарегистрироваться">
             </div>
             <div class="button__module">
                 <h3>Вы уже зарегестрированы, <span id="buttonToAutorization">Аторизируйтесь</span></h3>
             </div>
         </form>
     </div>

     <!----------------Модуль авторизации ---------- -->
     <div class="module__autorization" id="moduleAutorization">
         <div class="module__close" id="closeButtonAutorization">
             <img src=" ../assets/img/icons/icons8-close-128.png" alt="error__close-button">
         </div>
         <div class="module__heading">
             <h3>Авторизация</h3>
         </div>
         <!-- form -->
         <form action="" method="post" class="form__autorization">
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Логин</h4>
                     <input type="text" name="login" class="input__registr" placeholder="Логин">
                 </label>
             </div>
             <!-- form__box -->
             <div class="form__box">
                 <label for="">
                     <h4>Пароль</h4>
                     <input type="password" name="password" class="input__registr" placeholder="Пароль">
                 </label>
             </div>
             <div class="form__submit">
                 <input type="submit" value="Войти">
             </div>

             <div class="button__module">
                 <h3>Вы ещё не зарегестрированы, <span id="buttonToRegistration">Зарегистрируйтесь</span></h3>
             </div>
         </form>
     </div>
 </div>
 <header class="header">
     <div class="header__flex">
         <div class="header__flex-logo">
             <a href="./"><img src="../assets/img/logo/logo-gotham-white.png" alt="error_logo"></a>
         </div>
         <div class="nav">
             <div class="nav__a"><a href="">
                     <h3>Товары</h3>
                 </a></div>
             <div class="nav__a"><a href="">
                     <h3>О нас</h3>
                 </a></div>
             <div class="nav__a"><a href="">
                     <h3>Корзина</h3>
                 </a></div>
             <div class="user" id="user">
                 <img src="../assets/img/icons/user-profile.png" alt="error_user">
             </div>
         </div>
     </div>
 </header>