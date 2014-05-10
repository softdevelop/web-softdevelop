/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
$(function() {
    $('.wd-section-gallery ul li a').lightBox();
});
 */
$.fn.extend({
		jlb_checkbox_check_all: function(){
			$($(this)).click(function(){
				//var check = $(this).is(':checked');
				var check = $(this).attr('checked')?1:0;
				if( check ){
					$(".grid-view .items tbody").find(".select-on-check").attr("checked","checked");
				}
				else {
					$(".grid-view .items tbody").find(".select-on-check").removeAttr("checked");
				}
			});
			
			$('.grid-view .items tbody tr td .select-on-check').click(function(){
					var isSeletedAll = true;
					$('.grid-view .items tbody tr td .select-on-check').each(function(){
							if( $(this).is(':checked') == false)
							{
									isSeletedAll = false;
									return false;
							}
					});

					if(isSeletedAll) {
							$(".grid-view .items thead").find(".htk_checkbox_check_all").attr("checked","checked");
					} else {
							$(".grid-view .items thead").find(".htk_checkbox_check_all").removeAttr("checked");
					}
			});		
		/*
			if ($('tbody tr td .select-on-check').length)
				$('thead tr th').removeClass('jlb_checkbox_check_all_disable');
			else
				$('thead tr th').addClass('jlb_checkbox_check_all_disable');
		*/
		},

		//$.fn.jlb_checkbox_check_all_disable: function(options){
		jlb_checkbox_check_all_disable:function(){

			$($(this)).click(function(){

				return false;

			});

		},
});

$(document).ready(function() {
	$(".jlb_checkbox_check_all .htk_checkbox_check_all").jlb_checkbox_check_all();
	//$(".jlb_checkbox_check_all_disable .htk_checkbox_check_all").jlb_checkbox_check_all_disable();
	//$('.jform').jqTransform();
});