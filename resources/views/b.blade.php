<style>
    .conte{
        margin: auto;
        width: 70%;
        display: inline-flex;
        margin-left: 15%;
        margin-bottom: 83px;
    }
    .bbb1{       
        width: 30%;
        float: left;
        border-right: 4px solid #ffdd3c;
        margin-right: 36px;
      

    }
    .bbb{       
        width: 30%;
        float: left;
        border-right: 4px solid #ffdd3c;
        margin-right: 36px;
        text-align: center;

    }
    .hh11{
        font-size: 36px;
        margin-top: 17px;
    }
    .bb2{
     
        
        width: 28%;
       
        text-align: center;
      
    }
    .h22{
        text-align: center;
    }
    .www{
        margin-top: 20px;
        display: inline-flex;
        text-align: center;
    }
    .w10{
        margin-top: 50px;
        width: 18%;
        margin-left: 18px;
        padding: 7px;
    }
    .w10 h5{
        margin-bottom: 20px;
        margin-top: 37px;
    }
</style>


@extends('a')


@section('con')

<div class="conte">
    <div class="bbb1">
        <h1 class="hh11">
            915 600
        </h1>
        <p>
            Active traders daily
        </p>

    </div>
    <div class="bbb">
        <h1 class="hh11">
            133
        </h1>
        <p>
            Countries of presence
        </p>
    </div>
    <div class="bb2">
        <h1 class="hh11">
            34 696 904
        </h1>
        <p>Successful trades in the past
            <br> week</p>
    </div>
</div>

<div id="pop">
    <h2 class="h22">
        The benefits of the platform
    </h2>
    <div class="www">
        <div class="w10">
            <img src="{{URL('imges/min-dep.svg')}}" alt="">

            <h5>Minimum account <br>
                 balance <br>
                from $10</h5>
                <p>Start making trades with <br>
                     minimum investments.</p>

        </div>
        <div class="w10">
        <img src="{{URL('imges/min-risk.svg')}}" alt="">
            <h5>Trade amount <br>
                starting from $1</h5>
                <p>The minimum cost of a trade is quite low. You won't lose a large amount of funds while you're still learning how to trade.</p>
                
        </div>
        <div class="w10">
        <img src="{{URL('imges/non-stop.svg')}}" alt="">
            <h5>A unique mode <br>
                of trading: ‘Non-stop’</h5>
                <p>There are no restrictions on the platform regarding the number of trades that can be concluded simultaneously. You can open several positions at the same time and continue trading.</p>
                
        </div>
        <div class="w10">
        <img src="{{URL('imges/several-deals.svg')}}" alt="">
            <h5>Work also <br>
                on the weekends</h5>
                <p>Some quotes sources are available only on working days. We combined various options for your convenience: trade even on weekends choosing the most suitable assets.</p>
                
        </div>
        <div class="w10">
        <img src="{{URL('imges/min-risk.svg')}}" alt="">
            <h5>Try the variety of <br>
                online trading <br>
                 options</h5>
                 <p>Discover CFDs (contracts for differences) - the possibility to trade using a wide range of instruments and get relevant experience of the global markets. We provide our users with ultra-competitive pricing options while trading the CFD market on the go.</p>
                
        </div>
    </div>

</div>
@yield('cons')

@endsection