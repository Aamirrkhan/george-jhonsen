<?php
include "headerr.php";
?>
<div class="content-body ">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="chatbox main-chat">
                    <div class="chatbox-close"></div>
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="chat" role="tabpanel">
                                <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                                    <div class="card-header chat-list-header text-center">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                                </g>
                                            </svg></a>
                                        <div>
                                            <h6 class="mb-1">Chat List</h6>
                                            <p class="mb-0">Show All</p>
                                        </div>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                </g>
                                            </svg></a>
                                    </div>
                                    <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                        <ul class="contacts">
                                            <li class="name-first-letter">A</li>
                                            <li class="active dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Archie Parker</span>
                                                        <p>Kalid is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Alfie Mason</span>
                                                        <p>Taherah left 7 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>AharlieKane</span>
                                                        <p>Sami is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Athan Jacoby</span>
                                                        <p>Nargis left 30 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="name-first-letter">B</li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Bashid Samim</span>
                                                        <p>Rashid left 50 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Breddie Ronan</span>
                                                        <p>Kalid is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Ceorge Carson</span>
                                                        <p>Taherah left 7 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="name-first-letter">D</li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Darry Parker</span>
                                                        <p>Sami is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Denry Hunter</span>
                                                        <p>Nargis left 30 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="name-first-letter">J</li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Jack Ronan</span>
                                                        <p>Rashid left 50 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Jacob Tucker</span>
                                                        <p>Kalid is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>James Logan</span>
                                                        <p>Taherah left 7 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Joshua Weston</span>
                                                        <p>Sami is online</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="name-first-letter">O</li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Oliver Acker</span>
                                                        <p>Nargis left 30 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dz-chat-user">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="public/images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                        <span class="online_icon offline"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span>Oscar Weston</span>
                                                        <p>Rashid left 50 mins ago</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card chat dz-chat-history-box d-none">
                                    <div class="card-header chat-list-header text-center">
                                        <a href="#" class="dz-chat-history-back">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                                    <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                                </g>
                                            </svg>
                                        </a>
                                        <div>
                                            <h6 class="mb-1">Chat with Khelesh</h6>
                                            <p class="mb-0 text-success">Online</p>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg></a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
                                                <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                Hi, how are you samim?
                                                <span class="msg_time">8:40 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                Hi Khalid i am good tnx how about you?
                                                <span class="msg_time_send">8:55 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                I am good too, thank you for your chat template
                                                <span class="msg_time">9:00 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                You are welcome
                                                <span class="msg_time_send">9:05 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                I am looking for your next templates
                                                <span class="msg_time">9:07 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                Ok, thank you have a good day
                                                <span class="msg_time_send">9:10 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                Bye, see you
                                                <span class="msg_time">9:12 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                Hi, how are you samim?
                                                <span class="msg_time">8:40 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                Hi Khalid i am good tnx how about you?
                                                <span class="msg_time_send">8:55 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                I am good too, thank you for your chat template
                                                <span class="msg_time">9:00 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                You are welcome
                                                <span class="msg_time_send">9:05 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                I am looking for your next templates
                                                <span class="msg_time">9:07 AM, Today</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="msg_cotainer_send">
                                                Ok, thank you have a good day
                                                <span class="msg_time_send">9:10 AM, Today</span>
                                            </div>
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="img_cont_msg">
                                                <img src="public/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                            </div>
                                            <div class="msg_cotainer">
                                                Bye, see you
                                                <span class="msg_time">9:12 AM, Today</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer type_msg">
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Type your message..."></textarea>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?php
include "footerr.php";
?>