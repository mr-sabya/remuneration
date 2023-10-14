@extends('layouts.app')

@section('content')

<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Profile</h2>
            </div>
        </div>
        </div>
        <!-- row -->
        <div class="row column1">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                    <h2>User profile</h2>
                    </div>
                </div>
                <div class="full price_table padding_infor_info">
                    <div class="row">
                    <!-- user profile section --> 
                    <!-- profile image -->
                    <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                            <div class="profile_img"><img width="180" class="rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="profile_contant">
                                <div class="contact_inner">
                                <h3>John Smith</h3>
                                <p><strong>Associate Professor</strong></p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-envelope-o mb-2"></i> : test@gmail.com</li>
                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- profile contant section -->
                        <div class="full inner_elements margin_top_30">
                            <div class="tab_style2">
                                <div class="tabbar">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Recent Activity</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Projects Worked on</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Profile</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="msg_list_main">
                                            <ul class="msg_list">
                                            <li>
                                                <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#"></span>
                                                <span>
                                                <span class="name_user">Taison Jack</span>
                                                <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#"></span>
                                                <span>
                                                <span class="name_user">Mike John</span>
                                                <span class="msg_user">On the other hand, we denounce.</span>
                                                <span class="time_ago">12 min ago</span>
                                                </span>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
                                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                            qui ratione voluptatem sequi nesciunt.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
                                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                                            qui ratione voluptatem sequi nesciunt.
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- end user profile section -->
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- end row -->
        </div>
        <!-- footer -->
        <div class="container-fluid">
        <div class="footer">
            <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
            </p>
        </div>
        </div>
    </div>
    <!-- end dashboard inner -->
</div>


@endsection