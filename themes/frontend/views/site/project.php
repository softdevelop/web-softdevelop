<!-- PREFACE -->

            <div id="preface">
                <div class="container grid">
                    <div class="row">
                        <div class="col-2-3">
                            <h2>Detail</h2>
                            <p>Check out our most recent project we've completed</p>
                        </div>
                        <div class="col-1-3 navigation">
                            <a href="#" class="ui_button">
                                <i class="icon-angle-left"></i>
                                <span>PREVIOUS</span>
                            </a>
                            <a href="#" class="ui_button">
                                <span>NEXT</span>
                                <i class="icon-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER -->
            <div>
                <div class="container ui_slider" data-ui_slider_controls="false" data-ui_slider_pager="true">
                    <ul>
					<?php if(isset($project->images) && ($project->images !=null)):?>
						<?php foreach($project->images as $image):?>
							<li><img src="<?php echo Yii::app()->request->baseUrl.WWWROOT.$image->image;?>" alt=""/></li>
						<?php endforeach;?>
					<?php endif;?>
                    </ul>
                </div>
            </div>

            <!-- CONTENT -->

            <div id="detail">
                <div class="container grid">
                    <div class="row">
                        <!-- DESCRIPTION -->
                        <div class="col-11-16">
                            <?php echo $project->short_description;?>
                            <p><?php echo $project->description;?></p>
                        </div>
                        <div class="col-1-16 gap"></div>
                        <div id="sidebar" class="col-4-16">
                            <h5>ROLE</h5>
                            <p>Webdesign</p>
                            <h5>CLIENT</h5>
                            <p> <a href="#"> ThemeForest</a> </p>
                            <ul class="float links">
                                <li>
                                    <a  href="#" class="ui_button">
                                        <i class="icon-link"></i>
                                        <span> VISIT SITE</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- SOCIAL -->

                            <h5>
                                SHARE
                            </h5>
                            <ul class="float social">
                                <li>
                                    <a
                                        href="#"
                                        class="icon-twitter-sign"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="icon-facebook-sign"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="icon-github-sign"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="icon-linkedin-sign"
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RELATED PROJECTS -->

            <!--div id="related">
                <div class="container">
                    <h5>
                        RELATED PROJECTS
                    </h5>
                    <div class="grid">
                        <ul class="row items fade">
                            <li class="col-1-3">
                                <a href="detail.html">
                                    <span class="image">
                                        <img
                                            src="photos/works/04.jpg"
                                            alt=""
                                        />
                                    </span>
                                    <span class="description">
                                        <h4>
                                            It is situated in the bay
                                        </h4>
                                        <p>
                                            a short distance from that
                                        </p>
                                    </span>
                                </a>
                            </li>
                            <li class="col-1-3">
                                <a href="detail.html">
                                    <span class="image">
                                        <img
                                            src="photos/works/05.jpg"
                                            alt=""
                                        />
                                    </span>
                                    <span class="description">
                                        <h4>
                                            It is situated in the bay
                                        </h4>
                                        <p>
                                            a short distance from that
                                        </p>
                                    </span>
                                </a>
                            </li>
							<li class="col-1-3">
                                <a href="detail.html">
                                    <span class="image">
                                        <img
                                            src="photos/works/06.jpg"
                                            alt=""
                                        />
                                    </span>
                                    <span class="description">
                                        <h4>
                                            It is situated in the bay
                                        </h4>
                                        <p>
                                            a short distance from that
                                        </p>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div-->