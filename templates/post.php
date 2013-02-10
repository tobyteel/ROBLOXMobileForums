			<? if($post->titleIsOriginal): ?>
			<li data-role='list-divider'><?= $post->title ?> <p class="ui-li-aside"><?= $post->date ?></li>
			<? else: ?>
			<li data-role='list-divider' data-theme="d">&nbsp;<p class="ui-li-aside"><?= $post->date ?></li>
			<? endif ?>
			<li data-theme='d'>
				<div data-content-theme="b" data-theme="c" data-role='collapsible' data-iconpos='right' data-mini='true'>
					<h5>
			<?php if($post->author->isMod): ?>
						<img src='includes/mod.gif' alt='MOD' />
			<?php endif ?>
						<img src='includes/<?php if($post->author->online): ?>online<?php else: ?>offline<?php endif ?>.png'>
						<?= $post->author->name ?>
					</h5>
					<p>
						<img src='<?= htmlentities($post->author->img) ?>' alt='<?= $post->author->name ?>' /><br>
						Joined <b><?= $post->author->joinDate ?></b><br>
						Total Posts <b><?= $post->author->postCount ?></b><br>
			<?php if($post->author->groupInfo): ?>
						Primary Group <a href="<?= htmlentities($post->author->groupInfo->group->url) ?>" target='_blank'><?= $post->author->groupInfo->group->name ?></a><br>
			<?php endif ?>
						<a href='<?= htmlentities($post->author->url) ?>' target='_blank'>View Profile &#187;</a>
					</p>
				</div>
				<br>
				<p style='word-break: break-all;'>
				<a href="#author-<?= $post->author->name ?>"><?= $post->author->name ?></a>
					<?= $post->content ?>
				</p>
			</li>