@extends('layouts.layout')
@section('content')

<div class="overlay__popup" style="display:none;"></div>
<div class="float__tooltip--box" style="display:none;">
    <p></p>
</div>
<div class="main__container">
    <div class="side__box history" style="display:none;">
        <div class="head__history border">
            <p>History</p>
            <div class="placeholder__text nonvisible">
                <div></div>
                <span>379 emails found from 4 Domains</span>
            </div>
            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
        </div>
        <div class="list__campaigns campaigns__v--placeholder" style="overflow-y:hidden;">
            <div class="placeholder__wrapper">
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">
                        <span><img src="img/world.svg" alt="wrodl"></span>
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__right">
                        <img src="img/arrownext.svg" alt="arrowright">
                    </div>
                </div>
            </div>
            <a href="#" class="elem__campaign--list">
                <span><img src="img/camp1.svg" alt="camp"></span>
                <div class="campaign__desc">
                    <div class="top__part">
                        <p>Facebook.com</p>
                    </div>
                    <span>150 emails found</span>
                </div>
                <img src="img/arrownext.svg" alt="arrow">
            </a>

            <a href="#" class="elem__campaign--list">
                <span><img src="img/camp2.svg" alt="camp"></span>
                <div class="campaign__desc">
                    <div class="top__part">
                        <p>Spotify.com</p>
                    </div>
                    <span>150 emails found</span>
                </div>
                <img src="img/arrownext.svg" alt="arrow">
            </a>

            <a href="#" class="elem__campaign--list">
                <span><img src="img/camp3.svg" alt="camp"></span>
                <div class="campaign__desc">
                    <div class="top__part">
                        <p>Apple.com</p>
                    </div>
                    <span>79 emails found</span>
                </div>
                <img src="img/arrownext.svg" alt="arrow">
            </a>
            <div class="elem__campaign--list">
                <span><img src="img/doesnexist.svg" alt="camp"></span>
                <div class="campaign__desc">
                    <div class="top__part">
                        <p>Appsumo.io</p>
                        <div class="tooltip">
                            <span><img src="img/warning.svg" alt="tooltip"></span>
                            <div class="tooltip__box">
                                <p>This domain name doesn’t exist.</p>
                            </div>
                        </div>
                    </div>
                    <span>No emails found</span>
                </div>
            </div>
        </div>
    </div>
    <div class="box__verification">
        <form action="" class="domain__verification">
            <div class="head__verification">
                <p>Domain Search</p>
                <div class="controls__button">
                    <a href="#" class="outline-btn history__domain"><span><img src="img/history.svg" alt="history"></span>History</a>
                </div>
            </div>
            <div class="search__field">
                <div class="group__input">
                    <input type="text" placeholder="Search for a domain..." class="domain__field" value="facebook.com">
                    <button type="submit"><span><img src="img/searchwhite.svg" alt="searchwhite"></span> Search</button>
                </div>
                <div class="error__message" style="display:none;">
                    <p class="error__label"><span><img src="img/error.svg" alt="error"></span> Please enter a valid
                        domain.</p>
                </div>
            </div>
            <div class="searching" style="display:none;">
                <p>Searching for something</p>
            </div>
            <div class="domain__result" style="display:none;" data-domain="paypal.com">
                <div class="head__">
                    <div class="domain__result--head">
                        <span><img src="img/paypal.svg" alt="paypal"></span>
                        <div class="result__desc--">
                            <p>Paypal.com</p>
                            <span>1,234 emails</span>
                        </div>
                    </div>

                </div>
                <div class="company__elem">
                    <div class="finder__list finder__list__result">
                    </div>
                </div>
                <div class="pagination">
                    <p>Page 1 of 1</p>
                    <div class="controls__wrapper">
                        <a href="#" class="outline-btn disabled prev-btn">Previous</a>
                        <a href="#" class="outline-btn disabled next-btn">Next</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection