@extends('layouts.layout')
@section('content')
<div class="overlay"></div>
<div class="overlay__popup"></div>
<div class="float__tooltip--box" style="display:none;">
    <p></p>
</div>
<div class="main__container">
    <div class="tasks__box">
        <div class="head__task">
            <p>Bulk tasks</p>
            <span>Choose what task to do in bulk.</span>
        </div>
        <div class="container__task">
            <div class="bulk">
                <ul>
                    <li>
                        <a href="domainsearch.html">
                            <div class="media__image">
                                <img src="img/deliv1.svg" alt="deliv1">
                            </div>
                            <div class="desc">
                                <p>Domain Search <span>New</span></p>
                                <span>Find email addresses from a list of websites or companies.</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="bulkfinder2.html">
                            <div class="media__image">
                                <img src="img/deliv3.svg" alt="deliv1">
                            </div>
                            <span class="desc">
                                <p>Email Finder</p>
                                <span>Find email addresses from a list of names and companies.</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="bulkverif2.html">
                            <div class="media__image shadow">
                                <img src="img/deliv4.svg" alt="deliv1">
                            </div>
                            <span class="desc">
                                <p>Email Verifier</p>
                                <span>Verify a list of email addresses.</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal__wrapper" style="display:none;">
    <div class="inner__modal">
        <div class="modal__box modal__export export__updated">
            <div class="export__step--one">
                <form action="">
                    <div class="head__step--one">
                        <div class="left__step--one">
                            <h6>Export “Tech_developers.csv”</h6>
                            <p>Select your export settings.</p>
                        </div>
                        <div class="right__step--one">
                            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
                        </div>
                    </div>
                    <div class="export__settings">
                        <div class="elem__export current">
                            <div class="settings__info">
                                <span><img src="img/set1.svg" alt="set"></span>
                                <div class="set__desc">
                                    <p>Verified only</p>
                                    <span>Most suited for leads campaigns.</span>
                                </div>
                            </div>
                            <div class="settings__checkbox">
                                <label class="checkbox__container radio">
                                    <input type="radio" name="radio2" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="elem__export">
                            <div class="settings__info">
                                <span><img src="img/set2.svg" alt="set"></span>
                                <div class="set__desc">
                                    <p>Risky only</p>
                                    <span>Recommended for reach campaigns.</span>
                                </div>
                            </div>
                            <div class="settings__checkbox">
                                <label class="checkbox__container radio">
                                    <input type="radio" name="radio2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="elem__export">
                            <div class="settings__info">
                                <span><img src="img/set3.svg" alt="set"></span>
                                <div class="set__desc">
                                    <p>Full list</p>
                                    <span>Export your verified and risky emails.</span>
                                </div>
                            </div>
                            <div class="settings__checkbox">
                                <label class="checkbox__container radio">
                                    <input type="radio" name="radio2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="content__step">
                        <a href="#" class="regular-btn bigger">Confirm export settings -></a>
                    </div>
                </form>
            </div>
            <div class="export__step--two" style="display:none;">
                <div class="exp__back">
                    <a href="#"><img src="img/backbutton.svg" alt="backbutton"> Return</a>
                </div>
                <div class="export__media">
                    <img src="img/exp.svg" alt="export">
                </div>
                <form action="">
                    <p>Export “Tech_developers.csv”</p>
                    <span>Choose your export settings.</span>
                    <div class="export__picker">
                        <div class="elem__export active">
                            <div class="export__desc">
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 3.6C8 3.03995 8 2.75992 7.89101 2.54601C7.79513 2.35785 7.64215 2.20487 7.45399 2.10899C7.24008 2 6.96005 2 6.4 2H6.16146C5.63433 1.99998 5.17954 1.99997 4.80497 2.03057C4.40963 2.06287 4.01641 2.13419 3.63803 2.32698C3.07354 2.6146 2.6146 3.07354 2.32698 3.63803C2.13419 4.01641 2.06287 4.40963 2.03057 4.80497C1.99997 5.17954 1.99998 5.63429 2 6.16142V6.4C2 6.96005 2 7.24008 2.10899 7.45399C2.20487 7.64215 2.35785 7.79513 2.54601 7.89101C2.75992 8 3.03995 8 3.6 8H6.4C6.96005 8 7.24008 8 7.45399 7.89101C7.64215 7.79513 7.79513 7.64215 7.89101 7.45399C8 7.24008 8 6.96005 8 6.4V3.6Z" fill="#B6B6B6" />
                                        <path d="M3.6 10C3.03995 10 2.75992 10 2.54601 10.109C2.35785 10.2049 2.20487 10.3578 2.10899 10.546C2 10.7599 2 11.0399 2 11.6V17.8385C1.99998 18.3657 1.99997 18.8205 2.03057 19.195C2.06287 19.5904 2.13419 19.9836 2.32698 20.362C2.6146 20.9265 3.07354 21.3854 3.63803 21.673C4.01641 21.8658 4.40963 21.9371 4.80497 21.9694C5.17954 22 5.6343 22 6.16144 22H6.4C6.96005 22 7.24008 22 7.45399 21.891C7.64215 21.7951 7.79514 21.6422 7.89101 21.454C8 21.2401 8 20.9601 8 20.4L8 11.6C8 11.0399 8 10.7599 7.89101 10.546C7.79513 10.3578 7.64215 10.2049 7.45399 10.109C7.24008 10 6.96005 10 6.4 10H3.6Z" fill="#B6B6B6" />
                                        <path d="M10 20.4C10 20.9601 10 21.2401 10.109 21.454C10.2049 21.6422 10.3578 21.7951 10.546 21.891C10.7599 22 11.0399 22 11.6 22H17.8386C18.3657 22 18.8205 22 19.195 21.9694C19.5904 21.9371 19.9836 21.8658 20.362 21.673C20.9265 21.3854 21.3854 20.9265 21.673 20.362C21.8658 19.9836 21.9371 19.5904 21.9694 19.195C22 18.8205 22 18.3657 22 17.8386V11.6C22 11.0399 22 10.7599 21.891 10.546C21.7951 10.3578 21.6422 10.2049 21.454 10.109C21.2401 10 20.9601 10 20.4 10H11.6C11.0399 10 10.7599 10 10.546 10.109C10.3578 10.2049 10.2049 10.3578 10.109 10.546C10 10.7599 10 11.0399 10 11.6L10 20.4Z" fill="#B6B6B6" />
                                        <path d="M22 6.4C22 6.96005 22 7.24008 21.891 7.45399C21.7951 7.64215 21.6422 7.79513 21.454 7.89101C21.2401 8 20.9601 8 20.4 8H11.6C11.0399 8 10.7599 8 10.546 7.89101C10.3578 7.79513 10.2049 7.64215 10.109 7.45399C10 7.24008 10 6.96005 10 6.4V3.6C10 3.03995 10 2.75992 10.109 2.54601C10.2049 2.35785 10.3578 2.20487 10.546 2.10899C10.7599 2 11.0399 2 11.6 2H17.8385C18.3657 1.99998 18.8205 1.99997 19.195 2.03057C19.5904 2.06287 19.9836 2.13419 20.362 2.32698C20.9265 2.6146 21.3854 3.07354 21.673 3.63803C21.8658 4.01641 21.9371 4.40963 21.9694 4.80497C22 5.17954 22 5.6343 22 6.16144V6.4Z" fill="#B6B6B6" />
                                    </svg>
                                </span>
                                <div class="export__text">
                                    <p>Export as CSV</p>
                                    <span>Recommended format.</span>
                                </div>
                            </div>
                            <div class="export__checkbox">
                                <label class="checkbox__container radio">
                                    <input type="radio" name="radio1" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="elem__export">
                            <div class="export__desc">
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_75_17029)">
                                            <rect width="24" height="24" rx="4" fill="#B6B6B6" />
                                            <path d="M17.3346 18.6672L13.5775 11.8672L17.1697 5.33389H14.2373L12.0196 9.50532L9.83864 5.33389H6.81459L10.4251 11.8672L6.66797 18.6672H9.60039L11.9646 14.2482L14.3106 18.6672H17.3346Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_75_17029">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="export__text">
                                    <p>Export as .XCL</p>
                                    <span>Best format for Microsoft Excel.</span>
                                </div>
                            </div>
                            <div class="export__checkbox">
                                <label class="checkbox__container radio">
                                    <input type="radio" name="radio1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="button__wrapper">
                        <button type="submit" class="regular-btn"><span><img src="img/exporty.svg" alt="export"></span>
                            Export bulk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal__wrapper" style="display:none;">
    <div class="inner__modal">
        <div class="modal__box delete__bulk">
            <a href="#" class="close__"><img src="img/closemodal.svg" alt="closemodal"></a>
            <div class="delete__bulk--media">
                <img src="img/deletebulk.svg" alt="deletebulk">
            </div>
            <div class="delete__info">
                <p>Delete “Tests.csv”</p>
                <span>Are you sure you want to remove tests.csv from your lists. This action cannot be undone.</span>
                <a href="#" class="delete">Yes, Delete the bulk</a>
            </div>
        </div>
    </div>
