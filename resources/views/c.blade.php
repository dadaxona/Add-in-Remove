<style>
#banner{
    margin-top: 39px;
    
    color: white;
    height: 500px;
}
.imggg{
     width: 100%;
     height: 340px;
     margin-top: 50px;
}
.cvc{
    margin-top: -189px;
    text-align: center;
    color: #ffffff;
}
.dvdvd{
    display: inline-flex;
    text-align: center;
}
.dedr{
   
    margin-top: 49px;
    padding: 22px;
    margin-left: 88px;

}
#svgvs{
    background-color: #ffdd3c;
    width: 100px;
    padding: 29px;
    height: 100px;
    border-radius: 100%;
    margin-top: -121px;
}


</style>
@extends('b')

@section('cons')

       <img class="imggg" src="{{URL('imges/imggg2.jpg')}}" alt="">
  
    </div>
    <div class="dvdvd">
        <div class="dedr">
            <svg xmlns="http://www.w3.org/2000/svg" id="svgvs" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
              </svg>
            <h4>Demo account</h4>
            
            <p class="p11">You can always improve your trading <br>
                 skills on the demo account. When <br>
                  you're ready, switch to your real <br>
                   account.</p>
        </div>
   
        <div class="dedr">
            <svg xmlns="http://www.w3.org/2000/svg" id="svgvs" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
              </svg>
            <h4>Online support</h4>
            <p class="p11">You can send a message anytime via <br>
                 chat and get feedback right away!</p>
        </div>
        <div class="dedr">
            <svg xmlns="http://www.w3.org/2000/svg" id="svgvs" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
              </svg>
            <h4>Free training</h4>
            <p class="p11"> By studying the extensive knowledge <br>
             base, you will be able to improve your <br>
              trading skills for better results. </p>
        </div>

    </div>
  
    @yield('con12')
@endsection