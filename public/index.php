<?php

use inc\Media;

require_once 'inc/header.php';
$files = Media::getMedia();
?>
<div class="container-fluid">
	<div class="row align-content-center justify-content-center">
		<div class="col-sm-12 col-lg-4 align-self-center d-inline-block align-middle">
			<h5 class="mt-5">Schlachtview - Schocktherapie (Berlin 1997)</h5>
			<table class="media">
				<?php foreach ($files as $file): ?>
					<tr>
						<td><?php echo $file['name']; ?></td>
						<td>
							<audio controls preload="none" style="width:280px;">
								<source src="<?php echo $file['path']; ?>" type="audio/mp4" />
								<p>Your browser does not support HTML5 audio.</p>
							</audio>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
<?php require_once 'inc/footer.php' ?>