</div>
<div class="modal__wrapper" style="display:none;">
    <div class="inner__modal">
        <div class="modal__box new__report">
            <div class="loading" style="display:none;">
                <div class="inner__loading">
                    <span><img src="img/loading.svg" alt="loading"></span>
                    <p>Just a moment <br> <span>Waiting the arrival of your email..</span></p>
                </div>
            </div>
            <form action="">
                <div class="head__report">
                    <p>New report</p>
                    <span>Add the following email seed as participants to your email</span>
                </div>
                <div class="tags__wrapper">
                    <a href="#" data-copy="some text bla bla bla bla">
                        <span><img src="img/copycircle.svg" alt="copycircle"></span>
                        <p>Click to copy</p>
                    </a>
                    <div class="elem__tag">
                        <p>alma.lawson@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tanya.hill@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>g@email.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>dolores.chambers@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim@gmail.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>sara.cruz@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim.jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>bro@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>dolores.chambers@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim@gmail.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>sara.cruz@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim.jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim.jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>tim.jennings@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                    <div class="elem__tag">
                        <p>yesm@example.com</p>
                    </div>
                </div>
                <div class="controls__reports">
                    <div class="left__report">
                        <a href="#">Watch tutorial</a>
                    </div>
                    <div class="right__reports">
                        <a href="#" class="outline-btn cancel__modal">Cancel</a>
                        <button type="submit" class="regular-btn bigger">Check results</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection