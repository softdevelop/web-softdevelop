<div id="preface">
                <div class="container">
                    <h2>
                        About us
                    </h2>
                    <p>
                        Who we are, what we do and how we do it
                    </p>
                </div>
            </div>

            <!-- ABOUT -->

            <div
                id="about"
                class="highlight"
            >
                <div class="container">
                    <h2>
                        Passepartout went timidly ashore on this so
                    </h2>
                    <p>
                        Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.  He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.  He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets
                    </p>
                </div>
            </div>

            <!-- HISTORY -->

            <!--div id="history">
                <div class="container grid">
                    <div class="row">
                        <div class="col-2-12">
                            <h5 class="aside">
                                HISTORY
                            </h5>
                        </div>
                        <div class="col-1-12 gap"></div>
                        <div class="col-9-12">
                            <h1>
                                It is situated in the bay of Yeddo,<br />
                                and at but a short distance from
                            </h1>
                            <p>
                                Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.  He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.  He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses, all the space between the "promontory of the Treaty" and the river.
                            </p>
                            <p>
                                Here, as at Hong Kong and Calcutta, were mixed crowds of all races, Americans and English, Chinamen and Dutchmen, mostly merchants ready to buy or sell anything. The Frenchman felt himself as much alone among them as if he had dropped down in the midst of Hottentots. He had, at least, one resource to call on the French and English consuls at Yokohama for assistance.
                            </p>
                        </div>
                    </div>
                </div>
            </div-->

            <!-- TEAM -->

            <div id="team">
                <div class="container grid">
                    <div class="row">
                        <div class="col-2-12">
                            <h5 class="aside">
                                TEAM
                            </h5>
                        </div>
                        <div class="col-1-12 gap"></div>

                        <!-- MEMBERS -->

                        <div class="col-9-12 grid">
                            <ul class="row items fade">

                                <!-- MEMBER -->
								<?php foreach ($team as $key=>$value) :?>
									<li class="col-1-3">
										<a href="photos/about/team/01.jpg" rel="team" class="ui_lightbox">
											<span class="image">
												<img src="<?php echo Yii::app()->request->baseUrl.WWWROOT_TEAM.$value->image;?>" alt=""/>
											</span>
											<span class="description">
												<h4><?php echo $value->name;?></h4>
												<p><?php echo $value->position;?></p>
											</span>
										</a>
									</li>
								<?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OFFICE -->

            <div class="banner ui_preloader">
                <div
                    class="background"
                    style="background-image: url(<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/office.jpg);"
                ></div>
            </div>

            <!-- CLIENTS -->

            <div id="clients">
                <div class="container grid">
                    <div class="row">
                        <div class="col-2-12">
                            <h5 class="aside">
                                CLIENTS
                            </h5>
                        </div>
                        <div class="col-10-12 gap"></div>
                        <div class="col-1-1 list">
                            <ul class="float scale">

                                <!-- CLIENT -->

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/bravel_normal.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="normal"
                                        />
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/bravel_hover.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="hover"
                                        />
                                    </a>
                                </li>

                                <!-- CLIENT -->

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/hitekt_normal.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="normal"
                                        />
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/hitekt_hover.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="hover"
                                        />
                                    </a>
                                </li>

                                <!-- CLIENT -->

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/impulst_normal.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="normal"
                                        />
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/impulst_hover.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="hover"
                                        />
                                    </a>
                                </li>

                                <!-- CLIENT -->

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/locity_normal.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="normal"
                                        />
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/locity_hover.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="hover"
                                        />
                                    </a>
                                </li>

                                <!-- CLIENT -->

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/ofico_normal.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="normal"
                                        />
                                        <img
                                            src="<?php echo Yii::app()->request->baseUrl.WWWROOT_FRONTEND;?>/photos/about/clients/ofico_hover.jpg"
                                            alt=""
                                            width="143"
                                            height="98"
                                            class="hover"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- QUOTATION REQUEST -->

            <div
                id="request"
                class="highlight"
            >
                <div class="container">
                    <a
                        href="#"
                        class="ui_button"
                        data-ui_button_type="inverse"
                    >
                        REQUEST A QUOTE
                    </a>
                </div>
            </div>