<div class='login-info'>

	<div class='nickname'><span class='nick'><b><?=my('nick')?></span> is logged in</b></div>	
	<div class='login-menus'>
		<div class='upper_left'>			
			<a href='<?=url_bbs()?>/member_confirm.php?url=register_form.php'>내 프로필</a>
		</div>
		<div class='upper_right'>
		<?if ( admin() ){?>
			<span class='admin_link'><a href="<?=x::url_admin()?>">X ADMIN</a><span class='divider'></span><a href="<?php echo G5_ADMIN_URL ?>">ADMIN</a></span>			
		<?
		}
			else {
		?>
			<span class='user-scrap'><a href="<?=url_bbs()?>/scrap.php" target="_blank" class='user-scrap'>스크랩</a></span>
		<? } ?>
		</div>
		<div style='clear:both'></div>
		<div class='user_message'>
			<img src='<?=$widget_config['url']?>/message_icon.png'/>
			<a href="<?=url_bbs()?>/memo.php" target="_blank" class='user_memo'>쪽지 <span class='memo-not-read'>[<?=g::memo_new()?>] </span></a>			
		</div>
		<div class='site_management'>
			<a href='<?=g::url()?>/?module=site&action=config_first_page'>사이트 관리</a>
		</div>
		<div style='clear:both'></div>
		<div class='border_bottom'></div>
	</div>
	<div class='logout'><div class='inner'><a href="<?=g::url()?>/bbs/logout.php">로그아웃</a></div></div>
</div>