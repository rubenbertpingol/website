<?if(!$this->pageRequest){?>
<!DOCTYPE html>
<html>
<?}?>
		<!--/	Head	/-->
		<?if(!$this->pageRequest){?>
		<?$this->load->view("includes/header", $this->data_);?>
		<?}?>
		
		<!--/	Body	/-->
		<?if(!$this->pageRequest){?>
    <body>
		<?}?>
		
    <!--/
			Top Menu
			/-->
			<?if(!$this->pageRequest){?>
				<?
					if($isMenu)	{
						$this->myClass->loadMenu("top");
					}
				?>
			<?}?>
			<div class="clearfix"></div>
			
			<!--/
				Author name and description
				/-->
			<?if(!$this->pageRequest){?>
				<?
					if($isIncludeAuthor)	{
						$this->myClass->loadAuthor();
					}
				?>
			<?}?>
			
  		<div class="clearfix"></div>
			
			<!--/
				Featured items and photo slider
				/-->
			
			<?if(!$this->pageRequest){?>
				<?
					if($isIncludeFeatured)	{
						$this->myClass->loadFeatured("slider-contact");
					}
				?>
			<?}?>
			
			<?if(!$this->pageRequest){?>
  		<section class="content">
  			<div class="wrapper">
				<?}?>
					<!--/
						Main content - Left Pane
						/-->
					<?if(!$this->pageRequest){?>
					<div class="leftPane pull-left">
  					<div class="pane-box border-box pad">
  						<div class="content-box">
							<?}?>
								<!--/
									Index page content
									/-->
								
								<?if(isset($articles) && !empty($articles)){?>
									<?
										foreach($articles as $article):
											$this->load->view("articles/" . $article, $this->data_);
										endforeach;
									?>
								<?}?>
								
							<?if(!$this->pageRequest){?>
							</div>
  					</div>
  				</div>
					<?}?>
  				
					<!--/
						Main content - Right Pane
						/-->
						
					<?if(!$this->pageRequest){?>
  				<div class="rightPane">
					<?}?>
						<?
							if($isRight)	{
								if(isset($rightpanes) && !empty($rightpanes)){
									foreach($rightpanes as $rightpane){
										$this->load->view("aside-right/" . $rightpane, $this->data_);
									}
								}
							}
						?>
					<?if(!$this->pageRequest){?>
  				</div>
					<?}?>
					
  				<div class="clearfix"></div>
				
				<?if(!$this->pageRequest){?>
  			</div>
  		</section>
			<?}?>
			
			<!-- // End of content -->
			
  		<div class="clearfix"></div>
			
			<!--/
				Footer
				/-->
			<?if(!$this->pageRequest){?>
  		<footer>
  			<div class="wrapper">
				<?}?>
					<?
						if($isFoot)	{
							$this->myClass->loadFooter();
						}
					?>
				<?if(!$this->pageRequest){?>
  			</div>
  		</footer>
			<?}?>
			
			<?if(!$this->pageRequest){?>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-transition.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-alert.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-modal.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-dropdown.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-scrollspy.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-tab.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-tooltip.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-popover.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-button.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-collapse.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-carousel.js");?>"></script>
			<script src="<?echo base_url("assets/tbs-js/bootstrap-typeahead.js");?>"></script>
    </body>
</html>
<?}?>