function setImagesSlider($id, $width, $height)
{
	$('.'+$id).advancedSlider({width:$width, height:$height, skin: 'curved-rounded-2', fadeNavigationButtons: true, pauseSlideshowOnHover:true, slideProperties:{
		0:{effectType:'scale', horizontalSlices:'6', verticalSlices:'3', slicePattern:'spiralCenterToMarginCW', sliceDelay:'80',
		   captionSize:'35', captionHideEffect:'slide'},
		1:{effectType:'fade', horizontalSlices:'1', verticalSlices:'1', slicePattern:'leftToRight', captionPosition:'custom',
		   captionShowEffect:'fade', captionHeight:120, slideshowDelay:12000},
		2:{effectType:'slide', horizontalSlices:'10', verticalSlices:'1', slicePattern:'rightToLeft', sliceDuration:'700'},
		3:{effectType:'height', horizontalSlices:'10', verticalSlices:'1', slicePattern:'leftToRight', slicePoint:'centerBottom',
		   sliceDuration:'500', captionSize:'45'},
		4:{effectType:'scale', horizontalSlices:'10', verticalSlices:'5', sliceDuration:'800'},
		5:{effectType:'height', horizontalSlices:'1', verticalSlices:'15', slicePattern:'bottomToTop', slicePoint:'centerTop',
		   sliceDuration:'700', captionPosition:'left', captionSize:'150', captionHideEffect:'slide'},
		6:{effectType:'slide', horizontalSlices:'6', verticalSlices:'3', slicePattern:'topLeftToBottomRight', 
		   slideStartPosition:'rightBottom', slideStartRatio:'0.5', sliceDuration:'700'},
		7:{effectType:'fade', horizontalSlices:'10', verticalSlices:'5'},
		8:{effectType:'slide', horizontalSlices:'15', verticalSlices:'1', slideMask:'true', slicePattern:'rightToLeft', 
		   slideStartPosition:'verticalAlternative', sliceDuration:'800'},
		9:{effectType:'fade', horizontalSlices:'10', verticalSlices:'5'}
	}
	});
}