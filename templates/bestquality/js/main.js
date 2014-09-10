(function($){
	var menu = $('nav.menu'),
		btnMovil = $('#btn_nav'),
		btnLogin = $('.btn-login'),
		dropdown_toggle = $('.fabrikForm .dropdown-toggle');
		dropdown_menu = $('.fabrikForm .dropdown-menu'),
		fabrik_tooltip = $('.fabrikTip'),
		link_certificate = $('.link-certificate a'),
		link_curriculum = $('.link-curriculum a'),
		link_certificate_description = $('.link-certificate-description a');

		link_certificate.attr('target','_blank').text('Ver certificado');
		link_curriculum.attr('target','_blank').text('Ver Curriculum');
		link_certificate_description.attr('target','_blank').text('Ver descripción');

		lang = $('html').attr('lang');

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

$('.link-certificate .download-archive.fabrik-filetype-jpg').colorbox({
	maxWidth: '900px'
});
$('.link-certificate .download-archive.fabrik-filetype-png').colorbox({
	maxWidth: '900px'
});
$('.link-certificate .download-archive.fabrik-filetype-gif').colorbox({
	maxWidth: '900px'
});

$('.link-curriculum .download-archive.fabrik-filetype-jpg').colorbox({
	maxWidth: '900px'
});
$('.link-curriculum .download-archive.fabrik-filetype-png').colorbox({
	maxWidth: '900px'
});
$('.link-curriculum .download-archive.fabrik-filetype-gif').colorbox({
	maxWidth: '900px'
});

$('.link-certificate-description .download-archive.fabrik-filetype-jpg').colorbox({
	maxWidth: '900px'
});
$('.link-certificate-description .download-archive.fabrik-filetype-png').colorbox({
	maxWidth: '900px'
});
$('.link-certificate-description .download-archive.fabrik-filetype-gif').colorbox({
	maxWidth: '900px'
});

//var newcontendido = '<a href="#" class="ld">Link</a><div class="ldc hidden">'+contenido_certificacion +'</div>';
//$('.link-certificate-description').html(newcontendido);
//console.log(contenido_certificacion);
$(".ld").colorbox({
	inline:true,
	href:".ldc",
	width: "900px",
	maxHeight: "650px",
	onOpen:function(){ 
		$('.ldc').removeClass('hidden');	
		 },
	onClosed:function(){ 
		$('.ldc').addClass('hidden');	
		 }
});
/*
// Using a jQuery object:
var $form = $("#myForm");
$("#inline").colorbox({inline:true, href:$form});
*/

if (lang == "es-es") {
	 $("#calendar").ionCalendar({
	    lang: "es",
	    years: "80"
	    
	});
	
}else
{
	$("#calendar").ionCalendar({
	    lang: "en",
	    years: "80"
	    
	});
}

})(jQuery);


