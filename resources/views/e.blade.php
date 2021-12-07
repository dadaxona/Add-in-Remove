<style>
    #footers{
        background-color: #2a2b30;
        margin-top: 160px
    }
    .foo1{
        display: inline-flex;
        margin-top: 70px;
        margin-left: 4%;
        
    }
   .foo2{
    margin-left: 30%;
   }
   .foo2 ,div ,ul ,li{
    list-style-type: none;
   }
   .aza{
       color: #8a8c8f;
   }
   .h6h6{
       color: #8a8c8f;
       margin-bottom: 32px;
   }
   .azaz{
       text-decoration: none;
       color: #8a8c8f;
   }
   .azaz:hover{
       color: white;
   }
   .fo4{
    display: inline-flex;
   }
   .fo5{
       width: 50%;
   
   }
  
   .klkl1{
       display: flex;
   }
   .klkl{
    width: 15%;
    height: 40px;
    
   }
   .pp10{
    color: #ffffff;
    padding: 20px;
   }
   .pp11{
       color: #8a8c8f;
       padding: 3px;
   }
   .decar{
       text-align: center;
       margin-top: 70px;
   }
   .aaaaa{
    color: white;
    text-decoration: none;
    padding: 7px;
   }
   .aaaa{
    padding: 6px;
    background-color: #3f4044;
    border-radius: 86px;
   }
   #idid{
    margin-top: 60px;
   }
   .idi1{
       color: #8a8c8f;
       text-align: center;
   }
   .idi2{
       color: #8a8c8f;
       text-align: center;
   }


   .idi3{
    margin-bottom: 0;
    padding: 22px;
    color: #8a8c8f;
    font-size: 14px;
    padding-bottom: 81px;
   }
   /* .play1{
    width: 4%;
    height: 43px;
    position: absolute;
    left: 0px;
    padding: 5px;
   }
   .play{
    width: 3%;
    height: 40px;
    position: absolute;
    left: 16%;
   }
   .play3{
    width: 4%;
    height: 43px;
    position: absolute;
    left: 31%;
    padding: 5px;
   } */
   .fgf{
    background-color: #2a2b30;
    border: none;
   }
   
</style>

@extends('d')

@section('footer')

<div id="footers">
    <div class="foo1">
        <div class="foo2">
            <a href="#" class="azaz">VIP</a>
        </div>
        <div class="foo2">
           <h6 class="h6h6">FOR TRADERS</h6>
            <ul>
                <li><a href="" class="azaz">Tournaments</a></li>
                <li><a href="" class="azaz">Promotions</a></li>
                <li><a href="" class="azaz">Strategies</a></li>
               
            </ul>
     
        </div>
        <div class="foo2">
            <h6 class="h6h6">TRAINING</h6>
            <ul>
                <li><a href="" class="azaz">Help Center</a></li>
                <li><a href="" class="azaz">Glossary of terms</a></li>
              
            </ul>
        </div>
        <div class="foo2">
            <h6 class="h6h6">INFORMATION</h6>
            <ul>
                <li><a href="" class="azaz">Statuses</a></li>
                <li><a href="" class="azaz">About us</a></li>
                <li><a href="" class="azaz">Regulations</a></li>
                <li><a href="" class="azaz">Client Agreement</a></li>
                <li><a href="" class="azaz">Affiliate program</a></li>
                <li><a href="" class="azaz">AML Policy</a></li>
            </ul>
        </div>
    

    </div>   
    <div class="fo4">
        <div class="fo5">
            <p class="pp10">Binomo is a category "A" member of the International Financial Commission, which guarantees the 
                company's customers quality of service, transparency of relations, 
                and protection from a neutral and independent dispute resolution organization.
            </p>
            <p class="pp10">Phone: +18499366003</p>
            <div class="klkl1">
                <img src="{{URL('imges/logo-mc.svg')}}" class="klkl" alt="">
                <img src="{{URL('imges/logo-visa.svg')}}" class="klkl" alt="">
                <img src="{{URL('imges/jcb.svg')}}" class="klkl" alt="">
                <img src="{{URL('imges/amexpress.svg')}}" class="klkl" alt="">
                <img src="{{URL('imges/unionpay.svg')}}" class="klkl" alt="">
            </div>
            <br>
       
            <button class="fgf">
                <img src="{{URL('imges/plm3.png')}}" class="fgf" alt="">
            </button>
            <button class="fgf">
                <img src="{{URL('imges/plm2.png')}}" class="fgf" alt="">
            </button>
            <button class="fgf">
                <img src="{{URL('imges/plm.png')}}" class="fgf" alt="">
            </button>

        </div>
        <div class="fo6"> 
            <h6 class="pp11">Contacts</h6>
            <p class="pp11">support@binomo.com <br>
                Dolphin Corp LLC <br>
                First Floor, First St. Vincent Bank Ltd Building, James Street, Kingstown, St.Vincent <br>
                 and the Grenadines
            </p> 
            <p class="pp11">Pollack Trade LTD (a company registered in accordance with the 
                <br> legislation of the Republic of Bulgaria, registration number 205942015, whose office is located at <br>
                 Georgi Sava Rakovski St. 96, Sredets Region, Sofia Municipality, Sofia 1000) <br>
                  is a payment 
                agent of Dolphin Corp LLC and is part of the Binomo group of companies.</p>
        
        </div>
    </div>
    <div class="decar">
        <a href="" class="aaaaa">
            <svg xmlns="http://www.w3.org/2000/svg" class="aaaa" width="40" height="40" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg>
        </a>
        <a href="" class="aaaaa">
            <svg xmlns="http://www.w3.org/2000/svg" class="aaaa" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
        </a>
        <a href="" class="aaaaa">
            <svg xmlns="http://www.w3.org/2000/svg" class="aaaa" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
        </a>
        <a href="" class="aaaaa">
            <svg xmlns="http://www.w3.org/2000/svg" class="aaaa" width="40" height="40" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
              </svg>
        </a>
        <a href="" class="aaaaa">
            <svg xmlns="http://www.w3.org/2000/svg" class="aaaa" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
        </a>
      
    </div>
    <div id="idid">
        <a href="" class="idi1"> <h6>Privacy Policy</h6></a>
        <p class="idi2">© 2014-2021</p>
        <br>
        <p class="idi3">
            The financial operations offered on this site may involve increased risk. By using the financial
             services and tools this site offers, you may suffer serious financial loss, or completely lose the funds in
              your guaranteed trading account. Please evaluate all the financial risks and seek advice from an independent
               financial advisor before trading. Binomo is not responsible for any direct,
             indirect or consequential losses, or any other damages resulting from the user's actions on this site.
        </p>
    </div>

</div>

@endsection