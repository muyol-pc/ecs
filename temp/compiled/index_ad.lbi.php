<div class="hl-column hl-slider-con">
  <div class="hl-slider-banner">
    <ul class="hl-items">
      <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_01169400_1482128683');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_01169400_1482128683']):
        $this->_foreach['myflash']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['flash_0_01169400_1482128683']['url']; ?>"><img src="<?php echo $this->_var['flash_0_01169400_1482128683']['src']; ?>" alt="" target="_blank"></a></li>
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
