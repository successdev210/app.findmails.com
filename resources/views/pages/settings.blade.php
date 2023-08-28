@extends('layouts.layout')
@section('content')
<div class="overlay"></div>
<div class="float__dropdowns"></div>

<div class="main__container">
    <div class="settings__wrapper">
        <div class="settings__list">
            <a href="#" class="settings__menu">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="settings__elem">
                <p>GENERAL</p>
                <ul>
                    <li><a href="#" class="active" data-container="profile"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM12.8657 7.2733C12.8657 5.74704 11.5773 4.5 10.0002 4.5C8.42326 4.5 7.13478 5.74704 7.13478 7.2733C7.13478 8.79956 8.42326 10.0466 10.0002 10.0466C11.5772 10.0466 12.8657 8.79956 12.8657 7.2733ZM5.88793 14.3692C5.33467 13.8482 5.29194 12.9913 5.79805 12.4245C6.18236 11.9941 6.68421 11.5889 7.21167 11.5889H12.7887C13.553 11.5889 14.1283 11.974 14.5149 12.5528C14.8561 13.0634 14.731 13.7413 14.303 14.1816C13.2128 15.3032 11.6878 16 10.0002 16C8.4087 16 6.9619 15.3803 5.88793 14.3692Z" fill="#A0A0AB" />
                                </svg>
                            </span> Profile</a></li>
                    <li><a href="#" data-container="security"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2C7.50714 2 5.5 4.039 5.5 6.57143V7.33333C4.675 7.33333 4 8.01905 4 8.85714V16.4762C4 17.3143 4.675 18 5.5 18H14.5C15.325 18 16 17.3143 16 16.4762V8.85714C16 8.01905 15.325 7.33333 14.5 7.33333V6.57143C14.5 4.039 12.4929 2 10 2ZM10 3.52381C11.7071 3.52381 13 4.83719 13 6.57143V7.33333H7V6.57143C7 4.83719 8.29286 3.52381 10 3.52381ZM10 11.1429C10.825 11.1429 11.5 11.8286 11.5 12.6667C11.5 13.5048 10.825 14.1905 10 14.1905C9.175 14.1905 8.5 13.5048 8.5 12.6667C8.5 11.8286 9.175 11.1429 10 11.1429Z" fill="#A0A0AB" />
                                </svg>
                            </span> Security</a></li>
                    <li><a href="#" data-container="notifications"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 2H11.3316C11.6751 2 11.8821 2.4022 11.7346 2.71239C11.4769 3.25409 11.3327 3.86021 11.3327 4.5C11.3327 6.80119 13.1982 8.66667 15.4993 8.66667C16.1394 8.66667 16.7458 8.52233 17.2877 8.26444C17.5979 8.11681 18.0002 8.3238 18.0002 8.66734V12.0003C18.0002 13.1049 17.1048 14.0003 16.0003 14.0003L15.1669 14.0003C15.0748 14.0003 15.0002 14.075 15.0002 14.167V16.2748C15.0002 16.6285 14.5873 16.8213 14.3161 16.5943L11.2634 14.0391C11.2334 14.014 11.1956 14.0003 11.1565 14.0003L4.00001 14.0003C2.89544 14.0003 2 13.1049 2 12.0003V4C2 2.89543 2.89543 2 4 2Z" fill="#A0A0AB" />
                                    <path d="M17.9993 4.5C17.9993 3.11929 16.8801 2 15.4993 2C14.1186 2 12.9993 3.11929 12.9993 4.5C12.9993 5.88071 14.1186 7 15.4993 7C16.8801 7 17.9993 5.88071 17.9993 4.5Z" fill="#A0A0AB" />
                                </svg>
                            </span> Notifications</a></li>
                </ul>
            </div>

            <div class="settings__elem">
                <p>WORKSPACE</p>
                <ul>
                    <li><a href="#" data-container="team"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5897 2.51926C12.7945 2.10712 13.2947 1.93904 13.7068 2.14386C15.2139 2.89285 16.2526 4.44952 16.2526 6.25033C16.2526 8.05113 15.2139 9.6078 13.7068 10.3568C13.2947 10.5616 12.7945 10.3935 12.5897 9.98139C12.3849 9.56924 12.5529 9.06908 12.9651 8.86426C13.9275 8.38599 14.5859 7.39429 14.5859 6.25033C14.5859 5.10636 13.9275 4.11466 12.9651 3.63639C12.5529 3.43157 12.3849 2.93141 12.5897 2.51926Z" fill="#A0A0AB" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2434 13.6288C14.4331 13.2095 14.9269 13.0234 15.3462 13.2131C16.7444 13.8458 17.981 14.8664 18.9912 16.1521C19.2756 16.514 19.2127 17.0379 18.8508 17.3223C18.4889 17.6066 17.965 17.5437 17.6807 17.1818C16.8118 16.0759 15.7799 15.2387 14.6591 14.7315C14.2397 14.5418 14.0536 14.0481 14.2434 13.6288Z" fill="#A0A0AB" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33594 6.25033C3.33594 3.71902 5.38797 1.66699 7.91928 1.66699C10.4506 1.66699 12.5026 3.71902 12.5026 6.25033C12.5026 8.78163 10.4506 10.8337 7.91928 10.8337C5.38797 10.8337 3.33594 8.78163 3.33594 6.25033Z" fill="#A0A0AB" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.01401 16.1521C2.75716 13.9335 5.18355 12.5003 7.91928 12.5003C10.655 12.5003 13.0814 13.9335 14.8245 16.1521C15.0216 16.403 15.0582 16.7444 14.9188 17.0313C14.7793 17.3182 14.4883 17.5003 14.1693 17.5003H1.66928C1.35026 17.5003 1.05924 17.3182 0.919785 17.0313C0.780329 16.7444 0.816914 16.403 1.01401 16.1521Z" fill="#A0A0AB" />
                                </svg>
                            </span> Team</a></li>
                    <li><a href="#"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.25H15.9997C17.1042 4.25 17.9996 5.14473 17.9997 6.24927L17.9997 6.49995C17.9997 6.73007 17.8131 6.91663 17.583 6.91663H2.41667C2.18656 6.91663 2.00001 6.73009 2.00001 6.49997L2 6.25006C1.99997 5.14546 2.89541 4.25 4 4.25Z" fill="#A0A0AB" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.41674 8.58329C2.18662 8.58329 2.00007 8.76985 2.00008 8.99997L2.00021 13.7499C2.00025 14.8545 2.89566 15.7498 4.00019 15.7499L15.9999 15.75C17.1045 15.75 17.9999 14.8554 17.9999 13.7508L17.9998 8.99995C17.9998 8.76983 17.8132 8.58329 17.5831 8.58329H2.41674ZM5.49967 10.4166C5.03944 10.4166 4.66634 10.7897 4.66634 11.25C4.66634 11.7102 5.03944 12.0833 5.49967 12.0833H7.99967C8.45991 12.0833 8.83301 11.7102 8.83301 11.25C8.83301 10.7897 8.45991 10.4166 7.99967 10.4166H5.49967Z" fill="#A0A0AB" />
                                </svg>
                            </span> Subscription</a></li>
                    <li><a href="#" data-container="billing"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.6641 3.33301H3.33073C2.41025 3.33301 1.66406 4.0792 1.66406 4.99967V9.99967C1.66406 10.9201 2.41025 11.6663 3.33073 11.6663H3.7474C3.97751 11.6663 4.16406 11.4798 4.16406 11.2497V9.16634C4.16406 7.32539 5.65645 5.83301 7.4974 5.83301H12.9141C13.1442 5.83301 13.3307 5.64646 13.3307 5.41634V4.99967C13.3307 4.0792 12.5845 3.33301 11.6641 3.33301Z" fill="#A0A0AB" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83073 9.16634C5.83073 8.24587 6.57692 7.49967 7.4974 7.49967H15.8307C16.7512 7.49967 17.4974 8.24587 17.4974 9.16634V14.1663C17.4974 15.0868 16.7512 15.833 15.8307 15.833H7.4974C6.57692 15.833 5.83073 15.0868 5.83073 14.1663V9.16634ZM13.3307 11.6663C13.3307 12.5868 12.5845 13.333 11.6641 13.333C10.7436 13.333 9.9974 12.5868 9.9974 11.6663C9.9974 10.7459 10.7436 9.99967 11.6641 9.99967C12.5845 9.99967 13.3307 10.7459 13.3307 11.6663Z" fill="#A0A0AB" />
                                </svg>
                            </span> Billing</a></li>
                </ul>
            </div>
        </div>
        <div class="settings__main">
            <form action="">
                <div class="settings__container billing" style="display:none;">
                    <div class="head__settings no__spacer">
                        <p>Billing</p>
                        <span>Manage your billing settings on your account</span>
                    </div>
                    <div class="billing__wrapper">
                        <div class="search__members">
                            <div class="header__search">
                                <p>Search Members</p>
                                <a href="#" class="add__card--button">Add</a>
                            </div>
                            <div class="methods__wrapper">
                                <div class="elem__method">
                                    <div class="method__left">
                                        <span><img src="img/visa.svg" alt="visa"></span>
                                        <div class="method__info">
                                            <p>Visa **** 4532 <span class="default">Default</span></p>
                                            <span>Expires Sep 2024</span>
                                        </div>
                                    </div>
                                    <div class="method__right">
                                        <div class="method__controls">
                                            <ul>
                                                <li><a href="#" class="edit__card--button"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 14.5501V17.0835C2.5 17.3168 2.68333 17.5001 2.91667 17.5001H5.45C5.55833 17.5001 5.66667 17.4585 5.74167 17.3751L14.8417 8.28346L11.7167 5.15846L2.625 14.2501C2.54167 14.3335 2.5 14.4335 2.5 14.5501ZM17.2583 5.8668C17.5833 5.5418 17.5833 5.0168 17.2583 4.6918L15.3083 2.7418C14.9833 2.4168 14.4583 2.4168 14.1333 2.7418L12.6083 4.2668L15.7333 7.3918L17.2583 5.8668Z" fill="#969696" />
                                                        </svg></a></li>
                                                <li><a href="#" class="remove__card--button"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.9974 15.8333C4.9974 16.75 5.7474 17.5 6.66406 17.5H13.3307C14.2474 17.5 14.9974 16.75 14.9974 15.8333V7.5C14.9974 6.58333 14.2474 5.83333 13.3307 5.83333H6.66406C5.7474 5.83333 4.9974 6.58333 4.9974 7.5V15.8333ZM14.9974 3.33333H12.9141L12.3224 2.74167C12.1724 2.59167 11.9557 2.5 11.7391 2.5H8.25573C8.03906 2.5 7.8224 2.59167 7.6724 2.74167L7.08073 3.33333H4.9974C4.53906 3.33333 4.16406 3.70833 4.16406 4.16667C4.16406 4.625 4.53906 5 4.9974 5H14.9974C15.4557 5 15.8307 4.625 15.8307 4.16667C15.8307 3.70833 15.4557 3.33333 14.9974 3.33333Z" fill="#A0A0AB" />
                                                        </svg>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoices__wrapper">
                            <p>Invoices</p>
                            <div class="invoices__table">
                                <table>
                                    <tr>
                                        <th class="text-left check__column">
                                            <label class="checkbox__container check__all">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th class="text-left">Amount</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Date</th>
                                        <th class="action"></th>
                                    </tr>
                                    <tr>
                                        <td class="check__column">
                                            <label class="checkbox__container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="price__row">
                                                <span class="price">$9.93</span>
                                                <span class="currency">USD</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <span class="success">Successed</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="date">
                                                <p>Sep 14, 11:14 PM</p>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="#" data-action="action1"><svg width="17" height="4" viewBox="0 0 17 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 0C1.15 0 0.25 0.9 0.25 2C0.25 3.1 1.15 4 2.25 4C3.35 4 4.25 3.1 4.25 2C4.25 0.9 3.35 0 2.25 0ZM14.25 0C13.15 0 12.25 0.9 12.25 2C12.25 3.1 13.15 4 14.25 4C15.35 4 16.25 3.1 16.25 2C16.25 0.9 15.35 0 14.25 0ZM8.25 0C7.15 0 6.25 0.9 6.25 2C6.25 3.1 7.15 4 8.25 4C9.35 4 10.25 3.1 10.25 2C10.25 0.9 9.35 0 8.25 0Z" fill="#969696" />
                                                </svg>
                                            </a>
                                            <div class="action__dropdown action1" data-action="action1" style="display:none;">
                                                <ul>
                                                    <li><a href="#"><span><img src="img/action1.svg" alt="action"></span>Download</a></li>
                                                    <li><a href="#"><span><img src="img/action2.svg" alt="action"></span>Option 2</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="check__column">
                                            <label class="checkbox__container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="price__row">
                                                <span class="price">$2.00</span>
                                                <span class="currency">USD</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <span class="success">Successed</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="date">
                                                <p>Sep 14, 11:14 PM</p>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="#" data-action="action2"><svg width="17" height="4" viewBox="0 0 17 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 0C1.15 0 0.25 0.9 0.25 2C0.25 3.1 1.15 4 2.25 4C3.35 4 4.25 3.1 4.25 2C4.25 0.9 3.35 0 2.25 0ZM14.25 0C13.15 0 12.25 0.9 12.25 2C12.25 3.1 13.15 4 14.25 4C15.35 4 16.25 3.1 16.25 2C16.25 0.9 15.35 0 14.25 0ZM8.25 0C7.15 0 6.25 0.9 6.25 2C6.25 3.1 7.15 4 8.25 4C9.35 4 10.25 3.1 10.25 2C10.25 0.9 9.35 0 8.25 0Z" fill="#969696" />
                                                </svg>
                                            </a>
                                            <div class="action__dropdown action2" data-action="action2" style="display:none;">
                                                <ul>
                                                    <li><a href="#"><span><img src="img/action1.svg" alt="action"></span>Download</a></li>
                                                    <li><a href="#"><span><img src="img/action2.svg" alt="action"></span>Option 2</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="check__column">
                                            <label class="checkbox__container">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="price__row">
                                                <span class="price">$2.00</span>
                                                <span class="currency">USD</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status">
                                                <span class="success">Successed</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="date">
                                                <p>Sep 14, 11:14 PM</p>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="#" data-action="action3"><svg width="17" height="4" viewBox="0 0 17 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 0C1.15 0 0.25 0.9 0.25 2C0.25 3.1 1.15 4 2.25 4C3.35 4 4.25 3.1 4.25 2C4.25 0.9 3.35 0 2.25 0ZM14.25 0C13.15 0 12.25 0.9 12.25 2C12.25 3.1 13.15 4 14.25 4C15.35 4 16.25 3.1 16.25 2C16.25 0.9 15.35 0 14.25 0ZM8.25 0C7.15 0 6.25 0.9 6.25 2C6.25 3.1 7.15 4 8.25 4C9.35 4 10.25 3.1 10.25 2C10.25 0.9 9.35 0 8.25 0Z" fill="#969696" />
                                                </svg>
                                            </a>
                                            <div class="action__dropdown action3" data-action="action3" style="display:none;">
                                                <ul>
                                                    <li><a href="#"><span><img src="img/action1.svg" alt="action"></span>Download</a></li>
                                                    <li><a href="#"><span><img src="img/action2.svg" alt="action"></span>Option 2</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings__container team" style="display:none;">
                    <div class="head__settings no__spacer">
                        <p>Team</p>
                        <span>Manage your team members on your account</span>
                    </div>
                    <div class="team__wrapper">
                        <div class="team__search">
                            <div class="title">
                                <p>Search Members</p>
                                <div class="tooltip">
                                    <span><img src="img/tooltip.svg" alt="tooltip"></span>
                                    <div class="tooltip__box">
                                        <p>Lorem ipsum dolor sit amet consectetur, </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group__input group__search search__member--box">
                                <input type="text" placeholder="Search for a file...">
                                <span><img src="img/dropdownbottom.svg" alt="dropdown"></span>
                                <div class="search__dropdown" style="display:none;">
                                    <p>No results found.</p>
                                    <ul>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Justin Gouse</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Aspen Dokidis</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Haylie Lubin</p>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Marcus Lubin</p>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Justin Gouse</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Aspen Dokidis</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Haylie Lubin</p>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Marcus Lubin</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Justin Gouse</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Aspen Dokidis</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Haylie Lubin</p>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class='search__member'>
                                                <p>Marcus Lubin</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__table">
                            <p>Team members</p>
                            <div class="inner__team">
                                <div class="team__elem">
                                    <div class="team__left">
                                        <span><img src="img/team1.png" alt="team"></span>
                                        <div class="team__desc">
                                            <p>Justin Gouse</p>
                                            <span>jgous@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="team__right">
                                        <div class="team__status">
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="team__elem">
                                    <div class="team__left">
                                        <span><img src="img/team2.png" alt="team"></span>
                                        <div class="team__desc">
                                            <p>Aspen Dokidis</p>
                                            <span>aspendokidis@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="team__right">
                                        <div class="team__status">
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="team__elem">
                                    <div class="team__left">
                                        <span><img src="img/team3.png" alt="team"></span>
                                        <div class="team__desc">
                                            <p>Haylie Lubin</p>
                                            <span>haylielubin@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="team__right">
                                        <div class="team__status">
                                            <span><img src="img/owner.svg" alt="owner"></span>
                                            <p>Owner</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="team__elem">
                                    <div class="team__left">
                                        <span><img src="img/team4.png" alt="team"></span>
                                        <div class="team__desc">
                                            <p>Marcus Lubin</p>
                                            <span>marcuslubin@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="team__right">
                                        <div class="team__status">
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings__container notifications" style="display:none;">
                    <div class="head__settings">
                        <p>Notifications</p>
                        <span>We may still send you important notifications about your account.</span>
                    </div>
                    <div class="step__group">
                        <div class="notification__elem">
                            <div class="notification__switcher">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="notification__desc">
                                <p>Promotional notifications</p>
                                <span>Receive hot promotions, discounts, and software update notifications.</span>
                            </div>
                        </div>
                        <div class="notification__elem">
                            <div class="notification__switcher">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="notification__desc">
                                <p>Account notifications</p>
                                <span>Receive transactional emails such as list completion, successful import, and
                                    export.</span>
                            </div>
                        </div>
                        <div class="notification__elem">
                            <div class="notification__switcher">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="notification__desc">
                                <p>Credits notifications</p>
                                <span>Receive notification when my balance is less than <input type="text" value="300" class="numeric"></span>
                            </div>
                        </div>
                    </div>
                    <div class="controls__wrapper">
                        <a href="#" class="outline-btn">Cancel</a>
                        <button class="regular-btn bigger">Save</button>
                    </div>
                </div>
                <div class="settings__container security" style="display:none;">
                    <div class="head__settings">
                        <p>Password</p>
                        <span>Please enter your current password to change your password.</span>
                    </div>
                    <div class="step__group">
                        <div class="group__input">
                            <p>Current password</p>
                            <input type="password" value="••••••••">
                        </div>
                        <div class="group__input">
                            <p>New password</p>
                            <input type="password" value="••••••••">
                            <label for="">Your new password must be more than 8 characters.</label>
                        </div>
                        <div class="group__input">
                            <p>Confirm new password</p>
                            <input type="password" value="••••••••">
                        </div>
                    </div>
                    <div class="controls__wrapper">
                        <a href="#" class="outline-btn">Cancel</a>
                        <button class="regular-btn bigger">Update password</button>
                    </div>
                </div>
                <div class="settings__container profile">
                    <div class="head__settings">
                        <p>Profile</p>
                        <span>Please enter your current password to change your password.</span>
                    </div>
                    <div class="step__group">
                        <div class="double__group">
                            <div class="group__input">
                                <p>First name</p>
                                <input type="text" value="Olivia">
                            </div>
                            <div class="group__input">
                                <p>Last name</p>
                                <input type="text" value="Rhye">
                            </div>
                        </div>
                    </div>
                    <div class="step__group">
                        <div class="group__input smaller">
                            <p>Email address</p>
                            <input type="text" value="olivia@untitledui.com" class="email">
                        </div>
                    </div>
                    <div class="step__group">
                        <div class="avatar__picker">
                            <div class="avatar__image">
                                <img src="img/avatar.png" alt="avatar">
                            </div>
                            <div class="avatar__upload">
                                <input type="file">
                                <span><img src="img/uploadicon.svg" alt="upload"></span>
                                <p><a href="#">Click to upload</a> or drag and drop <br> <span>SVG, PNG, JPG or GIF
                                        (max. 800x400px)</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="step__group">
                        <div class="group__input smaller">
                            <p>Role</p>
                            <input type="text" value="Product Designer">
                        </div>
                    </div>
                    <div class="step__group">
                        <div class="group__input smaller">
                            <p>Country</p>
                            <div class="group__dropdown country__picker">
                                <a href="#" class="picked">
                                    <p><img src="img/flag1.png" alt="flag" class="flag"><span class="text">Australia</span></p> <img src="img/arrowright.svg" alt="arrowright" class="arrow__right">
                                </a>
                                <div class="dropdown__box" style="display:none;">
                                    <ul>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia2</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia3</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia4</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia5</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia6</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia7</span></a>
                                        </li>
                                        <li><a href="#"><span class="flag"><img src="img/flag1.png" alt="flag"></span><span class="country">Australia8</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step__group">
                        <div class="group__input smaller">
                            <p>Timezone</p>
                            <div class="group__dropdown timezone top">
                                <a href="#" class="picked">
                                    <p><img src="img/timezone.svg" alt="flag" class="timer"><span class="text__timezone"><span class="time__info">Pacific Standard Time
                                                (PST)</span><span class="time__zone">UTC−08:00</span></span></p> <img src="img/arrowright.svg" alt="arrowright" class="arrow__right">
                                </a>
                                <div class="dropdown__box" style="display:none;">
                                    <ul>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−08:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−09:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−10:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−11:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−12:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−13:00</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <p class="text__timezone"><span class="time__info">Pacific Standard Time
                                                        (PST)</span><span class="time__zone">UTC−14:00</span></p>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls__wrapper">
                        <a href="#" class="outline-btn">Cancel</a>
                        <button class="regular-btn bigger">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection