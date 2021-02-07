
jQuery(finction($){
	$('.label > span > a').click(function(){
		var $this = $(this),
			$pop = $this.next('.popup'),
	    	$close = $pop.children('.close');

		$this.parent().siblings().children('.popup').hide()
	
		$pop.show;
	
		$close.click(function(){
	
		$pop.hide();


		});
		return false;
	});
});