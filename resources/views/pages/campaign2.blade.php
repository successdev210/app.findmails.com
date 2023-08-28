@extends('layouts.layout')
@section('content')
<div class="overlay"></div>
<div class="main__container">
    <div class="campaign__wrapper longer">
        <div class="head__campaign">
            <h2>Campaign</h2>
            <a href="#" class="regular-btn"><span><img src="img/plus.svg" alt="plus"></span>New Campaign</a>
        </div>
        <form action="">
            <div class="campaign__filter">
                <ul>
                    <li><a href="#" data-filter="draft">Draft</a></li>
                    <li><a href="#" data-filter="active">Active</a></li>
                    <li><a href="#" data-filter="paused">Paused</a></li>
                </ul>
                <div class="group__input">
                    <input type="text" placeholder="Search for a campaign...">
                    <span><img src="img/search.svg" alt="search"></span>
                </div>
            </div>
            <div class="campaign__table--box">
                <div class="campaign__table">
                    <div class="elem__campaign draft">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="draft">Draft</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 0 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 0 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign active">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="active">Active</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 32 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 3 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign paused">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="paused">Paused</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 1,3k opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 363 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 54 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign draft">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="draft">Draft</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 0 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 0 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign active">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="active">Active</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 32 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 3 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign paused">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="paused">Paused</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 1,3k opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 363 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 54 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign draft">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="draft">Draft</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 0 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 0 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign active">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="active">Active</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 32 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 3 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign paused">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="paused">Paused</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 1,3k opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 363 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 54 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign draft">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="draft">Draft</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 0 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 0 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign active">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="active">Active</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 32 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 3 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign paused">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="paused">Paused</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 1,3k opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 363 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 54 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign draft">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="draft">Draft</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 0 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 0 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign active">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="active">Active</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 32 opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 0 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 3 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                    <div class="elem__campaign paused">
                        <div class="top__campaign">
                            <div class="top__left__">
                                <p>My first email campaign</p>
                                <span class="paused">Paused</span>
                            </div>
                            <div class="top__right__">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="content__campaign">
                            <p><span>From:</span> James Alfraromeo &lt;hello@company.com&gt;</p>
                            <p><span>Created</span> Jan 27, 2023</p>
                        </div>
                        <div class="bottom__campaign">
                            <ul>
                                <li><span><img src="img/c1.svg" alt="c1"></span> 1,3k opened</li>
                                <li><span><img src="img/c2.svg" alt="c1"></span> 363 replied</li>
                                <li><span><img src="img/c3.svg" alt="c1"></span> 54 errors</li>
                            </ul>
                            <div class="created">
                                <p>Created by <img src="img/tinyavatar.png" alt="tinyavatar"> Sophia</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection