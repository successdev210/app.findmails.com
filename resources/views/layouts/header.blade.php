<header>
    <div class="container">
        <div class="outer__header">
            <a href="/">
                <img src="img/logo.svg" alt="logo">
            </a>
            <div class="header__menu">
                @auth
                <ul>
                    <li>
                        <a href="{{url('singleemail')}}" class="{{isset($pageTitle) && $pageTitle === 'singleemail'? 'active': '' }}">Search</a>
                    </li>
                    <li>

                        <a href="{{url('findersearch')}}" class="{{isset($pageTitle) && $pageTitle === 'findersearch'? 'active': '' }}">Finder</a>
                    </li>
                    <li>
                        <a href="{{url('bulkverif2')}}" class="{{isset($pageTitle) && $pageTitle === 'bulkverif2'? 'active': '' }}">Verification</a>
                    </li>
                    <li class="menu__dropdown--list">
                        <a href="#">Deliverability</a>
                        <div class="menu__dropdown" style="display:none;">
                            <div class="deliverability__wrapper">
                                <div class="head__deliverability">
                                    <p>Deliverability tools</p>
                                    <span>Test your emails before sending them.</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="deliverability2.html">
                                            <div class="media__image">
                                                <img src="img/deliv1.svg" alt="deliv1">
                                            </div>
                                            <div class="desc">
                                                <p>Inbox placement <span>New</span></p>
                                                <span>Find email addresses from a list of websites or companies.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media__image">
                                                <img src="img/deliv2.svg" alt="deliv1">
                                            </div>
                                            <span class="desc">
                                                <p>Blacklist Monitoring</p>
                                                <span>Find email addresses from a list of names and companies.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu__dropdown--list">
                        <a href="{{url('bulktasks')}}" class="{{isset($pageTitle) && $pageTitle === 'bulktasks'? 'active': '' }}">Bulk</a>
                        <div class="menu__dropdown" style="display:none;">
                            <div class="bulk">

                                <ul>
                                    <li>
                                        <a href="{{url('domainsearch')}}">
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
                                        <a href="{{url('bulkfinder2')}}">
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
                                        <a href="{{url('bulkverif2')}}">
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
                    </li>
                    <li>
                        <a href="{{url('leads')}}" class="{{isset($pageTitle) && $pageTitle === 'leads'? 'active': '' }}">Leads</a>
                    </li>
                    <li>
                        <a href="{{url('campaign2')}}" class="{{isset($pageTitle) && $pageTitle === 'campaign2'? 'active': '' }}">Campaign</a>
                    </li>
                </ul>
                @endauth
                <div></div>
                <div class="header__controls">
                    @if (Route::has('login'))
                    @auth
                    <a href="#" class="outline-btn">Buy Credits</a>
                    <ul>
                        <li>
                            <a href="{{url('settings')}}" class="{{isset($pageTitle) && $pageTitle === 'settings'? 'active': '' }}"><img src="img/settings.svg" alt="settings"></a>
                        </li>
                        <li>
                            <a href="#" class="notification__button"><img src="img/notification.svg" alt="notification"></a>
                            <div class="notification__dropdown">
                                <div class="head__dropdown">
                                    <p>Notifications</p>
                                    <a href="#">Mark as read</a>
                                </div>
                                <div class="notification__list">
                                    <div class="elem__notif">
                                        <span style="background-color:#1751D0;"></span>
                                        <div class="notif__desc">
                                            <p>My main project was edited</p>
                                            <span>Jan 23, 2023 at 10:15am</span>
                                        </div>
                                    </div>
                                    <div class="elem__notif">
                                        <span style="background-color:#1751D0;"></span>
                                        <div class="notif__desc">
                                            <p>Invoice #1011 was paid</p>
                                            <span>Jan 23, 2023 at 10:15am</span>
                                        </div>
                                    </div>
                                    <div class="elem__notif">
                                        <span style="background-color:#1751D0;"></span>
                                        <div class="notif__desc">
                                            <p>Feedback left on “ASC Redesign”</p>
                                            <span>Jan 23, 2023 at 10:15am</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="more__button">
                                    <a href="#">View all notifications</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="profile__info">
                        <a href="#" class="profile__info__button">
                            <!-- <img src="img/avatar.png" alt="avatar"> -->
                            <span class="placeholder"><img src="img/profile.svg" alt=""></span><br>

                        </a>
                        <div class="profile__info__dropdown text-center">
                            <div>{{Auth::user()->name}}</div>
                            <div>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <button type="submit" class="logout__button"><svg class="h-4 w-4 inline-block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                            <polyline points="16 17 21 12 16 7" />
                                            <line x1="21" y1="12" x2="9" y2="12" />
                                        </svg>
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> -->
                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-900">Login</a>

                    <!-- @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 outline-1 hover:text-gray-900 hover:outline-dotted focus:rounded-sm focus:outline-red-600">Register</a>
                    @endif -->
                    @endauth
                    @endif
                </div>
            </div>

            <div class="menu__button">
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</header>