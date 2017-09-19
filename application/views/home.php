
<section id="featured">
<!-- start slider -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
<!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
        	<?php foreach($slides as $value): ?>
		        <li>
		            <img src="<?=base_url()?>img/slides/<?=$value["img"]?>" alt="" />
			            <div class="flex-caption">
			                <h3><?=$value["title"]?></h3> 
							<p><?=$value["text"]?></p> 
							<a href="#" class="btn btn-theme">მეტი</a>
			            </div>
		        </li>
          	<?php endforeach ?>
        </ul>
    </div>
<!-- end slider -->
		</div>
	</div>
</div>	



</section>
<section class="callaction">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="big-cta">
				<div class="cta-text">
					<h2><span>Moderna</span> HTML Business Template</h2>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section id="content">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<?php foreach($middleMenu as $value):?>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?=$value["title"]?></h4>
								<div class="icon">
								<i class="<?=$value["icon"]?>" style="font-size:48px;color: #1E90FF;"></i>
								</div>
								<p>
								 <?=$value["text"]?>
								</p>
									
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<!-- divider -->
	<div class="row">
		<div class="col-lg-12">
			<div class="solidline">
			</div>
		</div>
	</div>
	<!-- end divider -->
	<!-- Portfolio Projects -->
	<div class="row">
		<div class="col-lg-12">
			<h4 class="heading">Recent Works</h4>
			<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					
					<?php foreach($works as $value): ?>
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?=$value["title"]?>" href="<?=base_url()?>img/works/<?=$value["img"]?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?=base_url()?>img/works/<?=$value["img"]?>" alt="<?=$value["text"]?>">
						</div>
						</li>
					<?php endforeach ?>
				</ul>
				</section>
			</div>
		</div>
	</div>

</div>
</section>
