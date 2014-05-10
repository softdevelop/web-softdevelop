<?php
/**
 * User: modifiy form Mr Thien

 * Time: 9:50 AM
 */

class ProductHelper {

    /**
     * return size of a product
     * @param $product
     */
    public function size($product) {
        $result = array();

        $tmp_sizes = explode(';',$product->size);
        foreach($tmp_sizes as $size) {
            $size = trim($size);

            if (empty($size))
                continue;
            if (array_key_exists($size,$result)) {
                $result[$size] += 1;
            } else {
                $result[$size] = 1;
            }
        }

        ksort($result);
        return $result;

    }
    /**
     * get all size exist of $products
     * @param $products
     * @return array
     */
    public function sizes($products,$size_selected) {
        $result = array();
        foreach($products as $product) {
            $tmp_sizes = explode(';',$product->size);
            foreach($tmp_sizes as $size) {
                $size = trim($size);

                if (empty($size) || $size == $size_selected )
                    continue;
                if (array_key_exists($size,$result)) {
                    $result[$size] += 1;
                } else {
                    $result[$size] = 1;
                }
            }
        }
        ksort($result);
        return $result;
    }

    /**
     * get color of a product
     * @param $product
     */
    public function color($product)
    {
        $result = array();
        $tmp_colors = $product->images;
        foreach($tmp_colors as $color) {
            $name = trim($color->name);

            if (empty($name))
                continue;

            if (array_key_exists($name,$result)) {
                $result[$name] += 1;
            } else {
                $result[$name] = 1;
            }
        }

        ksort($result);
        return $result;
    }

    /**
     * get all color of exist $products
     * @param $products
     * @return array
     */
    public function colors($products, $color_selected) {
        $result = array();
        foreach($products as $product) {
            $tmp_colors = $product->images;
            foreach($tmp_colors as $color) {
                $name = trim($color->name);

                if (empty($name) || $name == $color_selected )
                    continue;

                if (array_key_exists($name,$result)) {
                    $result[$name] += 1;
                } else {
                    $result[$name] = 1;
                }
            }
        }
        ksort($result);
        return $result;
    }

    /**
     * get recommended products
     * is_special
     * no_visiter
     * defautl load $quantity products
     * @param int $quantity
     * @param int priority
     * 0 = is_special DESC, no_visiter DESC
     * 1 = no_visiter DESC, is_special DESC
     */
    public function recommended($quantity = 6, $priority = 1) {
        $criteria = new CDbCriteria();
        $criteria->alias = 'product';
        //$criteria->with = array('categories','company');
        $criteria->with = array('categories_published','company');
        /*
        $criteria->with = array('categories'=>array(
            'scopes'=>array(
                'status'=> 0,
            )
        ),'company');
        */
        $criteria->together = true;

        $criteria->limit = $quantity;
        $criteria->order = $priority ? 'product.is_special DESC, product.no_visiter DESC' : 'product.no_visiter DESC, product.is_special DESC';
        //$criteria->addCondition('categories.status='.ProductCategory::STATUS_PUBLISHED);
        $criteria->group='product.id';
        $criteria->distinct = true;

        $recommended = Products::model()->findAll($criteria);

        return $recommended;
    }

    /**
     * render field image of product table
     * @param $product
     * @param array $htmlOptions
     */
    public function renderImage($product, $htmlOptions = array('width'=>'197','height'=>'197')) {
        $url = Yii::app()->getModule('products')->image["url"];
        $src = !empty($product->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $product->image) ?
            $url . $product->image :
            ($url .'no-image.png');
        echo CHtml::image($src, $product->name, $htmlOptions);
    }

    /**
     * get src filed image of product
     * @param $product
     * @return string
     */
    public function srcImage($product) {
        $url = Yii::app()->getModule('galleries')->_image["url"];
        $src = !empty($product->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $product->image) ?
            $url . $product->image :
            ($url .'no-image.png');
        return $src;
    }

    /**
     * get src filed thumbnail image of product
     * @param $product
     * @param $width
     * @param $height
     * @return string
     */
    public function srcImageThumb($product, $width, $height) {
        $url = Yii::app()->getModule('services')->image["url"];
        $src = !empty($product->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $product->image) ?
            $url . $product->image :
            ($url .'no-image.png');
		Yii::app()->easyImage->thumbOf($src,array(
			'resize' => array('width' => $width, 'height' => $height),
		));
        return $src;
    }
    /**
     * get src image of a color
     * @param $color
     * @return string
     */
    public function srcImageColor($color) {
        $url = Yii::app()->getModule('products')->color_images["url"];
        $src = !empty($color->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $color->image) ?
            $url . $color->image :
            ($url .'no-image.png');
        return $src;
    }

    public function srcImageColorThumb($color) {
        $url = Yii::app()->getModule('products')->color_images["url"] . 'thumbs/';
        $src = !empty($color->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $color->image) ?
            $url . $color->image :
            ($url .'no-image.png');
        return $src;
    }
    /**
     * get src filed thumbnail image of product
     * @param $product
     * @param $width
     * @param $height
     * @return string
     */
    public function srcImageColorAutoThumb($color, $width, $height) {
        $url = Yii::app()->getModule('services')->image["url"];
        $src = !empty($color->image) && file_exists(YiiBase::getPathOfAlias('webroot'). $url . $color->image) ?
            $url . $color->image :
            ($url .'no-image.png');
			
		Yii::app()->easyImage->thumbSrcOf($src,array(
			//'resize' => array('width' => $width, 'height' => $height),
			'crop' => array('width' => $width, 'height' => $height,
		)));
        return $src;
    }
    /**
     * return link to detail a product
     * @param $product
     * @return mixed
     */
    public function url($product) {
        return Yii::app()->createUrl('/product/'.$product->alias);
    }
}