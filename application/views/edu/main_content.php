<div style="background-color: #000;">
    <section class="hero is-fullheight" style="background: url('/static/img/edu5.jpeg') no-repeat center center; background-size: cover; background-attachment: fixed;">
        <div class="hero-body jumbotron">
            <div class="container has-text-centered">
                <img src="/static/img/edu_logo.png" width="100px;">
                <h1 class="title is-text-white">
                    카투스에듀,
                </h1>
                <h2 class="subtitle is-text-white">
                    모두를 위한 교육 환경
                </h2>
            </div>
        </div>
    </section>
</div>

<section class="hero is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">카투스 에듀</h1>
            <h2 class="subtitle">모두의, 모두에 의한, 모두를 위한 교육</h2>
            <div class="content">
                <div class="columns">
                    <div class="column">
                        <div class="card page" id="page1">
                            <header class="card-header">
                                <p class="card-header-title">
                                    곡예비행에 오신 것을 환영합니다!
                                </p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <p>파이썬은 강력하고 유연한 프로그래밍 언어로 웹/인터넷 개발, 데스크톱 그래픽 사용자 인터페이스(GUIs) 작성, 그리고 게임 개발 등 여러 곳에 사용되고 있습니다. 파이썬은 다음과 같은 특징을 가지고 있습니다.</p>
                                    <p>• <b>고급 언어(High-level language)</b> 이는 파이썬이 일상 생활에서 사용하는 영어와 비슷하여 읽고 쓰기 매우 편하다는 의미입니다.</p>
                                    <p>• <b>인터프리터 언어(Interpreted language)</b> 이는 파이썬을 작성하고 실행하는데 컴파일러(compiler)가 필요하지 않다는 뜻입니다! 여러분은 여기, 코드카데미에서 코드를 작성하거나, 심지어 여러분의 컴퓨터 상에서도 작성할 수 있습니다. (많은 것들이 파이썬 내장 인터프리터에 포함되어 있습니다. 이번 수업의 뒷부분에서 이에 대해 알아보도록 하겠습니다.)</p>
                                    <p>• <b>객체 지향(Object-oriented)</b> 이는 프로그램을 실행하고 작성하기 위해 사용자들이 객체(objects)라고 불리는 것을 이용하여 자료 구조를 조작할 수 있다는 의미입니다. 객체에 대해서는 이후 더 자세히 다루도록 하겠습니다.</p>
                                    <p>• <b>유쾌함</b> 파이썬은 몬티 파이튼(Monty Python)의 곡예비행(주: 영국 텔레비전 희극 쇼) 이후 명명되었으며, 예제 코드와 튜토리얼들은 학습 흥미를 돋우기 위해 종종 이 쇼를 인용하여 농담들을 포함하곤 합니다.</p>
                                    <p>이 과정은 파이썬, 또는 프로그래밍/컴퓨터 과학과 관련된 사전 지식을 필요로 하지 않습니다.</p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a class="card-footer-item is-disabled">이전</a>
                                <a class="card-footer-item">책갈피</a>
                                <a class="card-footer-item next">다음</a>
                            </footer>
                        </div>
                        <div class="card page" id="page2" style="display: none;">
                            <header class="card-header">
                                <p class="card-header-title">
                                    변수(Variables)
                                </p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <p>컴퓨터 프로그래밍의 가장 기본적인 개념 중 하나는 바로 <b>변수(variable)</b> 입니다.</p>
                                    <p>변수는 하나의 <b>값(value)</b>을 담고있는 <b>식별자(identifer)</b> 입니다.</p>
                                    <p>예를 들어 여러분의 프로그램에 지금 당장 사용하진 않지만, 이후에 사용할 수 있도록 숫자 5가 필요하다고 가정해 봅시다.</p>
                                    <p>여러분은 spam이라고 써서 변수를 지정하고, 여기에 숫자 5를 담아 나중에 사용할 수 있도록 값을 유지할 수 있습니다. 다음과 같이 말이죠:</p>
                                    <p><code>spam = 5</code></p>
                                    <p>파이썬에서 변수의 선언은 쉽습니다; spam 처럼 그냥 이름을 사용해서 식별자를 나타내고, = 연산자를 사용해서 원하는 값을 지정하면 끝입니다!</p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a class="card-footer-item previous">이전</a>
                                <a class="card-footer-item">책갈피</a>
                                <a class="card-footer-item next">다음</a>
                            </footer>
                        </div>
                        <div class="card page" id="page3" style="display: none;">
                            <header class="card-header">
                                <p class="card-header-title">
                                    자료형(Data Types)
                                </p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <p>훌륭합니다! 이제 우리는 필요할 때 언제든 spam라는 이름을 호출함으로써 변수에 저장된 값 5를 불러올 수 있습니다.</p>
                                    <p>이 경우, spam의 <b>자료형(data type)</b>은 <b>정수형(integer)</b> (음수와 양수의 모든 수) 입니다. 현재 우리가 관심있게 볼 파이썬의 자료형은 세 가지로, 다음과 같습니다: 정수형. Integers (int로 표시), 실수형, floats (1.970과 같이 소수점으로 표현하는 분수), 그리고 불린. booleans (참과 거짓의 두 가지 값으로 표현)</p>
                                    <p>대개 컴퓨터 프로그램은 데이터를 조작하기 위해 만들어집니다. 그러므로 프로그램에 포함할 수 있는 여러 다른 형태의 데이터(또는 "자료형")을 이해하는 것은 매우 중요합니다.</p>
                                    <p>절대 <b>불린(booleans) 자료형과 따옴표(' 또는 ")를 함께 사용하지 마세요</b>, 그리고 언제나 첫 번째 글자는 대문자로 작성해야 합니다! <b>파이썬은 대소문자를 구별(case-sensitive)합니다.</b> <b>따옴표는 문자열(strings)과 함께 사용</b>하며, 다음 단원에서 이에 관해 다루도록 하겠습니다.</p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a class="card-footer-item previous">이전</a>
                                <a class="card-footer-item">책갈피</a>
                                <a class="card-footer-item is-disabled" id="next">다음</a>
                            </footer>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title">카드 기반의 디자인</h3>
                        <h5 class="subtitle">내가 배워야 할 정보를 한눈에</h5>
                        <div class="content">
                            <p>동영상이나 음성 없이 <b>카드 기반의 깔끔한 디자인</b>으로 내가 알아야 할 정보를 한눈에!<br>
                                동영상 강의를 볼 시간이 없는 우리 디미고인들을 배려한 서비스</p>
                        </div>

                        <h3 class="title">깔끔한 모바일 지원</h3>
                        <h5 class="subtitle">언제 어디서나 공부할 수 있다!</h5>
                        <div class="content">
                            <p>인터넷에 연결 되어 있다면 모바일을 이용해서도 <b>간편하게</b> 공부할 수 있습니다.</p>
                        </div>

                        <h3 class="title">카드 기반의 디자인</h3>
                        <h5 class="subtitle">내가 배워야 할 정보를 한눈에</h5>
                        <div class="content">
                            <p>동영상이나 음성 없이 <b>카드 기반의 깔끔한 디자인</b>으로 내가 알아야 할 정보를 한눈에!<br>
                                동영상 강의를 볼 시간이 없는 우리 디미고인들을 배려한 서비스</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/static/js/edu.js"></script>