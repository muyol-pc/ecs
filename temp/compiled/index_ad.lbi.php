<div class="hl-column hl-slider-con">
  <div class="hl-slider-banner">
    <ul class="hl-items">
      <?php $_from = $this->_var['index_ad_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top');$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from AS $this->_var['top']):
        $this->_foreach['ad']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['top']['url']; ?>" target="_blank"><img src="data/afficheimg/<?php echo $this->_var['top']['src']; ?>" style="display:block;width:100%;height:400px;" alt="" target="_blank"></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="hl-select  hl-f0 hl-tc"></div>
  </div>    
</div>

<script type="text/javascript">
    $(".hl-slider-con").slide({
      titCell: '.hl-select',
      mainCell:'.hl-slider-banner ul',
      autoPlay:true,
      autoPage: true,
      trigger:"click"
    });
    // slider('.hl-slider-con', '.hl-slider-banner ul', '.hl-select');
    /**
     * 幻灯片功能
     */
    function slider(element, img, select){
      $(element).slide({
        titCell: select,
        mainCell: img,
        autoPage: true,
        effect: "fade",
        autoPlay: true,
        trigger: "click"
      });
    };
</script>
