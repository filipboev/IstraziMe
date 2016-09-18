@extends('layouts.app')

@section('content')
    <div class=" landing container-fluid">

        <h1 class="title-landing"> Истражете ги убавините на Македонија </h1>
        <img src="{{URL::asset('/src/img/mak2.jpg')}}" height="600px" width="100%" class="slika-landing">
    </div>
    <div class="container-fluid informations">
        <h3 style="color:whitesmoke;">Добредојдовте! </h3>
        <p style="color:whitesmoke;text-align:justify-all">Сакате да откриете повеќе за вашата земја? Наша цел е да ви
            овозможиме детално запознавање со историјата на Македонија и нејзините археолошки локалитети. Дознајте
            повеќе информации и посетете некое ново место денес!
            <br>
            <br>
            <button class="btn btn-primary btn-lg buton text-center"> Истражувај</button>
    </div>
    <br>
    <div class="container-fluid">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-center">АДРЕСА</h2>

                </div>
            </div>


            <p><b>ИстражиМЕ тим</b></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.8209442256452!2d21.407359215445023!3d42.00411817921236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13541443605a5d27%3A0x7ebef1bd69f11660!2sRugjer+Boshkovikj+16%2C+Skopje+1000%2C+Macedonia+(FYROM)!5e0!3m2!1sen!2s!4v1473427879242"
                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-8">
            <h2 class="text-center" style="margin-left:170px;">КОНТАКТ</h2>
            <hr class="hr-class6">
            <div class="row">
                <form class="form-inline forma">
                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="email" class="form-control formctr" id="exampleInputEmail3" placeholder="Име">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email адреса">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Телефон">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control txtarea" rows="8" style="width:635px;"
                              placeholder="Порака"></textarea>
                </div>
            </div>
            <a class="btn btn-primary buton2 btn-lg" href="mailto:contact@istrazime.com"
               style="text-decoration:none;margin-left:180px;" target="_top"> Испрати </a>
        </div>
    </div>
    <br>

    <h2 class="text-center">ПРЕПОРАКИ</h2>
    <hr class="hr-class4">
    <br>
    <div classs="container">
        <div class="col-md-4">
            <img src="{{URL::asset('/src/img/navodnici2.png')}}" height="40px" width="40px">
            <p class="p-imp"> So mesmerizing and unique, never have I thought I'd be so amazed by this wonderfull
                place. </p>
            <p class="p-imp2"><i> Szymon Tuta </i> за <b> Стоби </b></p>
        </div>
        <div class="col-md-4">
            <img src="{{URL::asset('/src/img/navodnici2.png')}}" height="40px" width="40px">
            <p class="p-imp"> Surreal beauty and nature. Make sure to visit Kokino and bring your camera, you won't
                regret it trust me! </p>
            <p class="p-imp2"><i> Anna Maric </i> за <b> Кокино </b></p>
        </div>
        <div class="col-md-4">
            <img src="{{URL::asset('/src/img/navodnici2.png')}}" height="40px" width="40px">
            <p class="p-imp"> Macedonia has a such interesting history. It felt like a trip back to those ancient
                times..</p>
            <p class="p-imp2"><i> Stjepan P. </i> за <b> Хераклеја </b></p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="push2"></div>
@endsection
