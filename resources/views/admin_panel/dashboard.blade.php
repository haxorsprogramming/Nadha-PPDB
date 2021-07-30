@include('layout.header_dashboard_panel')
<aside id="chat-sidebar" class="side-nav white">
    <div class="side-nav-wrapper">
        <div class="col s12">
            <ul class="tabs tab-demo" style="width: 100%;">
                <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
            </ul>
        </div>
        <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
            <p class="right-sidebar-heading">CHAT LIST</p>
            <div class="chat-list">
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">John Doe</p>
                            <span class="chat-message">Hello</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image-1.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Tom Simpson</p>
                            <span class="chat-message">How are you?</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image-3.jpg" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Alan Grey</p>
                            <span class="chat-message">Call me later</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Michael Fisher</p>
                            <span class="chat-message">How's it going?</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image-1.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Amily Lee</p>
                            <span class="chat-message">We're good</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Sandra Smith</p>
                            <span class="chat-message">See you later!</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="{{ asset('/ladun/alpha') }}/images/profile-image-3.jpg" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">Sandra Smith</p>
                            <span class="chat-message">Can we meet?</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="chat-sidebar-options">
                <a href="#" class="left"><i class="material-icons">edit</i></a>
                <a href="#" class="right"><i class="material-icons">settings</i></a>
            </div>
        </div>
        <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
            <p class="right-sidebar-heading">SYSTEM</p>
            <div class="settings-list">
                <div class="setting-item">
                    <div class="setting-text">Notifications</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">Quick Results</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">Auto Updates</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <p class="right-sidebar-heading">ACCOUNT</p>
            <div class="settings-list">
                <div class="setting-item">
                    <div class="setting-text">Offline Mode</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">Location</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">Show Offline Users</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">Save History</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<aside id="chat-messages" class="side-nav white">
    <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
    <div class="messages-container">
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">Lorem Ipsum</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">Integer in faucibus diam?</div>
        </div>
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
        </div>
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="{{ asset('/ladun/alpha') }}/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">Duis maximus leo eget massa porta</div>
        </div>
    </div>
    <div class="message-compose-box">
        <div class="input-field">
            <input placeholder="Write message" id="message_compose" type="text">
        </div>
    </div>
</aside>

@include('layout.side_menu_panel')
<main class="mn-inner inner-active-sidebar" id="div_utama">

</main>


@include('layout.footer_dashboard_panel')