<div>
  <a href='<?php print url('printpdf/' . $node->nid, array('absolute' => TRUE)); ?>'>
  <img src="<?php print file_create_url(drupal_get_path('module', 'protected_downloads') . "/images/dl_pdf.png"); ?>"
       class="downloadsbutton">
  </a>
</div>