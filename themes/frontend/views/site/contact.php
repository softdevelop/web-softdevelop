<!--script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;callback=google.loader.callbacks.maps"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/intl/vi_vn/mapfiles/api-3/14/16/%7Bcommon,map%7D.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/intl/vi_vn/mapfiles/api-3/14/16/%7Butil,onion%7D.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/intl/vi_vn/mapfiles/api-3/14/16/%7Bstats,controls%7D.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/intl/vi_vn/mapfiles/api-3/14/16/%7Boverlay,marker%7D.js"></script-->
<div id="preface">
				<div class="container">
                    <h2 style="color:green;">
                        <?php if(Yii::app()->user->hasFlash('successcontact')):?>
								<?php echo Yii::app()->user->getFlash('successcontact'); ?>
						<?php endif; ?>
                    </h2>
                </div>
                <div class="container">
                    <h2>
                        Contact
                    </h2>
                    <p>
                        We'd love to hear from you, get in touch with us
                    </p>
                </div>
            </div>

            <!-- MAP -->

            <div class="ui_map ui_preloader" data-ui_map_latitude="48.210604" data-ui_map_longtitude="16.368188" data-ui_map_zoom="16"></div>

            <!-- CONTACT -->

            <div id="contact">
                <div class="container grid">
                    <div class="row">
                        <div class="col-5-12">

                            <!-- ADDRESS -->

                            <h5>
                                ADDRESS
                            </h5>
                            <p>
                                161 Le Van si<br />
                                Da Nang<br />
                                Viet Nam
                            </p>

                            <!-- CONTACTS -->

                            <h5>
                                CONTACT
                            </h5>
                            <a
                                href="mailto:example@example.com"
                                class="ui_button"
                            >
                                DROP US A MAIL
                            </a>
                            <table>
                                <tr>
                                    <td>
                                        Tel:
                                    </td>
                                    <td>
                                        <a href="tel:1-408-555-5555">
                                            01685 996 211
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Fax:
                                    </td>
                                    <td>
                                        0680 710 13 99
                                    </td>
                                </tr>
                            </table>

                            <!-- SOCIAL NETWORKS -->

                            <h5>
                                CONNECT
                            </h5>
                            <ul class="social">
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
                                        class="icon-google-plus-sign"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="icon-pinterest-sign"
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

                        <!-- MESSAGE FORM -->

                        <div class="col-7-12">
                            <h5>
                                MESSAGE FORM
                            </h5>
                            <p>
                                You can also send us a quick message<br />
                                by filling out this form
                            </p>
                            <!--form
                                action=""
                                method="post"
                            >
                                <input
                                    name="name"
                                    type="text"
                                    data-require="any"
                                    data-placeholder="Your name"
                                />
                                <input
                                    name="email"
                                    type="text"
                                    data-require="email"
                                    data-placeholder="E-mail"
                                />
                                <textarea
                                    name="message"
                                    data-require="any"
                                    data-placeholder="Message"
                                ></textarea>
                                <input
                                    type="submit"
                                    value="SEND"
                                />
                            </form-->
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'contact-form',
								'enableAjaxValidation'=>false,
							)); ?>

								<?php //echo $form->errorSummary($model); ?>

									<?php //echo $form->labelEx($model,'name'); ?>
									<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128, 'data-placeholder'=>'Name')); ?>
									<?php echo $form->error($model,'name'); ?>
									
									<?php //echo $form->labelEx($model,'email'); ?>
									<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128, 'data-placeholder'=>'Email')); ?>
									<?php echo $form->error($model,'email'); ?>
									
									<?php //echo $form->labelEx($model,'title'); ?>
									<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128, 'data-placeholder'=>'Title')); ?>
									<?php echo $form->error($model,'title'); ?>

									<?php //echo $form->labelEx($model,'content'); ?>
									<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'data-placeholder'=>'Message')); ?>
									<?php echo $form->error($model,'content'); ?>
								


								<div class="row buttons">
									<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
								</div>

							<?php $this->endWidget(); ?>
                        </div>
                    </div>
                </div>
            </div>
			<!--script src="https://maps.gstatic.com/intl/vi_vn/mapfiles/api-3/14/16/main.js"></script-->