<style>
  #con12{
    margin-top: 260px;
    display: inline-flex;
}
  
  .con121{
    width: 130%;
    padding-left: 35px;
  }
  .h00h{
    margin-bottom: 32px;
  }
  .buten{
    background-color: black;
    border-radius: 7px;
    padding-left: 24px;
    margin-right: 30px;
    padding-right: 13px;
    padding-block: 0px;
  }
  .buten3{
    background-color: black;
    border-radius: 7px;
    padding-left: 24px;
    padding-block: 0px;
    padding-right: 13px;
 
  }
  .h33{
    margin-left: 23px;
    font-size: 17px;
    color: white;

  }
  .parag{
    font-size: 10px;
    margin-left: 17px;
    margin-bottom: 4px;
    color: white;
  }


  .con122{
      text-align: center;
  }

  .pngg{
    width: 90%;

  }
  .fgfe{
    background-color: #ffffff;
    border: none;
   }

  
</style>
@extends('c')

@section('con12')

<div id="con12">
    <div class="con121">
        <h1 class="h00h">Trade <br>
            from anywhere!</h1>
            <p>You can trade anytime and anywhere with the Binomo <br>
                 app for iOS and Android. Stay in the know: 
                instant
                <br> information on trade closings, promotions and <br>
                 tournaments.</p>
                 <button class="fgfe">
                <img src="{{URL('imges/plm3.png')}}" class="fgf" alt="">
            </button>
            <button class="fgfe">
                <img src="{{URL('imges/plm2.png')}}" class="fgf" alt="">
            </button>
            <button class="fgfe">
                <img src="{{URL('imges/plm4.png')}}" class="fgf" alt="">
            </button>
    </div>

    <div class="con122">
        <img  src="{{URL('imges/binomo.png')}}" class="pngg" alt="">
    </div>
</div>
@yield('footer')
@endsection