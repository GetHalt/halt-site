<?php
/**
 * Site's front page.
 *
 * @package halt-site
 */

get_header(); ?>

	<section class="feature feature--main">
		<div class="inside">
			<h2 class="feature__title">A Great theme to start with.</h2>
			<p class="feature__description">What else could be better than a minimalist, no-frills, starter theme to kick-start your support portal? Halt comes with a full support for the <strong>Origin</strong> theme so that you can start in no time.</p>

			<div class="feature__playground">
				<div class="feature__playground--header">
					<div class="inside">
						<h3>Halt</h3>
						<div class="navigation">
							<ul>
								<li>Home</li>
								<li>Tickets</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="inside search-section">
					<h2>Help &amp; Support</h2>
					<p>Need some help? Quickly search our knowledgebase articles.</p>

					<input type="search" placeholder="Type a keyword to search…" disabled>
				</div>
			</div>
		</div>
	</section>

	<section class="feature feature--basic">
		<div class="inside">
			<figure class="feature__image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-1.jpg" alt="" width="180">
			</figure>
			<div class="feature__content">
				<h2 class="feature__title">Less is More</h2>
				<div class="feature__description">
					<p>Nothing fancy, still handy. With Halt, you can maintain a full-fledged knowledgebase of support articles, so your users don&rsquo;t have to ask the same questions over and over again.</p>
					<p>If they can't find what they're looking for: <em>tickets</em> to the rescue. Users submit tickets only when they can&rsquo;t find answers to their questions, minimising the amount of time you and your customer service team spend answering questions.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="feature feature--subscribe">
		<div class="inside">
			<div class="feature__content">
				<div class="feature__content--inside">
					<p>Halt is currently in active development and will be revealed to the world soon.</p>

					<div id="mc_embed_signup">
					<form action="http://halt.us3.list-manage.com/subscribe/post?u=70fb5b0173128bb8fd9c07bc7&amp;id=b3ca3462d4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">
					</div>
					<div class="mc-field-group">
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
					</div>
					<div class="mc-field-group">
						<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_70fb5b0173128bb8fd9c07bc7_b3ca3462d4" value=""></div>
						<div class="clear"><input type="submit" class="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
					</div>
					<script type="text/javascript">
					var $ = jQuery;
					var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
					try {
					    var jqueryLoaded=jQuery;
					    jqueryLoaded=true;
					} catch(err) {
					    var jqueryLoaded=false;
					}
					var head= document.getElementsByTagName('head')[0];
					if (!jqueryLoaded) {
					    var script = document.createElement('script');
					    script.type = 'text/javascript';
					    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
					    head.appendChild(script);
					    if (script.readyState && script.onload!==null){
					        script.onreadystatechange= function () {
					              if (this.readyState == 'complete') mce_preload_check();
					        }
					    }
					}

					var err_style = '';
					try{
					    err_style = mc_custom_error_style;
					} catch(e){
					    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
					}
					var head= document.getElementsByTagName('head')[0];
					var style= document.createElement('style');
					style.type= 'text/css';
					if (style.styleSheet) {
					  style.styleSheet.cssText = err_style;
					} else {
					  style.appendChild(document.createTextNode(err_style));
					}
					head.appendChild(style);
					setTimeout('mce_preload_check();', 250);

					var mce_preload_checks = 0;
					function mce_preload_check(){
					    if (mce_preload_checks>40) return;
					    mce_preload_checks++;
					    try {
					        var jqueryLoaded=jQuery;
					    } catch(err) {
					        setTimeout('mce_preload_check();', 250);
					        return;
					    }
					    var script = document.createElement('script');
					    script.type = 'text/javascript';
					    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
					    head.appendChild(script);
					    try {
					        var validatorLoaded=jQuery("#fake-form").validate({});
					    } catch(err) {
					        setTimeout('mce_preload_check();', 250);
					        return;
					    }
					    mce_init_form();
					}
					function mce_init_form(){
					    jQuery(document).ready( function($) {
					      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
					      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
					      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
					      options = { url: 'http://halt.us3.list-manage.com/subscribe/post-json?u=70fb5b0173128bb8fd9c07bc7&id=b3ca3462d4&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
					                    beforeSubmit: function(){
					                        $('#mce_tmp_error_msg').remove();
					                        $('.datefield','#mc_embed_signup').each(
					                            function(){
					                                var txt = 'filled';
					                                var fields = new Array();
					                                var i = 0;
					                                $(':text', this).each(
					                                    function(){
					                                        fields[i] = this;
					                                        i++;
					                                    });
					                                $(':hidden', this).each(
					                                    function(){
					                                        var bday = false;
					                                        if (fields.length == 2){
					                                            bday = true;
					                                            fields[2] = {'value':1970};//trick birthdays into having years
					                                        }
					                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
					                                    		this.value = '';
														    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
					                                    		this.value = '';
														    } else {
														        if (/\[day\]/.test(fields[0].name)){
					    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;
														        } else {
					    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
						                                        }
						                                    }
					                                    });
					                            });
					                        $('.phonefield-us','#mc_embed_signup').each(
					                            function(){
					                                var fields = new Array();
					                                var i = 0;
					                                $(':text', this).each(
					                                    function(){
					                                        fields[i] = this;
					                                        i++;
					                                    });
					                                $(':hidden', this).each(
					                                    function(){
					                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
					                                    		this.value = '';
														    } else {
														        this.value = 'filled';
						                                    }
					                                    });
					                            });
					                        return mce_validator.form();
					                    },
					                    success: mce_success_cb
					                };
					      $('#mc-embedded-subscribe-form').ajaxForm(options);


					    });
					}
					function mce_success_cb(resp){
					    $('#mce-success-response').hide();
					    $('#mce-error-response').hide();
					    if (resp.result=="success"){
					        $('#mce-'+resp.result+'-response').show();
					        $('#mce-'+resp.result+'-response').html(resp.msg);
					        $('#mc-embedded-subscribe-form').each(function(){
					            this.reset();
					    	});
					    } else {
					        var index = -1;
					        var msg;
					        try {
					            var parts = resp.msg.split(' - ',2);
					            if (parts[1]==undefined){
					                msg = resp.msg;
					            } else {
					                i = parseInt(parts[0]);
					                if (i.toString() == parts[0]){
					                    index = parts[0];
					                    msg = parts[1];
					                } else {
					                    index = -1;
					                    msg = resp.msg;
					                }
					            }
					        } catch(e){
					            index = -1;
					            msg = resp.msg;
					        }
					        try{
					            if (index== -1){
					                $('#mce-'+resp.result+'-response').show();
					                $('#mce-'+resp.result+'-response').html(msg);
					            } else {
					                err_id = 'mce_tmp_error_msg';
					                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';

					                var input_id = '#mc_embed_signup';
					                var f = $(input_id);
					                if (ftypes[index]=='address'){
					                    input_id = '#mce-'+fnames[index]+'-addr1';
					                    f = $(input_id).parent().parent().get(0);
					                } else if (ftypes[index]=='date'){
					                    input_id = '#mce-'+fnames[index]+'-month';
					                    f = $(input_id).parent().parent().get(0);
					                } else {
					                    input_id = '#mce-'+fnames[index];
					                    f = $().parent(input_id).get(0);
					                }
					                if (f){
					                    $(f).append(html);
					                    $(input_id).focus();
					                } else {
					                    $('#mce-'+resp.result+'-response').show();
					                    $('#mce-'+resp.result+'-response').html(msg);
					                }
					            }
					        } catch(e){
					            $('#mce-'+resp.result+'-response').show();
					            $('#mce-'+resp.result+'-response').html(msg);
					        }
					    }
					}

					</script>
					<!--End mc_embed_signup-->

					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="177px" height="182px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<g>
						<path d="M49.301,89.18c-1.44-0.015-2.882-0.109-4.31-0.285C24.097,86.354,8.963,67.73,10.177,46.708
							c0.163-2.835,0.318-6.99-3.695-7.479c-4.017-0.487-5.115,3.057-5.339,6.054c-1.98,26.219,16.767,49.615,42.762,52.781
							c1.923,0.234,3.867,0.35,5.808,0.354c3.135,0,7.184-0.357,6.936-4.926C56.395,88.859,52.391,89.213,49.301,89.18z"/>
						<path d="M75.271,54.923c3.514,0,4.658-3.003,4.526-5.86c-0.76-16.392-14.11-29.452-30.461-29.452
							c-16.44,0-29.843,13.201-30.471,29.719c-0.1,2.645,0.786,5.593,4.38,5.593c3.51,0,4.577-3.086,4.745-5.777
							c0.708-11.329,9.997-20.298,21.346-20.298c11.504,0,20.89,9.217,21.368,20.763C70.818,52.33,72.09,54.923,75.271,54.923z"/>
						<path d="M91.633,25.704C78.326,2.33,49.016-5.84,25.835,7.2c-2.259,1.273-3.784,4.057-2.254,6.742
							c1.724,3.029,4.602,2.478,6.908,1.203c18.81-10.413,42.486-3.748,53.258,15.176c10.772,18.923,4.63,43.048-13.665,54.363
							c-2.246,1.391-4.156,3.644-2.432,6.674c1.535,2.699,4.68,2.733,6.9,1.379C97.268,78.893,104.936,49.072,91.633,25.704z"/>
						<ellipse cx="49.451" cy="50.402" rx="4.552" ry="4.616"/>
					</g>
					</svg>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
