@extends('layouts.layout')
@section('content')
<div class="overlay"></div>
<div class="main__container">
    <div class="leads__wrapper">
        <form action="">
            <div class="leads__head">
                <div class="top__head">
                    <div class="top__left__">
                        <h6>Leads</h6>
                        <div class="group__dropdown auto smaller default__dropdown">
                            <a href="#" class="picked">
                                <p><span class="text">All leads</span></p> <img src="img/arrowright.svg"
                                    alt="arrowright" class="arrow__right">
                            </a>
                            <div class="dropdown__box" style="display:none;">
                                <ul>
                                    <li><a href="#"><span>All leads</span></a></li>
                                    <li><a href="#"><span>My google leads</span></a></li>
                                    <li><a href="#" class="new__list--button"><span><img src="img/newlisticon.svg"
                                                    alt="newlisticon"></span> New list</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top__right__">
                        <a href="#" class="regular-btn"><span><img src="img/plus.svg" alt="plus"></span> New Lead</a>
                    </div>
                </div>
                <div class="bottom__head">
                    <div class="controls__buttons">
                        <a href="#" class="outline-btn"><span><img src="img/success.svg" alt="success"></span> Verify
                            leads</a>
                        <a href="#" class="outline-btn"><span><img src="img/campaign.svg" alt="success"></span> Add to
                            campaign</a>
                        <a href="#" class="outline-btn"><span><img src="img/csv.svg" alt="success"></span> Export
                            csv</a>
                    </div>
                    <div class="search__wrapper">
                        <div class="group__input group__search person__search">
                            <input type="text" placeholder="Search for a file...">
                            <button type="submit"><img src="img/search.svg" alt="search"></button>
                            <div class="search__dropdown" style="display:none;">
                                <p>No results found.</p>
                                <ul>
                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>email@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>delta@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fufik@james.com</p>

                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fluffy@james.com</p>

                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>email@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>delta@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fufik@james.com</p>

                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fluffy@james.com</p>

                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>email@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>delta@james.com</p>
                                                <span><img src="img/success.svg" alt="success"></span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fufik@james.com</p>

                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="search__person">
                                            <div class="person__icon">
                                                <img src="img/p1.png" alt="p1">
                                            </div>
                                            <div class="person__desc">
                                                <p>fluffy@james.com</p>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter__wrapper">
                            <a href="#" class="filter__button"><img src="img/filtericon.svg" alt="filtericon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leads__table table__wrapper">
                <table class="regular-table smaller border__side border">
                    <tr>
                        <th class="uppercase text-left check__column">EMAil</th>
                        <th class="uppercase text-left">first name</th>
                        <th class="uppercase text-left">last name</th>
                        <th class="uppercase text-left">Company</th>
                        <th class="uppercase text-left">Owner</th>
                        <th class="uppercase text-left controls__column">Actions</th>
                    </tr>
                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">thisisanemail@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">jimmy@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/error.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">thisisanemail@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">jimmy@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/error.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">thisisanemail@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">jimmy@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/error.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">thisisanemail@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">jimmy@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/success.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left check__column">
                            <div class="checkbox__wrapper">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="regular-text">alfredbro@gmail.com <span><img src="img/error.svg"
                                                alt="success"></span></p>
                                </label>
                            </div>
                        </td>
                        <td class="text-left">
                            <p class="grey">Jhon</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Dupont</p>
                        </td>
                        <td class="text-left">
                            <p class="grey">Apple</p>
                        </td>
                        <td>
                            <div class="avatar">
                                <img src="img/avatarsmall.png" alt="avatarsmall">
                            </div>
                        </td>
                        <td class='controls__column'>
                            <div class="controls__wrapper">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
<div class="modal__wrapper" style="display:none;">
    <div class="inner__modal">
        <div class="modal__box new__lead">
            <form action="">
                <div class="head__lead">
                    <h6>New leads list</h6>
                    <a href="#" class="close__lead"><img src="img/closebutton.svg" alt="closebutton"></a>
                </div>
                <div class="lead__group">

                    <div class="group__input">
                        <p>List name</p>
                        <input type="text" placeholder="Enter a name">
                    </div>
                    <div class="group__submit">
                        <button type="submit" class="regular-btn bigger">Create list</button>
                    </div>
                </div>
            </form>
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