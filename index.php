<?php
/**
 * 默认皮肤，但魔改
 *
 * - Edited by <a href="https://inuebisu.cn">inuEbisu</a>
 * 
 * @package Typecho Replica Theme Modified
 * @author Typecho Team
 * @version 1.2.1
 * @link https://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(''); ?></time></li>
				<li><?php $this->category(','); ?></li>
				<li><?php $this->tags(', ', true, 'none'); ?></li>
			</ul>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
