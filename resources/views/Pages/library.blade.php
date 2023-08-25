@extends('Templates.index')

@section('contents')
    <!-- ***** Gaming Library Start ***** -->
    <div class="gaming-library">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Sua biblioteca de</em> Games</h4>
            </div>
            <div class="item">
                <ul>
                    <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                    <li><h4>CS GO</h4><span>FPS</span></li>
                    <li><h4>Data adicionada</h4><span>24/08/2019</span></li>
                    <li><h4>Horas jogadas</h4><span>540 H 58 Mins</span></li>
                    <li><h4>Atualmente</h4><span>Baixado</span></li>
                    <li><div class="main-border-button border-no-active"><a href="#">Baixado</a></div></li>
                </ul>
            </div>
            <div class="item">
                <ul>
                    <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                    <li><h4>Fortnite</h4><span>Sandbox</span></li>
                    <li><h4>Data adicionada</h4><span>24/08/2019</span></li>
                    <li><h4>Horas jogadas</h4><span>2030 H 27 Mins</span></li>
                    <li><h4>Atualmente</h4><span>Baixado</span></li>
                    <li><div class="main-border-button"><a href="#">Donwload</a></div></li>
                </ul>
            </div>
            <div class="item last-item">
                <ul>
                    <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                    <li><h4>Dota 2</h4><span>Sandbox</span></li>
                    <li><h4>Data adicionada</h4><span>24/08/2010</span></li>
                    <li><h4>Horas jogadas</h4><span>1039 H 10 Mins</span></li>
                    <li><h4>Atualmente</h4><span>Baixado</span></li>
                    <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="main-button">
                <a href="/library">Visualizar sua biblioteca</a>
            </div>
        </div>
    </div>
    <!-- ***** Gaming Library End ***** -->
@endsection
