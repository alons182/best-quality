(function($){
	var menu = $('nav.menu'),
		btnMovil = $('#btn_nav'),
		btnLogin = $('.btn-login'),
		dropdown_toggle = $('.fabrikForm .dropdown-toggle');
		dropdown_menu = $('.fabrikForm .dropdown-menu'),
		fabrik_tooltip = $('.fabrikTip'),
		link_certificate = $('.link-certificate a'),
		link_curriculum = $('.link-curriculum a');

		link_certificate.attr('target','_blank').text('Ver certificado');
		link_curriculum.attr('target','_blank').text('Ver Curriculum');

	menu.find(".parent").hoverIntent({
	    over: function() {
			      $(this).find(">.nav-child").slideDown(200 );
			    },
	    out:  function() {
			      $(this).find(">.nav-child").slideUp(200);
			    },
	    timeout: 200

	   	});
	
	// NAV MOBILE
    btnMovil.click(function(){
        menu.toggle();
       
    });

   dropdown_toggle.click(function(){
        dropdown_menu.toggle();
       
    });
  
  fabrik_tooltip.on('click', function  (e) {
   		$.colorbox({html:$(this).attr('title')});
  });

   // Using a selector:
$(".food-safety").colorbox({
	inline:true,
	href:".info-foodSafety",
	width: "900px",
	onOpen:function(){ 
		$('.info-foodSafety').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.info-foodSafety').addClass('hidden');	
		 }
});
$(".ccr").colorbox({
	inline:true,
	href:".info-ccr",
	width: "900px",
	onOpen:function(){ 
		$('.info-ccr').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.info-ccr').addClass('hidden');	
		 }
});
$(".csr").colorbox({
	inline:true,
	href:".info-csr",
	width: "900px",
	onOpen:function(){ 
		$('.info-csr').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.info-csr').addClass('hidden');	
		 }
});
$(".productos").colorbox({
	inline:true,
	href:".info-productos",
	width: "900px",
	onOpen:function(){ 
		$('.info-productos').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.info-productos').addClass('hidden');	
		 }
});
$(".bpm").colorbox({
	inline:true,
	href:".info-bpm",
	width: "900px",
	onOpen:function(){ 
		$('.info-bpm').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.info-bpm').addClass('hidden');	
		 }
});

$('.link-certificate .download-archive.fabrik-filetype-jpg').colorbox();
$('.link-certificate .download-archive.fabrik-filetype-png').colorbox();
$('.link-certificate .download-archive.fabrik-filetype-gif').colorbox();

$('.link-curriculum .download-archive.fabrik-filetype-jpg').colorbox();
$('.link-curriculum .download-archive.fabrik-filetype-png').colorbox();
$('.link-curriculum .download-archive.fabrik-filetype-gif').colorbox();
/*
// Using a jQuery object:
var $form = $("#myForm");
$("#inline").colorbox({inline:true, href:$form});
*/

})(jQuery);

