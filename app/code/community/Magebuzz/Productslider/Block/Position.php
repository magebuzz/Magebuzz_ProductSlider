<?php
class Magebuzz_Productslider_Block_Position extends Magebuzz_Productslider_Block_Productslider
{
	public function _prepareLayout() {
		$is_homepage = false;
		$slider_position = Mage::getStoreConfig('productslider/slider_setting/slider_position');
		$current_category = Mage::registry('current_category');
		$in_category = $this->inCategoryPage();
		
		if($this->getUrl('') == $this->getUrl('*/*/*', array('_use_rewrite'=>true))) {
			$is_homepage = true;
		}
		
		parent::_prepareLayout();
		
		if (!$this->getTemplate() && Mage::helper('productslider')->isShowProductSlider('home') && $is_homepage == true) {
      $this->setTemplate('productslider/productslider.phtml');
    }		
		
		if (!$this->getTemplate() && Mage::helper('productslider')->isShowProductSlider('category_page') && $in_category == 'catalog_category_view') {
      $this->setTemplate('productslider/productslider.phtml');
    }
    return $this;
  }
}