
<section id="inner-headline">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
				<li class="active">Contact</li>
			</ul>
		</div>
	</div>
</div>
</section>
<section id="content">
<!-- <div class="map">
	<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
</div> -->
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4>მოგვწერეთ:</h4>
            
            <div id="sendmessage">შეტყობინება წარმატებით გაიგზავნა!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <?php foreach($contact as $value): ?>
                    <div class="form-group">
                        <input type="<?=$value["type"]?>" name="<?=$value["name"]?>" class="<?=$value["class"]?>" id="<?=$value["_id"]?>" placeholder="<?=$value["placeholder"]?>" data-rule="<?=$value["data-rule"]?>" data-msg="<?=$value["data-msg"]?>" />
                        <div class="validation"></div>
                    </div>
                <?php endforeach ?>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="შეტყობინება"></textarea>
                    <div class="validation"></div>
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-theme">შეტყობინების გაგზავნა</button></div>
            </form>
		</div>
	</div>
</div>
</section>
