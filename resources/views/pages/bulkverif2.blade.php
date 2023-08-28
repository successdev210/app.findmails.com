@extends('layouts.layout')

@section('content')
<div class="overlay"></div>
<div class="overlay__popup"></div>
<div class="float__tooltip--box" style="display:none;">
    <p></p>
</div>
<div class="main__container">
    <div class="domain__search--container">
        <form action="">
            <div class="domain__search--box">
                <div class="head__search--box">
                    <p>Bulk Verification</p>
                    <a href="#" class="regular-btn new__bulkverif--button"><span><img src="img/plus.svg"
                                alt="plus"></span> New Bulk</a>
                </div>
                <div class="search__file">
                    <div class="group__input group__search bulk__domain">
                        <input type="text" placeholder="Search for a file...">
                        <button type="submit"><img src="img/search.svg" alt="search"></button>
                        <div class="search__dropdown" style="display:none;">
                            <p>No results found.</p>
                            <ul>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Emails_Campaign.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Downloaded_Status.csv</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Error_State.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Random_Campaign.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>G-Suit Mails Search</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Pending_Status.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>52</span> emails</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Emails_Campaign.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>12</span> emails</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Downloaded_Status.csv</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Error_State.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Random_Campaign.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>G-Suit Mails Search</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='search__file--elem'>
                                        <div class="file__name">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.5 1.70215V4.80005C10.5 5.22009 10.5 5.43011 10.5817 5.59055C10.6537 5.73167 10.7684 5.8464 10.9095 5.91831C11.0699 6.00005 11.28 6.00005 11.7 6.00005H14.7979M10.5 12.75H6M12 9.75H6M15 7.49117V12.9C15 14.1601 15 14.7902 14.7548 15.2715C14.539 15.6948 14.1948 16.039 13.7715 16.2548C13.2902 16.5 12.6601 16.5 11.4 16.5H6.6C5.33988 16.5 4.70982 16.5 4.22852 16.2548C3.80516 16.039 3.46095 15.6948 3.24524 15.2715C3 14.7902 3 14.1601 3 12.9V5.1C3 3.83988 3 3.20982 3.24524 2.72852C3.46095 2.30516 3.80516 1.96095 4.22852 1.74524C4.70982 1.5 5.33988 1.5 6.6 1.5H9.00883C9.55916 1.5 9.83432 1.5 10.0933 1.56217C10.3229 1.61729 10.5423 1.7082 10.7436 1.83156C10.9707 1.9707 11.1653 2.16527 11.5544 2.55442L13.9456 4.94558C14.3347 5.33473 14.5293 5.5293 14.6684 5.75636C14.7918 5.95767 14.8827 6.17715 14.9378 6.40673C15 6.66568 15 6.94084 15 7.49117Z"
                                                        stroke="#A0A0AB" stroke-width="1.4" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg></span>
                                            <p>Pending_Status.txt</p>
                                        </div>
                                        <div class="domain__names">
                                            <p><span>1</span> email</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="file__table">
                    <div class="table__wrapper">
                        <table class="regular-table border">
                            <tr>
                                <th class="text-left bulk__spacer">BULK</th>
                                <th class="text-left">STATUS</th>
                                <th class="text-center">CREATED</th>
                            </tr>
                            <tr class="domain__search--file pending">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status pending">Pending</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>

                            <tr class="domain__search--file ready">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration2.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Downloaded_Status.csv</p>
                                            <span>1 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status ready">Ready</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>
                            <tr class="domain__search--file  failed">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status failed"><img src="img/xicon.svg" alt="xicon">Failed</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>

                            <tr class="domain__search--file ready">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status downloaded">Downloaded</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>


                            <tr class="domain__search--file ready">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status ready">Ready</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>


                            <tr class="domain__search--file ready">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status ready">Ready</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>

                            <tr class="domain__search--file no__results">
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="longer"></span>
                                            <span class="medium"></span>
                                        </div>
                                    </div>
                                    <div class="bulk__v--media">
                                        <div class="bulk__media">
                                            <img src="img/integration1.png" alt="integration">
                                        </div>
                                        <div class="bulk__info">
                                            <p>Pending_Status.txt</p>
                                            <span>3 Domain name</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-left placeholder__disabled">
                                    <div class="placeholder__value">

                                    </div>
                                    <span class="bulk__status no__results">No results</span>
                                </td>
                                <td class='text-center placeholder__disabled'>
                                    <div class="placeholder__value">
                                        <div class="inner__placeholder">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <p class="dark nowrap">Jan 27, 2022</p>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="pagination">
                        <p>Page 1 of 1</p>
                        <div class="controls__wrapper">
                            <a href="#" class="outline-btn disabled">Previous</a>
                            <a href="#" class="outline-btn disabled">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>




























    <div class="float__box new__bulk--finder new__bulk--verification" style="display:none;">
        <form action="">
            <div class="new__bulk--verif--box" style="display:none;">
                <div class="head__verif">
                    <p>New Bulk Verification</p>
                    <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
                </div>
                <div class="switcher__new--bulk">
                    <ul>
                        <li class="active"><a href="#" data-bulk=".upload__new">Local files</a></li>
                        <li><a href="#" data-bulk=".upload__enter">Copy & Past</a></li>
                        <li><a href="#" data-bulk=".upload__integration">Integrations</a></li>
                    </ul>
                </div>
                <div class="method__new">
                    <div class="upload__new" style="display:none;">
                        <div class="upl__box">
                            <div class="upload__top">
                                <div class="droppable__box--new">
                                    <input type="file">
                                    <span><img src="img/uploadicon.svg" alt="uploadicon"></span>
                                    <p><a href="#">Click to upload</a> or drag and drop <br> <span>TXT or CSV file (max.
                                            20mb)</span></p>
                                </div>
                                <div class="files__grid--new" style="display:none"></div>
                            </div>
                            <button type="submit" class="regular-btn disabled">Upload</button>
                        </div>
                    </div>
                    <div class="upload__integration">
                        <div class="upl__box">
                            <div class="upload__integration--import" style="display:none;">
                                <div class="wrap__">
                                    <div class="top__part">
                                        <div class="back__button">
                                            <a href="#"><span><img src="img/smallback.svg" alt="smallback"></span>
                                                Back</a>
                                        </div>
                                        <div class="connect__">
                                            <span><img src="img/integration1.png" alt="integration"></span>
                                            <p>Connect your mailchimp <br> <span>Get access to all your lists in
                                                    seconds.</span></p>
                                        </div>
                                        <div class="my__list">
                                            <p>My Lists</p>
                                            <div class="list__wrapper">
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                                <div class="elem__list">
                                                    <label class="checkbox__container">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="desc__list">
                                                        <p>data_complaint.csv</p>
                                                        <span>10,482 emails</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom__part">
                                        <button type="submit" class="regular-btn">Import List</button>
                                    </div>
                                </div>
                            </div>
                            <div class="upload__integration--inner" style="display:none;">
                                <div class="back__button">
                                    <a href="#"><span><img src="img/smallback.svg" alt="smallback"></span> Back</a>
                                </div>
                                <div class="connect__">
                                    <span><img src="img/integration1.png" alt="integration"></span>
                                    <p>Connect your mailchimp <br> <span>Get access to all your lists in seconds.</span>
                                    </p>
                                </div>
                                <div class="connect__form">
                                    <div class="group__input">
                                        <p>Enter API Key</p>
                                        <input type="text" placeholder="XXXX-XXXX">
                                        <span class="tooltip__float"
                                            data-tooltip="Some random text about something"><img src="img/infoicon.svg"
                                                alt="success"></span>
                                    </div>
                                    <div class="connect__button">
                                        <a href="#" class="regular-btn">Connect</a>
                                    </div>
                                </div>
                            </div>
                            <div class="upload__integration--list" style="display:none;">
                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration1.png" alt="integration"></span>
                                        <p>Mailchimp</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connected">Connected</a>
                                    </div>
                                </div>
                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration2.png" alt="integration"></span>
                                        <p>Hubspot</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration3.png" alt="integration"></span>
                                        <p>Sendgrid</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration4.png" alt="integration"></span>
                                        <p>MailerLite</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration5.png" alt="integration"></span>
                                        <p>Campaign Monitor</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration6.png" alt="integration"></span>
                                        <p>Constant Contact</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration7.png" alt="integration"></span>
                                        <p>Mailgun</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>

                                <div class="elem__integration">
                                    <div class="integration__name">
                                        <span><img src="img/integration8.png" alt="integration"></span>
                                        <p>Active Campaign</p>
                                    </div>
                                    <div class="integration__status">
                                        <a href="#" class="connect">Connected</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upload__enter" style="display:none;">
                        <div class="upl__box">
                            <div class="upload__top">
                                <p><span>Enter the domain names</span> (One per line)</p>
                                <div class="inner__copy">
                                    <textarea name="" id="" cols="30" rows="10">
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
bounceless.io
emaillistvalidation.com
apple.com
miscrosoft.com
							</textarea>
                                </div>
                            </div>
                            <button type="submit" class="regular-btn disabled">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bulk__domain--file empty" style="display:none;">
                <div class="top__bulk">
                    <div class="head__box">
                        <div class="left__head">
                            <p>Tech_developers.csv</p>
                            <div class="wrapper__">
                                <span>379 emails found</span>
                            </div>
                        </div>
                        <div class="right__head">
                            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
                        </div>
                    </div>
                    <div class="no__email">
                        <p>No email addresses found.</p>
                        <span>The bulk finder did not return any results for this list.</span>
                    </div>
                </div>
                <div class="bottom__bulk">
                    <a href="#" class="outline-btn delete__bulk--button"><span><img src="img/trash.svg"
                                alt="lead"></span> Delete the bulk</a>
                </div>
            </div>
            <div class="bulk__domain--file filled placeholder__fixed" style="display:none;">
                <div class="placeholder__bulk">
                    <div class="placeholder__elem">
                        <span><img src="img/placeholder.svg" alt="svg"></span>
                        <div class="placeholder__lines">
                            <div class="short"></div>
                            <div class="medium"></div>
                            <div class="long"></div>
                            <div class="medium"></div>
                        </div>
                    </div>

                </div>
                <div class="top__bulk">
                    <div class="head__box">
                        <div class="left__head">
                            <p>Tech_developers.csv</p>
                            <div class="placeholder__text nonvisible">
                                <div></div>
                                <span>379 emails found</span>
                            </div>
                        </div>
                        <div class="right__head">
                            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
                        </div>
                    </div>
                    <div class="bulk__graph">
                        <div class="graph">
                            <canvas id="graph"></canvas>
                        </div>
                        <div class="graph__desc">
                            <p>Emails analysis</p>
                            <ul>
                                <li><span style="background-color:#629B81;"></span>
                                    <p><span>Verified</span> 20.8% - 82 emails</p>
                                </li>
                                <li><span style="background-color:#FEB75B;"></span>
                                    <p><span>Accept-all</span> 37.5% - 147 emails</p>
                                </li>
                                <li><span style="background-color:#E4E4E7;"></span>
                                    <p><span>Unknown</span> 25% - 2 emails</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bulk__filter">
                        <ul>
                            <li><a href="#" data-filter="valid"><span><img src="img/success.svg" alt="success"></span>
                                    Valid</a></li>
                            <li><a href="#" data-filter="risky"><span><img src="img/warning.svg" alt="success"></span>
                                    Risky</a></li>
                            <li><a href="#" data-filter="invalid"><span><img src="img/error.svg" alt="success"></span>
                                    Invalid</a></li>
                            <li><a href="#" data-filter="unknown"><span><img src="img/undefined.svg"
                                            alt="success"></span> Unknown</a></li>
                        </ul>
                    </div>
                    <div class="bulk__table table__wrapper">
                        <table class="border">
                            <tr class="main">
                                <th class="text-left">EMAIL</th>
                                <th class="text-left">ACTION</th>
                            </tr>
                            <tr class="valid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/success.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="risky">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/warning.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="invalid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/error.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="unknown">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/undefined.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="valid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/success.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="risky">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/warning.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="invalid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/error.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="unknown">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/undefined.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="valid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/success.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="risky">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/warning.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="invalid">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/error.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="unknown">
                                <td class="text-left">
                                    <div class="email__">
                                        <span class="tooltip__float" data-tooltip="Email verified"><img
                                                src="img/undefined.svg" alt="success"></span>
                                        <p>gordin@facebook.com</p>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="controls__">
                                        <a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"
                                            data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z"
                                                    fill="#D1D1D6" />
                                                <path
                                                    d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                        <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"
                                                    fill="#D1D1D6" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z"
                                                    fill="#D1D1D6" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="bottom__bulk">
                    <a href="#" class="outline-btn"><span><img src="img/users.svg" alt="lead"></span> Add to leads</a>
                    <a href="#" class="regular-btn export__bulk--button"><span><img src="img/exporty.svg"
                                alt="export"></span> Export All</a>
                </div>
            </div>
            <div class="upload__box" style="display:none;">
                <div class="head__box">
                    <p>New Bulk Finder</p>
                    <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
                </div>
                <div class="upload__box--wrapper">
                    <div class="container__upload">
                        <div class="upload__main">
                            <div class="upload__step step__one">
                                <div class="upload__head">
                                    <span></span>
                                    <p>Upload list (1/3)</p>
                                </div>
                                <div class="upload__content">
                                    <div class="example__desc">
                                        <p>Your file must use commas or semicolons as column delimiters. <a
                                                href="#">Download an example</a></p>
                                    </div>
                                    <div class="droppable__box">
                                        <input type="file">
                                        <span><img src="img/uploadicon.svg" alt="uploadicon"></span>
                                        <p><a href="#">Click to upload</a> or drag and drop <br> <span>TXT or CSV file
                                                (max. 20mb)</span></p>
                                    </div>
                                    <div class="files__grid" style="display:none;">
                                        <!-- <div class='elem__file'>
												<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>
												<div class='file__desc'>
													<div class='top__part'>
														<div class='lf__desc'>
															<p>Tech_developers.csv</p>
															<span>200 KB</span>
														</div>
														<div class='rg__desc'>
															<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>
														</div>
													</div>
													<div class="header" style="display:none;">
														<span>Header included</span>
													</div>
													<div class='bottom__part'>
														<div class='progress'>
															<div class='active' style='width:10%;'></div>
														</div>
														<span>10%</span>
													</div>
												</div>
											</div> -->
                                    </div>
                                    <div class="switcher__elem include__header--checkbox">
                                        <div class="left__switcher">
                                            <span>Include header</span>
                                            <p>File header located in 1st row, labeling columns.</p>
                                        </div>
                                        <div class="right__switcher">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="next__step" style="display:none;">
                                        <a href="#" class="outline-btn">Next step <span><img src="img/arrowdown.svg"
                                                    alt="arrowdown"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="upload__step inactive step__two">
                                <div class="upload__head">
                                    <span></span>
                                    <p>Map fields</p>
                                </div>
                                <div class="map__fields" style="display:none;">
                                    <div class="dropdown__container">
                                        <p>First row</p>
                                        <div class="group__dropdown  default__dropdown  map__">
                                            <a href="#" class="picked" data-row="row1">
                                                <p><span class="text">First name</span></p> <img
                                                    src="img/arrowright.svg" alt="arrowright" class="arrow__right">
                                            </a>
                                            <div class="dropdown__box" style="display:none;">
                                                <ul>
                                                    <li><a href="#" data-row="row1"><span>First name</span></a></li>
                                                    <li><a href="#" data-row="row2"><span>Last name</span></a></li>
                                                    <li><a href="#" data-row="row3"><span>Company name</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown__container">
                                        <p>Second row</p>
                                        <div class="group__dropdown  default__dropdown  map__">
                                            <a href="#" class="picked" data-row="row2">
                                                <p><span class="text">Last name</span></p> <img src="img/arrowright.svg"
                                                    alt="arrowright" class="arrow__right">
                                            </a>
                                            <div class="dropdown__box" style="display:none;">
                                                <ul>
                                                    <li><a href="#" data-row="row2"><span>Last name</span></a></li>
                                                    <li><a href="#" data-row="row1"><span>First name</span></a></li>
                                                    <li><a href="#" data-row="row3"><span>Company name</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown__container">
                                        <p>Third row</p>
                                        <div class="group__dropdown  default__dropdown top map__">
                                            <a href="#" class="picked" data-row="row3">
                                                <p><span class="text">Company name</span></p> <img
                                                    src="img/arrowright.svg" alt="arrowright" class="arrow__right">
                                            </a>
                                            <div class="dropdown__box" style="display:none;">
                                                <ul>
                                                    <li><a href="#" data-row="row3"><span>Company name</span></a></li>
                                                    <li><a href="#" data-row="row1"><span>First name</span></a></li>
                                                    <li><a href="#" data-row="row2"><span>Last name</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="preview__box">
                                        <p>Preview</p>
                                        <table>
                                            <tr>
                                                <th>First name</th>
                                                <th>Second name</th>
                                                <th>Company name</th>
                                            </tr>
                                            <tr>
                                                <td>Alex</td>
                                                <td>Jackson</td>
                                                <td>Apple</td>
                                            </tr>
                                            <tr>
                                                <td>Alex</td>
                                                <td>Jackson</td>
                                                <td>Apple</td>
                                            </tr>
                                            <tr>
                                                <td>Alex</td>
                                                <td>Jackson</td>
                                                <td>Apple</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="next__step">
                                        <a href="#" class="outline-btn">Launch <span><img src="img/arrowdown.svg"
                                                    alt="arrowdown"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="upload__step inactive step__three">
                                <div class="upload__head">
                                    <span></span>
                                    <p>Export result</p>
                                </div>
                                <div class="content__progress" style="display:none;">
                                    <div class="search__progress">
                                        <p>Search in progress...</p>
                                        <div class="progress__bottom">
                                            <div class="progress">
                                                <div class="active" style="width:25%;"></div>
                                            </div>
                                            <p>4/4</p>
                                        </div>
                                    </div>
                                    <div class="progress__steps">
                                        <p>Searching for facebook.com...</p>
                                        <p><span>Found facebook.com</span> 12 emails - 4 generic</p>
                                        <p>Searching for facebook.com...</p>
                                        <p><span>Found facebook.com</span> 12 emails - 4 generic</p>
                                        <p><img src="img/completed.svg" alt="completed"> Search completed</p>
                                    </div>
                                    <div class="progress__button">
                                        <a href="#" class="regular-btn">View results</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 3.6C8 3.03995 8 2.75992 7.89101 2.54601C7.79513 2.35785 7.64215 2.20487 7.45399 2.10899C7.24008 2 6.96005 2 6.4 2H6.16146C5.63433 1.99998 5.17954 1.99997 4.80497 2.03057C4.40963 2.06287 4.01641 2.13419 3.63803 2.32698C3.07354 2.6146 2.6146 3.07354 2.32698 3.63803C2.13419 4.01641 2.06287 4.40963 2.03057 4.80497C1.99997 5.17954 1.99998 5.63429 2 6.16142V6.4C2 6.96005 2 7.24008 2.10899 7.45399C2.20487 7.64215 2.35785 7.79513 2.54601 7.89101C2.75992 8 3.03995 8 3.6 8H6.4C6.96005 8 7.24008 8 7.45399 7.89101C7.64215 7.79513 7.79513 7.64215 7.89101 7.45399C8 7.24008 8 6.96005 8 6.4V3.6Z"
                                            fill="#B6B6B6" />
                                        <path
                                            d="M3.6 10C3.03995 10 2.75992 10 2.54601 10.109C2.35785 10.2049 2.20487 10.3578 2.10899 10.546C2 10.7599 2 11.0399 2 11.6V17.8385C1.99998 18.3657 1.99997 18.8205 2.03057 19.195C2.06287 19.5904 2.13419 19.9836 2.32698 20.362C2.6146 20.9265 3.07354 21.3854 3.63803 21.673C4.01641 21.8658 4.40963 21.9371 4.80497 21.9694C5.17954 22 5.6343 22 6.16144 22H6.4C6.96005 22 7.24008 22 7.45399 21.891C7.64215 21.7951 7.79514 21.6422 7.89101 21.454C8 21.2401 8 20.9601 8 20.4L8 11.6C8 11.0399 8 10.7599 7.89101 10.546C7.79513 10.3578 7.64215 10.2049 7.45399 10.109C7.24008 10 6.96005 10 6.4 10H3.6Z"
                                            fill="#B6B6B6" />
                                        <path
                                            d="M10 20.4C10 20.9601 10 21.2401 10.109 21.454C10.2049 21.6422 10.3578 21.7951 10.546 21.891C10.7599 22 11.0399 22 11.6 22H17.8386C18.3657 22 18.8205 22 19.195 21.9694C19.5904 21.9371 19.9836 21.8658 20.362 21.673C20.9265 21.3854 21.3854 20.9265 21.673 20.362C21.8658 19.9836 21.9371 19.5904 21.9694 19.195C22 18.8205 22 18.3657 22 17.8386V11.6C22 11.0399 22 10.7599 21.891 10.546C21.7951 10.3578 21.6422 10.2049 21.454 10.109C21.2401 10 20.9601 10 20.4 10H11.6C11.0399 10 10.7599 10 10.546 10.109C10.3578 10.2049 10.2049 10.3578 10.109 10.546C10 10.7599 10 11.0399 10 11.6L10 20.4Z"
                                            fill="#B6B6B6" />
                                        <path
                                            d="M22 6.4C22 6.96005 22 7.24008 21.891 7.45399C21.7951 7.64215 21.6422 7.79513 21.454 7.89101C21.2401 8 20.9601 8 20.4 8H11.6C11.0399 8 10.7599 8 10.546 7.89101C10.3578 7.79513 10.2049 7.64215 10.109 7.45399C10 7.24008 10 6.96005 10 6.4V3.6C10 3.03995 10 2.75992 10.109 2.54601C10.2049 2.35785 10.3578 2.20487 10.546 2.10899C10.7599 2 11.0399 2 11.6 2H17.8385C18.3657 1.99998 18.8205 1.99997 19.195 2.03057C19.5904 2.06287 19.9836 2.13419 20.362 2.32698C20.9265 2.6146 21.3854 3.07354 21.673 3.63803C21.8658 4.01641 21.9371 4.40963 21.9694 4.80497C22 5.17954 22 5.6343 22 6.16144V6.4Z"
                                            fill="#B6B6B6" />
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
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_75_17029)">
                                            <rect width="24" height="24" rx="4" fill="#B6B6B6" />
                                            <path
                                                d="M17.3346 18.6672L13.5775 11.8672L17.1697 5.33389H14.2373L12.0196 9.50532L9.83864 5.33389H6.81459L10.4251 11.8672L6.66797 18.6672H9.60039L11.9646 14.2482L14.3106 18.6672H17.3346Z"
                                                fill="white" />
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