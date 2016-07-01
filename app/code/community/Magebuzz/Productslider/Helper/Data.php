<?php

class Magebuzz_Productslider_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_ACTIVE = 'productslider/slider_setting/active';
  const XML_PATH_INCLUDE_JS = 'productslider/slider_setting/include_js';
	const XML_PATH_SLIDER_TYPE						=  'productslider/slider_setting/type_slider';
	const XML_PATH_SLIDER_POSITION 					=  'productslider/slider_setting/slider_position';
	
	const XML_PATH_PRODUCT_TYPE 					=  'productslider/product_setting/type_product';
	const XML_PATH_PRODUCT_FILTERED_CATEGORY		=  'productslider/product_setting/category_filter';
	const XML_PATH_NUMBER_PRODUCT_SHOW 				=  'productslider/product_setting/num_products';
	const XML_PATH_SHOW_PRODUCT_DESCRIPTION 		=  'productslider/product_setting/show_description';
	const XML_PATH_TITLE_PRODUCT_SLIDER 			=  'productslider/product_setting/title_of_slider';
	
	
	public function isActive() {
    $storeId = Mage::app()->getStore()->getId();
    return (int)Mage::getStoreConfig(self::XML_PATH_ACTIVE, $storeId);
  }

  public function includeJs() {
    $storeId = Mage::app()->getStore()->getId();
    return (int)Mage::getStoreConfig(self::XML_PATH_INCLUDE_JS, $storeId);
  }
	
	public function getImageSliderWidth(){
		$storeId = Mage::app()->getStore()->getId();
		return (int)Mage::getStoreConfig(self::XML_PATH_IMAGE_SLIDER_WIDTH, $storeId);
	}
	
  public function isShowProductSlider($position){
    $arraySliderPosittion = explode(',',Mage::getStoreConfig(self::XML_PATH_SLIDER_POSITION));
    if(in_array($position,$arraySliderPosittion)) {
      return true;
    }
		return false;
	}
	public function getImageSliderHeight(){
		$storeId = Mage::app()->getStore()->getId();
		return (int)Mage::getStoreConfig(self::XML_PATH_IMAGE_SLIDER_HEIGHT, $storeId);
	}
	
	public function getSliderType (){
		$storeId = Mage::app()->getStore()->getId();
		return Mage::getStoreConfig(self::XML_PATH_SLIDER_TYPE, $storeId);
	}
	
	public function getSliderPosition(){
		return Mage::getStoreConfig(self::XML_PATH_SLIDER_POSITION);
	}
	
	public function getProductTypeConfig(){
		return Mage::getStoreConfig(self::XML_PATH_PRODUCT_TYPE);
	}
	
	public function isFilteredProductCategory (){
		return Mage::getStoreConfig(self::XML_PATH_PRODUCT_FILTERED_CATEGORY);
	}
	
	public function getProductPerRow (){
		return (int)Mage::getStoreConfig(self::XML_PATH_NUMBER_PRODUCT_SHOW);
	}
	
	public function isShowProductDescription(){
		return Mage::getStoreConfig(self::XML_PATH_SHOW_PRODUCT_DESCRIPTION);
	}
	
	public function getTitleProductSlider(){
		return Mage::getStoreConfig(self::XML_PATH_TITLE_PRODUCT_SLIDER);
	}
  public function getConfigTextLabel(){
		$dataConfig =  Mage::getStoreConfig('productslider/product_setting/type_product');
    $arrayOption = Mage::getModel('productslider/system_config_type')->toOptionArray();
    foreach($arrayOption as $key=>$value){
      if($value['value']==$dataConfig){
        return $value['label'];
      }
    }
    return '';
	}
}