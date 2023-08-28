@extends('layouts.layout')
@section('content')
<div class="overlay__popup" style="display:none;"></div>
<div class="main__container">
    <div class="side__box history" style="display:none;">
        <div class="head__history">
            <p>History</p>
            <span>Access all your verified emails.</span>
            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
        </div>
        <div class="history__main">
            <div class="upgrade">
                <span><img src="img/lockgrey.svg" alt="lockgrey"></span>
                <h6>Upgrade to premium <br> to unlock.</h6>
                <a href="#" class="regular-btn">Upgrade</a>
            </div>
        </div>
    </div>
    <div class="box__verification">
        <form action="" class="single__verification">
            <div class="head__verification">
                <div class="back__button">
                    <a href="#"><span><img src="img/backbutton.svg" alt="backbutton"></span> Single Verification</a>
                </div>
                <div class="controls__button">
                    <a href="#" class="outline-btn">Verify list</a>
                    <a href="#" class="outline-btn history__single"><span><img src="img/history.svg"
                                alt="history"></span>History</a>
                </div>
            </div>
            <div class="search__field">
                <div class="group__input">
                    <input type="text" placeholder="Search for an email..." class="email__field">
                    <button type="submit"><span><img src="img/searchwhite.svg" alt="searchwhite"></span> Search</button>
                </div>
                <div class="error__message" style="display:none;">
                    <p class="error__label"><span><img src="img/error.svg" alt="error"></span> Please enter a valid
                        email.</p>
                </div>
            </div>
            <div class="searching" style="display:none;">
                <p>Searching for ....</p>
            </div>
            <div class="email__result" data-email="test@gmail.com" style="display:none;">
                <div class="head__result">
                    <div class="result__left">
                        <span><img src="img/success.svg" alt="success"></span>
                        <div class="result__title">
                            <p>Email verified</p>
                            <span>Your email is on good mood.</span>
                        </div>
                    </div>
                    <div class="result__right">
                        <div class="circle" data-size="44" data-thickness="3" data-color="#629B81" data-empty="#E4E4E7"
                            data-value="0.92">
                            <span>92</span>
                        </div>
                    </div>
                </div>
                <div class="table__result">
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Email: 2000madani</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Domain: gmail.com</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Syntax error: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Role: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Spam-trap: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/error.svg" alt="success"></span> Disposable: yes</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Accept-all: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Free Email: no</p>
                    </div>
                </div>
            </div>

            <div class="email__result" data-email="test1@gmail.com" style="display:none;">
                <div class="head__result">
                    <div class="result__left">
                        <span><img src="img/error.svg" alt="success"></span>
                        <div class="result__title">
                            <p>Email invalid</p>
                            <span>2000madani@gmail.com</span>
                        </div>
                    </div>
                    <div class="result__right">
                        <div class="circle" data-size="44" data-thickness="3" data-color="#F04438" data-empty="#E4E4E7"
                            data-value="0.23">
                            <span>23</span>
                        </div>
                    </div>
                </div>
                <div class="table__result">
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Email: another data here</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Domain: gmail.com</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Syntax error: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Role: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Spam-trap: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/error.svg" alt="success"></span> Disposable: yes</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Accept-all: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Free Email: no</p>
                    </div>
                </div>
            </div>

            <div class="email__result" data-email="test2@gmail.com" style="display:none;">
                <div class="head__result">
                    <div class="result__left">
                        <span><img src="img/error.svg" alt="success"></span>
                        <div class="result__title">
                            <p>Email risky</p>
                            <span>Your email is on good mood.</span>
                        </div>
                    </div>
                    <div class="result__right">
                        <div class="circle" data-size="44" data-thickness="3" data-color="#F79009" data-empty="#E4E4E7"
                            data-value="0.58">
                            <span>58</span>
                        </div>
                    </div>
                </div>
                <div class="table__result">
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Email: another data here</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Domain: gmail.com</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Syntax error: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Role: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Spam-trap: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/error.svg" alt="success"></span> Disposable: yes</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Accept-all: no</p>
                    </div>
                    <div class="elem__result">
                        <p><span><img src="img/success.svg" alt="success"></span> Free Email: no</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection