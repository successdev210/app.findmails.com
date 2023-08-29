$(document).ready(function(){

	$('.new__bulk--verif--box .head__verif>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest(".float__box").fadeOut(300);
		if ($(window).width() <  1280) {
			$('.overlay__popup').fadeOut(300);
			$('body,html').css("overflow-y" ,"initial");
		}
	});


	$('.notification__button').on('click' ,function(e){
		e.preventDefault();
		$('.notification__dropdown').fadeIn(300);
	});
	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.notification__button').length && !$target.closest('.notification__dropdown').length) {
	  	$('.notification__dropdown').fadeOut(300);
	  }        
	});
	$('.profile__info__button').on('click' ,function(e){
		e.preventDefault();
		$('.profile__info__dropdown').fadeIn(300);
	});
	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.profile__info__button').length && !$target.closest('.profile__info__dropdown').length) {
	  	$('.profile__info__dropdown').fadeOut(300);
	  }        
	});


	$('.bulk__filter ul li a').on("click" ,function(e){
		e.preventDefault();
		if ($(this).hasClass("active")) {
			$(this).removeClass('active');
		} else {
			$(this).addClass("active");
		}
		$('.bulk__domain--file .table__wrapper tr').css("display" , "none");
		$('.bulk__domain--file .table__wrapper tr.main').css("display" ,"table-row");
		if ($('.bulk__filter .active').length != 0) {
			$('.bulk__filter .active').each(function(index,elem){
				$('.bulk__domain--file .bulk__table tr.' + $(elem).attr("data-filter")).css("display" ,'table-row');
			});
		} else {
			$('.bulk__domain--file .bulk__table tr').css("display" ,'table-row');
		}
		
	});



	$('.switcher__new--bulk li a').on('click' ,function(e){
		e.preventDefault();
		if (!$(this).closest("li").hasClass('active')) {
			$(this).closest('ul').find(".active").removeClass('active');
			$(this).closest('li').addClass('active');
			$('.method__new>div').css("display" ,"none");
			$('.method__new>div' + $(this).attr("data-bulk")).fadeIn(300);
		}
	});
	if ($(".my__list .list__wrapper").length) {
		if ($(window).width() > 1280) {
			$(".list__wrapper").css("height" , $(".upload__integration--import").height() - 267 + "px");
		}
		$(window).on('resize' ,function(){
			if ($(window).width() > 1280) {
				$(".list__wrapper").css("height" , $(".upload__integration--import").height() - 267 + "px");
			}
		});
	}
	$('.elem__integration .integration__status>.connected').on('click' ,function(e){
		e.preventDefault();
		$('.upload__integration--list').css("display" ,"none");
		$('.upload__integration--import').fadeIn(300);
		if ($(window).width() > 1280) {
			$(".list__wrapper").css("height" , $(".upload__integration--import").height() - 267 + "px");
		}
	});
	$('.upload__integration--import .back__button>a').on('click' ,function(e){
		$('.upload__integration--list').fadeIn(300)
		$('.upload__integration--import').css("display" ,'none');
	});
	$('.elem__integration .integration__status>.connect').on('click' ,function(e){
		e.preventDefault();
		$('.upload__integration--list').css("display" ,"none");
		$('.upload__integration--inner').fadeIn(300);
	});
	$('.upload__integration--inner .back__button>a').on('click' ,function(e){
		e.preventDefault();
		$('.upload__integration--list').fadeIn(300)
		$('.upload__integration--inner').css('display' ,"none");
	});

	$('.new__bulkverif--button').on('click' ,function(e){
		e.preventDefault();
		$('.new__bulk--verification').fadeIn(300);
		$('.new__bulk--verification>form>div').css("display" ,"none");
		$('.new__bulk--verification>form>.new__bulk--verif--box').fadeIn(300);
		$('.method__new .upload__integration .upload__integration--inner').css("display" , "none");
		$('.method__new .upload__integration .upload__integration--list').css("display" , "block");
		$('.method__new>div').css("display" ,"none");
		$('.switcher__new--bulk .active').removeClass("active");
		$('.switcher__new--bulk li:nth-child(1)').addClass("active");
		$('.method__new>.upload__new').fadeIn(300);
		if ($(window).width() > 1280) {
		} else{
			$('.overlay__popup').fadeIn(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
	});

	$('.new__bulk--verification .droppable__box--new p a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".droppable__box--new").find("input").click();
	});

	 $('.new__bulk--verification .droppable__box--new').on({
	    'dragover dragenter': function(e) {
	      e.preventDefault();
	      e.stopPropagation();
	      // $(".droppable__area").addClass("active__droppable");
	    },
	    
	    'drop': function(e, ui) {
	    		
			$('.new__bulk--verification .files__grid--new').fadeIn(300);

	      var dataTransfer = e.originalEvent.dataTransfer;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
	          			$('.new__bulk--verification .files__grid--new>.elem__file').remove();
						let newElement = "<div class='elem__file'> \
									<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:100%;'></div>\
											</div>\
											<span>100%</span>\
										</div>\
									</div>\
								</div>"
					$('.new__bulk--verification .files__grid').append(newElement);
					$('.method__new .upload__new button').removeClass("disabled");	
					$('.new__bulk--verification .droppable__box--new').css("height" ,"calc(100% - "+ $('.new__bulk--verification .files__grid--new .elem__file').css("height") +")");
	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	    }
	  });
	
	$(".new__bulk--verification .droppable__box--new input[type='file']").on('change' ,function(e){
		e.preventDefault();
		var nr = 0;
			
			$('.new__bulk--verification .files__grid--new').fadeIn(300);

		$('.droppable__area').removeClass("active__droppable");
	      var dataTransfer = e.originalEvent.target;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
      			$('.new__bulk--verification .files__grid--new>.elem__file').remove();
						let newElement = "<div class='elem__file'> \
									<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:100%;'></div>\
											</div>\
											<span>100%</span>\
										</div>\
									</div>\
								</div>"
					$('.new__bulk--verification .files__grid--new').append(newElement);
					$('.method__new .upload__new button').removeClass("disabled");	
					$('.new__bulk--verification .droppable__box--new').css("height" ,"calc(100% - 12px - "+ $('.new__bulk--verification .files__grid--new .elem__file').css("height") +")");
	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	});














	$('.audience__menu ul li a').on('click' ,function(e){
		e.preventDefault();
		if (!$(this).hasClass("active")) {
			$(this).closest("ul").find('.active').removeClass("active");
			$(this).addClass('active');
			$('.element__audience').css("display" , "none");
			$('.element__audience.' + $(this).attr("data-container")).fadeIn(300);
		}
	});


	$('.csv__import--button').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.import__grid').find("input").click();
	});


	$('.manual__import--button').on("click" ,function(e){
		e.preventDefault();
		$('.manual__modal').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" ,"hidden");
	});

	$('.leads__import--button').on("click" ,function(e){
		e.preventDefault();
		$('.lead__recepient').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" ,"hidden");
	});


	$('.lead__recepient .head__lead>a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".modal__wrapper").fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
	});

	$('.manual__modal .head__lead>a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".modal__wrapper").fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
	});





	$('body').on("click" , ".email__content .email__ .copy__email" ,function(e){
		e.preventDefault();
		let copyElem = $(this).closest(".email__").clone();
		$(this).closest('.email__content').find(".add__variant").before(copyElem);
	});


	$('body').on("click" , ".edit__email" ,function(e){
		e.preventDefault();
		$('.template__').closest(".modal__wrapper").fadeIn(300);
		$("body,html").css("overflow-y" ,"hidden");
	});

	$('.test__score--button').on("click" ,function(e){
		e.preventDefault();
		$('.main__template--').css("display" ,"none");
		$('.test__score').fadeIn(300);
	});

	$('.open__template--button').on("click",function(e){
		e.preventDefault();
		$('.main__template--').css("display" ,"none");
		$('.template__picker').fadeIn(300);
	});
	$('.template__picker .head__templates .right__templates>a').on("click" ,function(e){
		e.preventDefault();
		$('.main__template--').fadeIn(300)
		$('.main__template--').addClass("new");
		$('.template__picker').css("display" ,"none");
	});
	$('.template__picker .head__templates .left__templates>a').on("click" ,function(e){
		e.preventDefault();
		$('.main__template--').fadeIn(300)
		$('.template__picker').css("display" ,"none");
	});

	$('.templates__box .inner__templates>.el__template').on("click" ,function(e){
		e.preventDefault();
		$('.main__template--').fadeIn(300)
		$('.template__picker').css("display" ,"none");
	});


	$('.test__score .head__test>a').on('click' ,function(e){
		$(this).closest('.test__score').css("display" ,"none");
		$('.main__template--').fadeIn(300);
	});

	$('.main__template-- .cancel').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});


	function rearrangeFilter(){
		$('.inner__templates .el__template').css("display" , 'none');
		if ($('.template__filter ul li a.active').length != 0) {
			$('.template__filter ul li').each(function(index,elem){
				if ($(elem).find("a.active").length) {
					let currentLi = $(elem).find("a").text();
					$('.inner__templates>.el__template').each(function(index,elem){
						if ($(elem).hasClass(currentLi)) {
							$(elem).fadeIn(300);
						}
					});
				}
			});
		} else{
			$('.inner__templates .el__template').fadeIn(300)
		}
		
	}

	$(".template__filter ul li a").on('click', function(e){
		e.preventDefault();
		if ($(this).hasClass("active")) {
			$(this).removeClass('active');
			rearrangeFilter();
		} else {
			$(this).addClass("active");
			rearrangeFilter();
		}
	});




	if ($('.textarea').length) {
		$('.textarea').tinymce({
		// content_css: "dark",
		// skin: "oxide-dark"
		 });
	}


	function recountEmails(){
		$('.email__row').each(function(index,elem){
			$(elem).find('.email__').each(function(index,elem){
				$(elem).find(".head__>p").text("["+ arrayVariants[index].toUpperCase()  +"]");
			});
		});
	}


	$('.delete__email>.close__modal').on('click' ,function(e){
		e.preventDefault();
		$(this.closest('.modal__wrapper')).fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});

	$('body').on("click" , ".remove__email" ,function(e){
		e.preventDefault();
		$('.indexed').removeClass("indexed");
		$(this).addClass("indexed");
		$('.delete__email').closest('.modal__wrapper').fadeIn(300);
		$('body,html').css("overflow-y" ,"hidden");
		
	});

	$(".modal__wrapper .delete__email .button__wrapper>a").on("click" ,function(e){
		e.preventDefault();
		$('.indexed').closest(".email__").remove();
		$(this.closest('.modal__wrapper')).fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
		recountEmails();
	});





	var arrayVariants = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];



	$('.add__follow--up>a').on('click' ,function(e){
		e.preventDefault();
		let newRow = "<div class='email__row variant"+ ($('.email__row').length + 1)  +"'>\
							<div class='email__head'>\
							    <span><img src='img/calendary.svg' alt='calendary'></span>\
								<p><span>Day "+($('.email__row').length + 1)+":</span> Opener</p>\
							</div>\
							<div class='email__content'>\
								<div class='add__variant variant"+ ($('.email__row').length + 1)  +"' >\
									<a href='#' data-variant='variant"+ ($('.email__row').length + 1)  +"'>\
										<span><img src='img/addvariant.svg' alt='addvariant'></span>\
										<p>Add variant</p>\
									</a>\
								</div>\
							</div>\
							</div>";
		$(this).closest(".add__follow--up").before(newRow);
	});




	$('body').on('click' , '.add__variant>a' ,function(e){
		e.preventDefault();
		let newLength = $('.email__row.' + $(this).attr("data-variant")).find(".email__").length;

		let newEmail = "<div class='email__'>\
									<span></span>\
										<div class='head__'>\
											<p>["+ arrayVariants[newLength].toUpperCase()  +"]</p>\
											<div class='head__controls'>\
												<ul>\
													<li><a href='#' class='stroke copy__email'><svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>\
													<g clip-path='url(#clip0_317_34550)'>\
													<path d='M10.6654 10.6666V12.5333C10.6654 13.28 10.6654 13.6534 10.52 13.9386C10.3922 14.1895 10.1882 14.3935 9.93735 \
													14.5213C9.65214 14.6666 9.27877 14.6666 8.53203 14.6666H3.46536C2.71863 14.6666 2.34526 14.6666 2.06004 14.5213C1.80916\
													 14.3935 1.60519 14.1895 1.47736 13.9386C1.33203 13.6534 1.33203 13.28 1.33203 12.5333V7.46665C1.33203 6.71991 1.33203 6.34654 1.47736\
													  6.06133C1.60519 5.81044 1.80916 5.60647 2.06004 5.47864C2.34526 5.33331 2.71863 5.33331 3.46536 5.33331H5.33203M7.46536 10.6666H12.532C13.2788 10.6666 \
													  13.6521 10.6666 13.9374 10.5213C14.1882 10.3935 14.3922 10.1895 14.52 9.93863C14.6654 9.65342 14.6654 9.28005 14.6654 8.53331V3.46665C14.6654 2.71991 14.6654\
													   2.34654 14.52 2.06133C14.3922 1.81044 14.1882 1.60647 13.9374 1.47864C13.6521 1.33331 13.2788 1.33331 12.532 1.33331H7.46536C6.71863 1.33331 6.34526 1.33331 6.06004\
													    1.47864C5.80916 1.60647 5.60519 1.81044 5.47736 2.06133C5.33203 2.34654 5.33203 2.71991 5.33203 3.46665V8.53331C5.33203 9.28005 5.33203 9.65342 5.47736 9.93863C5.60519\
													     10.1895 5.80916 10.3935 6.06004 10.5213C6.34526 10.6666 6.71863 10.6666 7.46536 10.6666Z' stroke='#D1D1D6' stroke-linecap='round' stroke-linejoin='round'/>\
													</g>\
													<defs>\
													<clipPath id='clip0_317_34550'>\
													<rect width='16' height='16' fill='white'/>\
													</clipPath>\
													</defs>\
													</svg>\
													</a></li>\
													<li><a href='#' class='stroke remove__email'><svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>\
													<path opacity='0.12' d='M12.1978 11.0129L12.6654 4H3.33203L3.79956 11.0129C3.8697 12.065 3.90477 12.5911 4.13202 12.99C4.33209 13.3412 4.63387 13.6235 \
													4.99759 13.7998C5.41072 14 5.93797 14 6.99247 14H9.00493C10.0594 14 10.5867 14 10.9998 13.7998C11.3635 13.6235 11.6653 13.3412 11.8654 12.99C12.0926 12.5911\
													 12.1277 12.065 12.1978 11.0129Z' fill='#D1D1D6'/>\
													<path d='M6 2H10M2 4H14M12.6667 4L12.1991 11.0129C12.129 \
													12.065 12.0939 12.5911 11.8667 12.99C11.6666 13.3412 11.3648 13.6235 11.0011 \
													13.7998C10.588 14 10.0607 14 9.00623 14H6.99377C5.93927 14 5.41202 14 4.99889 \
													13.7998C4.63517 13.6235 4.33339 13.3412 4.13332 12.99C3.90607 12.5911 3.871 12.065 3.80086\
													 11.0129L3.33333 4M6.66667 7V10.3333M9.33333 7V10.3333' stroke='#D1D1D6' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'/>\
													</svg></a></li>\
													<li><a href='#' class='fill edit__email'><svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>\
													<path fill-rule='evenodd' clip-rule='evenodd' d='M4.5071 2.00003L7.33464 2.00003C7.70283 2.00003 8.0013 2.29851 8.0013 \
													2.6667C8.0013 3.03489 7.70283 3.33336 7.33464 3.33336H4.53464C3.96358 3.33336 3.57539 3.33388 3.27533 3.3584C2.98305 \
													3.38228 2.83358 3.42556 2.72932 3.47869C2.47843 3.60652 2.27446 3.81049 2.14663 4.06138C2.0935 4.16564 2.05022 4.31511\
													 2.02634 4.60739C2.00182 4.90745 2.0013 5.29564 2.0013 5.8667V11.4667C2.0013 12.0377 2.00182 12.4259 2.02634 12.726C2.05022 \
													 13.0183 2.0935 13.1678 2.14663 13.272C2.27446 13.5229 2.47843 13.7269 2.72932 13.8547C2.83358 13.9078 2.98305 13.9511 3.27533\
													  13.975C3.57539 13.9995 3.96358 14 4.53464 14H10.1346C10.7057 14 11.0939 13.9995 11.3939 13.975C11.6862 13.9511 11.8357 13.9078\
													   11.94 13.8547C12.1908 13.7269 12.3948 13.5229 12.5226 13.272C12.5758 13.1678 12.6191 13.0183 12.6429 12.726C12.6675 12.4259 12.668\
													    12.0377 12.668 11.4667V8.6667C12.668 8.29851 12.9664 8.00003 13.3346 8.00003C13.7028 8.00003 14.0013 8.29851 14.0013 8.6667V11.4942C14.0013 \
													    12.0309 14.0013 12.4738 13.9718 12.8346C13.9412 13.2093 13.8755 13.5538 13.7107 13.8773C13.455 14.3791 13.047 14.7871 12.5453 15.0427C12.2217 \
													    15.2076 11.8773 15.2733 11.5025 15.3039C11.1417 15.3334 10.6988 15.3334 10.1622 15.3334H4.50709C3.97045 15.3334 3.52755 15.3334 3.16675 15.3039C2.79202\
													     15.2733 2.44755 15.2076 2.12399 15.0427C1.62223 14.7871 1.21428 14.3791 0.958619 13.8773C0.793758 13.5538 0.728049 13.2093 0.697432 12.8346C0.667954 \
													     12.4738 0.667961 12.0309 0.667969 11.4942V5.83916C0.667961 5.30252 0.667954 4.85961 0.697432 4.49881C0.728049 4.12408 0.793758 3.77961 0.958619 3.45606C1.21428 \
													     2.95429 1.62223 2.54634 2.12399 2.29068C2.44755 2.12582 2.79202 2.06011 3.16675 2.02949C3.52755 2.00001 3.97046 2.00002 4.5071 2.00003Z' fill='#D1D1D6'/>\
													<path fill-rule='evenodd' clip-rule='evenodd' d='M11.8632 1.19529C12.6759 0.382656 13.9934 0.382658 14.806 1.19529C15.6187 2.00793 15.6187 3.32547 14.806 4.1381L8.43088\
													 10.5133C8.41768 10.5265 8.4046 10.5396 8.39163 10.5526C8.2 10.7445 8.03104 10.9138 7.82735 11.0386C7.6484 11.1483 7.45331 11.2291 7.24924 11.2781C7.01694 11.3339 6.77778\
													 11.3337 6.50651 11.3334C6.48815 11.3334 6.46964 11.3334 6.45098 11.3334H5.33462C4.96643 11.3334 4.66795 11.0349 4.66795 10.6667V9.55035C4.66795 9.53169 4.66793 9.51318 4.66792\
													  9.49482C4.66766 9.22355 4.66744 8.98439 4.72321 8.75209C4.77221 8.54802 4.85301 8.35293 4.96267 8.17398C5.0875 7.97029 5.25677 7.80133 5.44876 7.6097C5.46176 7.59673 5.47486 7.58365 5.48806 7.57045L11.8632 1.19529Z' fill='#D1D1D6'/>\
													</svg>\
													</a></li>\
												</ul>\
												<label class='switch'>\
												  <input type='checkbox' >\
												  <span class='slider round'></span>\
												</label>\
											</div>\
										</div>\
										<div class='content__'>\
											<span></span>\
											<p></p>\
										</div>\
									</div>";

				$(".add__variant." + $(this).attr("data-variant")).before(newEmail);
		});



	$('.campaign__filter ul li a').on("click" ,function(e){
		e.preventDefault();
		if (!$(this).hasClass("active")) {
			$(this).closest('ul').find(".active").removeClass("active");
			$(this).addClass('active');
			let currentFilt = $(this).attr("data-filter");
			$('.campaign__table .elem__campaign').css("display" , "none");
			$('.campaign__table .elem__campaign').each(function(index,elem){
				if (!$(elem).hasClass(currentFilt)) {
					$(elem).css("display" ,"none");
				} else {
					$(elem).fadeIn(300);
				}
			});
		} else {
			$(this).removeClass('active');
			$('.campaign__table .elem__campaign').fadeIn(300);
		}
	});



	function removeBulk(){
		$('.new__bulk--finder .placeholder__text').removeClass("nonvisible");
		$('.new__bulk--finder .placeholder__text>div').fadeOut(300);
		$('.new__bulk--finder .placeholder__fixed').removeClass('placeholder__fixed');
		$('.new__bulk--finder .placeholder__bulk').fadeOut(300);

		if ($('.side__box').length) {
			$('.side__box .placeholder__text').removeClass("nonvisible");
			$('.side__box .placeholder__text>div').fadeOut(300);
			$('.side__box .placeholder__fixed').removeClass('placeholder__fixed');
			$('.side__box .placeholder__bulk').fadeOut(300);
		}
	}
	function addBulk(){
		$('.new__bulk--finder .placeholder__text').addClass("nonvisible");
		$('.new__bulk--finder .placeholder__text>div').fadeIn(300);
		$('.new__bulk--finder .bulk__domain--file.filled').addClass('placeholder__fixed');
		$('.new__bulk--finder .placeholder__bulk').fadeIn(300);
		if ($(".side__box").length) {
			$('.side__box .placeholder__text').addClass("nonvisible");
			$('.side__box .placeholder__text>div').fadeIn(300);
			$('.side__box .bulk__domain--file.filled').addClass('placeholder__fixed');
			$('.side__box .placeholder__bulk').fadeIn(300);
		}
	}


	$('.domain__search--file').on('click' ,function(){
		if (!$(this).hasClass("active")) {
			$('.new__bulk--finder').fadeIn(300);
			$(this).closest("table").find(".active").removeClass('active');
			$(this).addClass('active');
			$('.upload__box').css("display" ,"none");
			$('.bulk__domain--file').css("display" , "none");
			if ($('.new__bulk--verif--box').length) {
				$('.new__bulk--verif--box').css("display" ,"none");				
			}
			if ($(this).hasClass("ready")) {
				setTimeout(function(){
					removeBulk();
				},1000);
				$('.bulk__domain--file.filled').fadeIn(300);
			}
			if ($(this).hasClass("failed") || $(this).hasClass('no__results')) {
				addBulk();
				$('.bulk__domain--file.empty').fadeIn(300);
			}

			if ($(this).hasClass("pending")) {
				addBulk();
				// JUST A PLACEHOLDER FIlE
				$('.files__grid>.elem__file').remove();
						let newElement = "<div class='elem__file'> \
									<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>randomname</p>\
												<span>randomsize KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='header' style='display:none;'>\
											<span>Header included</span>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:100%;'></div>\
											</div>\
											<span>100%</span>\
										</div>\
									</div>\
								</div>"
					$('.files__grid').append(newElement);
				// 


				$('.new__bulk--finde , .files__grid , .map__fields , .step__three .content__progress').css("display", "block");
				$('.step__one .droppable__box , .step__one .example__desc , .step__one .include__header--checkbox , .step__one .next__step , .map__fields>.dropdown__container').css("display" ,"none");
				$('.step__one').addClass("filled");
				$('.step__one>.upload__head>p').text("Upload list");
				$('.step__two').removeClass("inactive");
				$('.step__two .upload__head>p').text("Map fields (2/3)");
				$('.step__two').addClass("filled");	
				$('.step__two .next__step').css("display"  ,"none");
				$('.step__two>.upload__head>p').text("Map fields");
				$('.step__three').removeClass("inactive");
				$('.step__three').addClass("filled");
				$('.upload__box').fadeIn(300);
			}


			
			bulkDroppableHeight();
			if ($(window).width() > 1280) {
			} else{
				$('.overlay__popup').fadeIn(300);
				$('body,html').css("overflow-y" ,"hidden");
			}
		}
	});



	$('.export__settings .elem__export').on('click' ,function(){
		if (!$(this).hasClass('current')) {
			$(this).closest('.export__settings').find('.elem__export').removeClass("current");
			$(this).addClass("current");
			$(this).find("input").prop('checked' ,true);
		}
	});
	$('.export__updated .right__step--one>a').on('click', function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
	});
	$('.export__updated .export__step--one .content__step>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.export__updated').find('.export__step--one').css("display" , "none");
		$(this).closest('.export__updated').find('.export__step--two').fadeIn(300);
	});

	$('.export__updated .exp__back>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.export__updated').find('.export__step--two').css("display" , "none");
		$(this).closest('.export__updated').find('.export__step--one').fadeIn(300);
	});


	$('.export__bulk--button').on('click' ,function(e){
		e.preventDefault();
		$('.export__updated').closest(".modal__wrapper").fadeIn(300);
		$('.export__updated .export__step--one').fadeIn(300);
		$('.export__updated .export__step--two').css("display" ,"none");
		$('body,html').css("overflow-y" ,"hidden");
	});


	$('.new__bulk--finder .head__box>a , .bulk__domain--file .right__head>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.new__bulk--finder').fadeOut(300);
		$('.file__table  .active').removeClass('active');
		if ($(window).width()< 1280) {
			$('.overlay__popup').fadeOut(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
	});


	$('.new__bulkfinder--button').on("click" ,function(e){
		e.preventDefault();

		$('.bulk__domain--file').css("display" , "none");
		$('.new__bulk--finder').fadeIn(300);
		$('.upload__box').fadeIn(300);
		$('.upload__step').removeClass('filled');
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .droppable__box').css("display" ,"flex");
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .files__grid').css("display" ,"none");
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .files__grid>.elem__file').remove();
		$('.step__two , .step__three').addClass('inactive');
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .example__desc').css('display' ,'block');
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .switcher__elem').css("display" , 'flex');
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .map__fields').css('display' ,"none");
		$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .content__progress').css('display' ,"none");
		$(".new__bulk--finder .droppable__box input[type='file']").val("");
		bulkDroppableHeight();
		if ($(window).width() > 1280) {
		} else{
			$('.overlay__popup').fadeIn(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
	});

	$(".step__one .next__step>a").on("click" ,function(e){
		e.preventDefault();
		$('.step__one .droppable__box').css("display" ,"none");
		$('.step__one .example__desc').css("display" ,"none");
		$('.step__one').addClass("filled");
		$('.step__one .include__header--checkbox').css("display" ,"none");
		$('.step__one>.upload__head>p').text("Upload list");
		$('.step__one .next__step').css("display" , 'none');
		$('.step__two').removeClass("inactive");
		$('.step__two .upload__head>p').text("Map fields (2/3)");
		$('.map__fields').fadeIn(300);
	});

	$('.step__two .next__step>a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.upload__step').addClass("filled");	
		$('.map__fields>.dropdown__container').css("display",'none');
		$('.step__two>.upload__head>p').text("Map fields");
		$('.step__three').removeClass("inactive");
		$('.step__three .content__progress').fadeIn(300);
		$('.step__three').addClass("filled");
	});

	function bulkDroppableHeight(){
		if ($(window).width() > 1280) {
			$('.upload__box .droppable__box').css("height" ,"0px");
			$('.upload__box .droppable__box').css('height' , $('.new__bulk--finder').outerHeight() -  $('.new__bulk--finder .upload__box .head__box').outerHeight() - $(".new__bulk--finder .upload__main").outerHeight() - 32);
		}
	}
	if ($('.new__bulk--finder').length) {
		if ($(window).width() > 1280) {
			$('.upload__box .droppable__box').css("height" ,'0px');
			$('.upload__box .droppable__box').css('height' , $('.new__bulk--finder').outerHeight() -  $('.new__bulk--finder .upload__box .head__box').outerHeight() - $(".new__bulk--finder .upload__main").outerHeight() - 32);
		}
		$(window).on("resize" ,function(){
			if ($(window).width() > 1280) {
				$('.upload__box .droppable__box').css("height" ,'0px');
				$('.upload__box .droppable__box').css('height' , $('.new__bulk--finder').outerHeight() -  $('.new__bulk--finder .upload__box .head__box').outerHeight() - $(".new__bulk--finder .upload__main").outerHeight() - 32);
			}
		});
	}
	$('.step__one .include__header--checkbox input').on("change" ,function(e){
		if ($(this).prop("checked") == true) {
			$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .files__grid > .elem__file > .file__desc .header').css("display" ,"block");
			bulkDroppableHeight();
		} else {
			$('.float__box.new__bulk--finder .upload__box .container__upload > .upload__main .upload__step .upload__content .files__grid > .elem__file > .file__desc .header').css("display" ,"none");
			bulkDroppableHeight();
		}
	});
	$('.new__bulk--finder .droppable__box p a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".droppable__box").find("input").click();
	});

	 $('.upload__content .droppable__box').on({
	    'dragover dragenter': function(e) {
	      e.preventDefault();
	      e.stopPropagation();
	      // $(".droppable__area").addClass("active__droppable");
	    },
	    
	    'drop': function(e, ui) {
	    		
			$('.new__bulk--finder .files__grid').fadeIn(300);
			var checkHeader = "none";
			if ($('.step__one .include__header--checkbox input').prop("checked") == true) {
				checkHeader = "block";
			}	 else{
				checkHeader = "none";
			}

	      var dataTransfer = e.originalEvent.dataTransfer;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
	          			$('.files__grid>.elem__file').remove();
						let newElement = "<div class='elem__file'> \
									<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='header' style='display:"+ checkHeader +";'>\
											<span>Header included</span>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:100%;'></div>\
											</div>\
											<span>100%</span>\
										</div>\
									</div>\
								</div>"
					$('.files__grid').append(newElement);
					$('.upload__submit').removeClass("disabled");		
	           		$('.step__one .next__step').fadeIn(300);
	           		bulkDroppableHeight();
	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	    }
	  });
	
	$(".new__bulk--finder .droppable__box input[type='file']").on('change' ,function(e){
		e.preventDefault();
		var nr = 0;
			
			$('.new__bulk--finder .files__grid').fadeIn(300);
			var checkHeader = "none";
			if ($('.step__one .include__header--checkbox input').prop("checked") == true) {
				checkHeader = "block";
			}	 else{
				checkHeader = "none";
			}
		$('.droppable__area').removeClass("active__droppable");
	      var dataTransfer = e.originalEvent.target;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
      			$('.files__grid>.elem__file').remove();
	            let newElement = "<div class='elem__file'> \
									<span><img src='img/fileuploadicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='header' style='display:"+ checkHeader +";'>\
											<span>Header included</span>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:100%;'></div>\
											</div>\
											<span>100%</span>\
										</div>\
									</div>\
								</div>"
					$('.files__grid').append(newElement);
					$('.upload__submit').removeClass("disabled");		
					$('.step__one .next__step').fadeIn(300);
					bulkDroppableHeight();
	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	});











	if ($('.placeholder__value').length) {
		setTimeout(function(){
			$('.placeholder__value').fadeOut(300);
			$('.placeholder__disabled').removeClass("placeholder__disabled");
		},1200);
	}

	function removePlaceholderList(){
		$('.placeholder__wrapper').fadeOut(300);
		$('.placeholder__text>div').fadeOut(300);
		$('.placeholder__text').removeClass("nonvisible");
		setTimeout(function(){
			$('.placeholder__fixed').removeClass("placeholder__fixed");
		},300);
	}


	$('.new__bulk--button').on("click" ,function(e){
		e.preventDefault();
		$('.new__bulk').fadeIn(300);
		$('.new__bulk form>div').css("display" ,"none");
		$('.file__open--box').removeClass('active');
		$('.new__bulk .file__wrap--box').fadeIn(300);
		if ($(window).width() > 1280) {
			$('.copy__paste , .files__wrapper').css('height' , $('.new__bulk').outerHeight() -  $('.new__bulk .head__box').outerHeight() - $(".new__bulk .switcher__bulk--creation").outerHeight() - $(".new__bulk .main__bottom").outerHeight() - 100);
		} else{
			$('.overlay__popup').fadeIn(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
	});


	$('.upload__submit').on("click" ,function(e){
		e.preventDefault();
		$('.file__wrap--box').css("display" , "none");
		$('.list__loading').fadeIn(300);
		setTimeout(function(){
			$('.list__loading').css("display" ,"none");
			$('.campaign__list').fadeIn(300);
			setTimeout(function(){
				$('.campaign__list').css("display" , "none");
				$(".not__empty--list").fadeIn(300);
				setTimeout(function(){
					removePlaceholderList();
				}, 800);
			}, 2000);
		},2000);
	});
	$('.list__loading .cancel__wrapper>a').on("click" ,function(e){
		e.preventDefault();
		$('.list__loading').css("display" ,"none");
		$('.file__wrap--box').fadeIn(300);
		if ($(window).width() > 1280) {
			$('.copy__paste , .files__wrapper').css('height' , $('.new__bulk').outerHeight() -  $('.new__bulk .head__box').outerHeight() - $(".new__bulk .switcher__bulk--creation").outerHeight() - $(".new__bulk .main__bottom").outerHeight() - 100);
		} 
	});


	$('.file__open--box').on('click' ,function(e){
		e.preventDefault();
		if (!$(this).hasClass('active')) {
			$('.file__open--box').removeClass('active');
			$(this).addClass("active");
			$('.new__bulk').fadeIn(300);
			if ($(this).hasClass("downloaded")) {
				$('.new__bulk form>div').css("display" ,"none");
				$('.new__bulk form .main__list.not__empty--list').fadeIn(300);
				setTimeout(function(){
			removePlaceholderList();
		}, 800);
			}

			if ($(this).hasClass("failed")) {
				$('.new__bulk form>div').css("display" ,"none");
				$('.new__bulk form .main__list.empty__list').fadeIn(300);
			}
			if ($(this).hasClass("pending")) {
				$('.new__bulk form>div').css("display" ,"none");
				$('.new__bulk form .list__loading').fadeIn(300);
			}
			if ($(window).width() < 1280) {
				$('.overlay__popup').fadeIn(300);
				$('body,html').css("overflow-y" ,"hidden");
			}
		}
	});

	$('.new__bulk .close__modal').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.new__bulk').fadeOut(300);
		$(".overlay__popup").fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
		$('.file__open--box').removeClass('active');
		$('.campaigns__v--placeholder').addClass("placeholder__fixed");
		$('.placeholder__text>div').fadeIn(300);
		$('.placeholder__text').addClass("nonvisible")
		$('.placeholder__wrapper').fadeIn(300);
	});



	$('.copy__button--email').on('click' ,function(e){
		e.preventDefault();
		var $temp = $("<input>");
	    $("body").append($temp);
	    $temp.val($(this).attr("data-copy")).select();
	    document.execCommand("copy");
	    $temp.remove();
	    $('.float__tooltip--box>p').text("Copied");
	    $('.float__tooltip--box').css("top" , $(this).offset().top - $('.float__tooltip--box').height() - 23);
		$('.float__tooltip--box').css("left" , $(this).offset().left - $('.float__tooltip--box').width()/2 - 5);
	});


	$('.new__bulk .list__campaigns>a.elem__campaign--list').on('click' ,function(e){
		e.preventDefault();
		$('.new__bulk .not__empty--list').css("display" , 'none');
		$('.campaigns__v--placeholder').addClass("placeholder__fixed");
		$('.placeholder__text>div').fadeIn(300);
		$('.placeholder__text').addClass("nonvisible")
		$('.new__bulk .emails__list').fadeIn(300);
		$('.placeholder__wrapper').fadeIn(300);
	});

	$('.new__bulk .emails__list .left__header__>a').on('click', function(e){
		e.preventDefault();
		$('.new__bulk .not__empty--list').fadeIn(300);
		setTimeout(function(){
			removePlaceholderList();
		}, 800);
		$('.new__bulk .emails__list').css("display" , 'none');
	});


	
	$('.delete__bulk--button').on('click',function(e){
		e.preventDefault();
		$('.delete__bulk').closest(".modal__wrapper").fadeIn(300);
		$("body,html").css("overflow-y" ,"hidden");
	});


	$('.export__list--button').on('click' ,function(e){
		e.preventDefault();
		$('.modal__export').closest(".modal__wrapper").fadeIn(300);
		$("body,html").css("overflow-y" ,"hidden");
	});


	$('.insert__attribute--button').on('click' ,function(e){
		$('.box__attribute').fadeIn(300);
	});
	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.insert__attribute--button').length && !$target.closest('.box__attribute').length) {
	    $('.box__attribute').fadeOut(300);
	  }        
	});




	$('.modal__export .close__export').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
	});
	$('.delete__bulk .close__').on('click' ,function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$("body,html").css("overflow-y" ,"initial");
	});

	$('.elem__export').on("click" ,function(e){
		if (!$(this).hasClass('active')) {
			$(this).closest('.export__picker').find(".elem__export input").prop('checked' ,false);
			$(this).closest('.export__picker').find(".elem__export").removeClass('active');
			$(this).addClass('active');
			$(this).find("input").prop('checked' ,true);
		}
	});



	$('.tooltip__float').on("mouseenter" , function(e){
		e.preventDefault();
		$('.float__tooltip--box').css("display" , "block");
		
		$('.float__tooltip--box>p').text($(this).attr("data-tooltip"));
		$('.float__tooltip--box').css("top" , $(this).offset().top - $('.float__tooltip--box').height() - 23);
		$('.float__tooltip--box').css("left" , $(this).offset().left - $('.float__tooltip--box').width()/2 - 5);
	});
	$('.tooltip__float').on("mouseleave" ,function(){
		$('.float__tooltip--box').css("display" ,"none");
	});


	$('.upload__submit').on('click' , function(e){
		e.preventDefault();
		$('.file__wrap--box').css("display" ,"none");
	});



	$('.files__download a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.files__download').find("input").click();
	});


	 $('.files__download').on({
	    'dragover dragenter': function(e) {
	      e.preventDefault();
	      e.stopPropagation();
	      // $(".droppable__area").addClass("active__droppable");
	    },
	    
	    'drop': function(e, ui) {
	    		$('.files__download').css("display" ,"none");
		$('.files__list').fadeIn(300);
	      var dataTransfer = e.originalEvent.dataTransfer;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
						let newElement = "<div class='elem__file'>\
									<span><img src='img/fileicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:10%;'></div>\
											</div>\
											<span>10%</span>\
										</div>\
									</div>\
								</div>"
					$('.files__grid').append(newElement);
					$('.upload__submit').removeClass("disabled");		
	           
	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	    }
	  });
	
	$(".files__download input[type='file']").on('change' ,function(e){
		e.preventDefault();
		var nr = 0;
			$('.files__download').css("display" ,"none");
		$('.files__list').fadeIn(300);

		$('.droppable__area').removeClass("active__droppable");
	      var dataTransfer = e.originalEvent.target;
	      if (dataTransfer && dataTransfer.files.length) {
	        e.preventDefault();
	        e.stopPropagation();
	        $.each(dataTransfer.files, function(i, file) {
	          var reader = new FileReader();
	          reader.onload = $.proxy(function(file, $fileList, event) {
	            nr++;
	            // if (file.type == "text/csv" || file.type == "text/xls"  || file.type == "text/xlsx") {


						let newElement = "<div class='elem__file'>\
									<span><img src='img/fileicon.svg' alt='fileicon'></span>\
									<div class='file__desc'>\
										<div class='top__part'>\
											<div class='lf__desc'>\
												<p>"+ file.name +"</p>\
												<span>"+ (file.size/100).toFixed(0) +" KB</span>\
											</div>\
											<div class='rg__desc'>\
												<a href='#'><img src='img/trashfile.svg' alt='trashfile'></a>\
											</div>\
										</div>\
										<div class='bottom__part'>\
											<div class='progress'>\
												<div class='active' style='width:10%;'></div>\
											</div>\
											<span>10%</span>\
										</div>\
									</div>\
								</div>"
					$('.files__grid').append(newElement);

				// }			
				$('.upload__submit').removeClass("disabled");		

	          }, this, file, $("#fileList"));
	          reader.readAsDataURL(file);
	        });
	      }
	});


	$('.copy__paste textarea').on('input' ,function(){
		if ($(this).val().length != 0) {
			$('.upload__submit').removeClass("disabled");		
		}
	});

	$('.switcher__bulk--creation ul li a').on('click',function(e){
		e.preventDefault();
		if (!$(this).hasClass("active")) {
			 $(this).closest('ul').find(".active").removeClass('active');
			$(this).addClass("active");
			if ($(this).attr("data-switcher") == "copy__paste") {
				$('.files__wrapper').css("display" ,"none");
				$('.copy__paste').fadeIn(300);
				if ($('.copy__paste textarea').length != 0) {
					$('.upload__submit').removeClass("disabled");		
				}
			}
			if ($(this).attr("data-switcher") == "files__wrapper") {
				$('.files__wrapper').fadeIn(300);
				$('.copy__paste').css("display" , "none");
			}
		}
	});




	$('.remove__card>.close__remove').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});

	if ($('.new__bulk').length) {
		if ($(window).width() > 1280) {
			$('.copy__paste , .files__wrapper').css('height' , $('.new__bulk').outerHeight() -  $('.new__bulk .head__box').outerHeight() - $(".new__bulk .switcher__bulk--creation").outerHeight() - $(".new__bulk .main__bottom").outerHeight() - 40);
		}
		$(window).on('resize' ,function(){
			if ($(window).width() > 1280) {
				$('.copy__paste , .files__wrapper').css('height' , $('.new__bulk').outerHeight() -  $('.new__bulk .head__box').outerHeight() - $(".new__bulk .switcher__bulk--creation").outerHeight() - $(".new__bulk .main__bottom").outerHeight() - 40);
			}
		});
	}


	$('.remove__card--button').on("click" ,function(e){
		e.preventDefault();
		$('.modal__box.remove__card').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" , "hidden");
	});


	$('.add__card--button').on("click" ,function(e){
		e.preventDefault();
		$('.modal__box.add__card').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" ,"hidden");
	});

	$('.edit__card--button').on("click" ,function(e){
		e.preventDefault();
		$('.modal__box.edit__card').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" ,"hidden");
	});


	$('.credit__card .cancel__credit').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".modal__wrapper").fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});


	if ($('.credit__card').length) {
		$('.credit__card').mask("9999-9999-9999-9999");
	}
	if ($('.exp__date').length) {
		$('.exp__date').mask("99/99");
	}
	if ($('.csv').length) {
		$('.csv').mask("999");
	}



	$('.action>a').on("click" ,function(e){
		e.preventDefault();
		let actionDropdown = $(this).closest('.action').find(".action__dropdown");
		if ($(actionDropdown).length) {
			$('.float__dropdowns').append(actionDropdown);
			$(actionDropdown).css("top" ,$(this).offset().top - $(window).scrollTop() + $(this).height());
			$(actionDropdown).css("left" ,$(this).offset().left - $(actionDropdown).width()  + 15);
			$(actionDropdown).fadeIn(300);
		} else {
			
			$('.action__dropdown.' + $(this).attr("data-action")).css("top" ,$(this).offset().top - $(window).scrollTop() + $(this).height());
			$('.action__dropdown.' + $(this).attr("data-action")).css("left" ,$(this).offset().left - $('.action__dropdown.' + $(this).attr("data-action")).width()  + 15);
			$('.action__dropdown.' + $(this).attr("data-action")).fadeIn(300);
		}
	});
	$(window).on("scroll" ,function(){
		if ($(".action__dropdown:visible").length) {
			$('.action__dropdown').fadeOut(300);
		}
	});


	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.action__dropdown').length && !$target.closest('.action>a').length) {
	  	$(".action__dropdown").fadeOut(300);
	  }        
	});


	$('.check__all input').on("change" ,function(e){
		if ($(this).prop('checked') == true) {
			$(this).closest("table").find("input").prop('checked' ,true);
		} else {
			$(this).closest("table").find("input").prop('checked' ,false);
		}
	});

		
	$('.close__lead').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".modal__wrapper").fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});


	$('.new__list--button').on('click' , function(e){
		$(this).closest(".group__dropdown").find(">a").removeClass("opened");
		$(this).closest(".group__dropdown").find(".dropdown__box").fadeOut(300);
		$('.new__lead').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" ,"initial");
	});




	// $('.deliver__search .group__input>input').on("input" , function(e){
	// 	e.preventDefault();
	// 	let currentValue = $(this).val().toLowerCase();
	// 	$('.element__deliver').each(function(index,elem){


	// 		if ($(elem).find('.deliver__title').text().trim().toLowerCase().indexOf(currentValue) >= 0) {
	// 			$(elem).css("display" , "block");
	// 		} else {
	// 			$(elem).css("display" ,"none");
	// 		}
	// 	});
	// });

	$('.search__member--box>input').on("input" , function(e){
		let currentVal = $(this).val();
		$(this).closest('.search__member--box').addClass("opened");
		$(this).closest('.search__member--box').find(".search__dropdown .search__member").each(function(index,elem){
			if ($(elem).find('>p').text().trim().indexOf(currentVal) >= 0) {
				let currentString = $(elem).find(">p").text();
				var replace = currentVal;
				var re = new RegExp(replace,"");
				currentString = currentString.replace(re, '<span>' + currentVal +  '</span>');
				$(elem).find(">p").html(currentString);
				$(elem).css("display" ,"flex");
			} else{
				$(elem).css("display" ,"none");
			}
		});
		if ($(this).closest(".search__member--box").find(".search__dropdown .search__member:visible").length == 0) {
			$(this).closest(".search__member--box").find(".search__dropdown>p").css("display" ,"block");	
		} else{
			$(this).closest(".search__member--box").find(".search__dropdown>p").css("display" ,"none");	
		}
	});


	$('.bulk__domain>input').on("input" , function(e){
		let currentVal = $(this).val();
		$(this).closest('.bulk__domain').find(".search__dropdown .search__file--elem").each(function(index,elem){
			if ($(elem).find('.file__name>p').text().trim().indexOf(currentVal) >= 0) {
				let currentString = $(elem).find(".file__name>p").text();
				var replace = currentVal;
				var re = new RegExp(replace,"");
				currentString = currentString.replace(re, '<span>' + currentVal +  '</span>');
				$(elem).find(".file__name>p").html(currentString);
				$(elem).css("display" ,"flex");
			} else{
				$(elem).css("display" ,"none");
			}
		});
		if ($(this).closest(".bulk__domain").find(".search__dropdown .search__file--elem:visible").length == 0) {
			$(this).closest(".bulk__domain").find(".search__dropdown>p").css("display" ,"block");	
		} else{
			$(this).closest(".bulk__domain").find(".search__dropdown>p").css("display" ,"none");	
		}
	});

	$('.person__search>input').on("input" , function(e){
		let currentVal = $(this).val();
		$(this).closest('.person__search').find(".search__dropdown .search__person").each(function(index,elem){
			if ($(elem).find('.person__desc>p').text().trim().indexOf(currentVal) >= 0) {
				let currentString = $(elem).find(".person__desc>p").text();
				var replace = currentVal;
				var re = new RegExp(replace,"");
				currentString = currentString.replace(re, '<span>' + currentVal +  '</span>');
				$(elem).find(".person__desc>p").html(currentString);
				$(elem).css("display" ,"flex");
			} else{
				$(elem).css("display" ,"none");
			}
		});
		if ($(this).closest(".person__search").find(".search__dropdown .search__person:visible").length == 0) {
			$(this).closest(".person__search").find(".search__dropdown>p").css("display" ,"block");	
		} else{
			$(this).closest(".person__search").find(".search__dropdown>p").css("display" ,"none");	
		}
	});
	$('.group__search>input').on("focus", function(e){
		$(this).closest('.group__search').addClass('active');
		$(this).closest('.group__search').find('.search__dropdown').fadeIn(300);
	});
	$('.group__search>input').on("blur", function(e){
		$(this).closest('.group__search').removeClass('active');
		$(this).closest('.group__search').find('.search__dropdown').fadeOut(300);
	});


	$('.linkvalidator__elem .head__validator>a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest(".linkvalidator__elem").toggleClass('active');
		$(this).closest(".linkvalidator__elem").find('.content__validator').slideToggle(400);
	});


	$('.elem__spam .head__spam>a').on('click', function(e){
		e.preventDefault();
		$(this).closest(".elem__spam").toggleClass('active');
		$(this).closest(".elem__spam").find('.content__spam').slideToggle(400);
	});

	$('.auth__container .elem__content .head__ .head__right>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest(".elem__content").toggleClass("active");
		$(this).closest(".elem__content").find('.content__auth__').slideToggle(400);
	});

	$('.inbox__container .elem__content .head__>a').on('click' ,function(e){
		e.preventDefault();
		$(this).closest(".elem__content").toggleClass("active");
		$(this).closest(".elem__content").find('.table__wrapper').slideToggle(400);
	});


	$('.placement__switcher .elem__placement').on('click' ,function(e){
		e.preventDefault();
		if (!$(this).hasClass('active')) {
			$(this).closest(".placement__switcher").find(".active").removeClass('active');
			$(this).addClass('active');
			$('.element__placement').css("display" , "none");
			$('.element__placement.' + $(this).attr("data-placement")).fadeIn(300);
		}
	});


	$('.cancel__modal').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.modal__wrapper').fadeOut(300);
		$('body,html').css("overflow-y" ,"initial");
	});

	$('.new__report--button').on('click' ,function(e){
		e.preventDefault();
		$('.new__report').closest(".modal__wrapper").fadeIn(300);
		$('body,html').css("overflow-y" , "hidden");
	});

	$('.new__report form').on("submit" ,function(e){
		e.preventDefault();
		$(this).closest('.new__report').find('.loading').fadeIn(300);
	});


	let copyTimer;
	$('.tags__wrapper>a').on('click' ,function(e){
		e.preventDefault();
		$(this).find("p").text("Copied!");
		var $temp = $("<input>");
	    $("body").append($temp);
	    $temp.val($(this).attr("data-copy")).select();
	    document.execCommand("copy");
	    $temp.remove();
		if (copyTimer) {
			clearTimeout(copyTimer);
			copyTimer = setTimeout(function(){
				$('.tags__wrapper>a p').text("Click to copy")
			},1500);
		} else{
			clearTimeout(copyTimer);
			copyTimer = setTimeout(function(){
				$('.tags__wrapper>a p').text("Click to copy")
			},1500);
		}
	});



	$('.menu__dropdown--list>a').on("mouseenter" ,function(){
		$(this).addClass("hovered");
		$(this).closest('.menu__dropdown--list').find('.menu__dropdown').fadeIn(150);
	});
	$('.menu__dropdown--list').on("mouseleave" ,function(){
		$(this).find(">a").removeClass("hovered");
		$(this).closest('.menu__dropdown--list').find('.menu__dropdown').fadeOut(150);
	});




	$('.group__dropdown>a').on("click" ,function(e){
		e.preventDefault();
		if ($(this).hasClass("opened")) {
			$(this).removeClass("opened");
			$(this).closest('.group__dropdown').find(".dropdown__box").fadeOut(300);
		} else {
			$('.opened').removeClass("opened");
			$('.dropdown__box').fadeOut(300);
			$(this).addClass("opened");
			$(this).closest('.group__dropdown').find(".dropdown__box").fadeIn(300);
		}
	});

	$('.group__dropdown ul li a').on('click' ,function(e){
		e.preventDefault();
		if ($(this).closest(".group__dropdown").hasClass("country__picker")) {
			$(this).closest('.group__dropdown').find(">a").addClass("picked");
			$(this).closest('.group__dropdown').find(">a .flag").attr("src" ,$(this).find('.flag>img').attr('src'));
			$(this).closest('.group__dropdown').find(">a .text").text($(this).find(".country").text());
			$(this).closest(".group__dropdown").find(">a").removeClass("opened");	
			$(this).closest(".group__dropdown").find(".dropdown__box").fadeOut(300);
		}

		if ($(this).closest(".group__dropdown").hasClass("timezone")) {
			$(this).closest('.group__dropdown').find(">a").addClass("picked");
			$(this).closest('.group__dropdown').find(">a .time__info").text($(this).find(".time__info").text());
			$(this).closest('.group__dropdown').find(">a .time__zone").text($(this).find(".time__zone").text());
			$(this).closest(".group__dropdown").find(">a").removeClass("opened");	
			$(this).closest(".group__dropdown").find(".dropdown__box").fadeOut(300);
		}
		if ($(this).closest(".group__dropdown").hasClass('default__dropdown')) {
				if ($(this).closest(".group__dropdown").hasClass("map__")) {
					$(this).closest(".group__dropdown").attr("data-old" , $(this).closest('.group__dropdown').find(">a").attr("data-row"));
				}
			$(this).closest('.group__dropdown').find(">a").addClass("picked");
			$(this).closest('.group__dropdown').find(">a>p").text($(this).text());
			$(this).closest(".group__dropdown").find(">a").removeClass("opened");	
			$(this).closest(".group__dropdown").find(".dropdown__box").fadeOut(300);
			if ($(this).closest(".group__dropdown").hasClass("map__")) {
				$(this).closest(".group__dropdown").addClass('map__picked');
				$(this).closest('.group__dropdown').find(">a").attr("data-row" , $(this).attr("data-row"));
				$('.map__').each(function(index,elem){
					if (!$(elem).hasClass("map__picked")) {
						if ($(elem).find(">a").attr("data-row") == $('.map__picked>a').attr("data-row")) {
							$(elem).find(">a").attr("data-row" ,  $('.map__picked').attr("data-old"));
							if ($(elem).find(">a>p>span").length) {
								$(elem).find(">a>p>span").text($(elem).find(".dropdown__box ul li a[data-row="+  $(elem).find(">a").attr("data-row") +"]>span").text());
							} else{
								$(elem).find(">a>p").text($(elem).find(".dropdown__box ul li a[data-row="+  $(elem).find(">a").attr("data-row") +"]>span").text());
							}
						}
					}
				});
				$('.map__picked').removeClass('map__picked');
				$('.group__dropdown').attr("data-old" , "");
				let socialArray = [];
				$('.map__').each(function(index,elem){
					let currentText;
					let valueText;
					if ($(elem).find(">a>p>span").length) {
						currentText = $(elem).find(">a>p>span").text();
					} else{
						currentText = $(elem).find(">a>p").text();
					}

					if (currentText == "First name") {
						valueText = "Alex";
					}
					if (currentText == "Last name") {
						valueText = "Jackson";
					}
					if (currentText == "Company name") {
						valueText = "Apple";
					}

					socialArray.push({
						title:currentText,
						value:valueText
					});
				});
				let currentList = $(this).closest(".group__dropdown");
				$('.preview__box table').remove();
				let newTable = "<table>\
								 		<tr>\
								 			<th>"+ socialArray[0].title +"</th>\
								 			<th>"+ socialArray[1].title +"</th>\
								 			<th>"+ socialArray[2].title +"</th>\
								 		</tr>\
								 		<tr>\
								 			<td>"+ socialArray[0].value +"</td>\
								 			<td>"+ socialArray[1].value +"</td>\
								 			<td>"+ socialArray[2].value +"</td>\
								 		</tr>\
								 		<tr>\
								 			<td>"+ socialArray[0].value +"</td>\
								 			<td>"+ socialArray[1].value +"</td>\
								 			<td>"+ socialArray[2].value +"</td>\
								 		</tr>\
								 		<tr>\
								 			<td>"+ socialArray[0].value +"</td>\
								 			<td>"+ socialArray[1].value +"</td>\
								 			<td>"+ socialArray[2].value +"</td>\
								 		</tr>\
								 	</table>";

				$('.preview__box').append(newTable);		 
			}
		}
	});

	$(document).click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.group__dropdown').length) {
	  	$('.group__dropdown .dropdown__box').fadeOut(300);
	  	$('.group__dropdown>a').removeClass('opened');
	  }        
	});

	$(".modal__wrapper").click(function(event) { 
	  var $target = $(event.target);
	  if(!$target.closest('.modal__box').length) {
	  	$('.modal__wrapper').fadeOut(300);
	  	$('body,html').css("overflow-y" , "initial");
	  }        
	});





	 function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  return emailReg.test( $email );
	}
	if ($('.circle').length) {
		$('.circle').each(function(index,elem){
				$(elem).circleProgress({
			    value: $(elem).attr("data-value"),
			    size: $(elem).attr("data-size"),
			    startAngle:-89.5,
			    emptyFill:$(elem).attr("data-empty"),
			    lineCap:"round",
			    animation:false,
			    thickness:$(elem).attr("data-thickness"),
			    fill: $(elem).attr("data-color")
			  });
		});
	}



	$('.finder__search .finder__input>input').on("input" ,function(){
		$(this).closest('.finder__search').find(".error__message").fadeOut(300);
	});

	$('.finder__search').on("submit" ,function(e){
		e.preventDefault();
		let errors = 0;
		let currentForm = $(this);
		const firstName = $(currentForm).find(".first-name").val().toLowerCase();
		const lastName = $(currentForm).find(".last-name").val().toLowerCase();
		const domainName = $(currentForm).find(".company").val().toLowerCase();
		const controlHtml = '<div class="controls__"><a href="#" class="tooltip__float copy__button--email" data-tooltip="Copy"			data-copy="SOME COPIED TEXT"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.00955 4.08331H7.48785C7.79534 4.0833 8.06064 4.0833 8.27913 4.10115C8.50975 4.11999 8.73913 4.16159 8.95985 4.27405C9.28913 4.44183 9.55685 4.70955 9.72463 5.03883C9.83709 5.25955 9.87869 5.48893 9.89753 5.71955C9.91538 5.93804 9.91538 6.20331 9.91537 6.51081V10.9891C9.91538 11.2966 9.91538 11.5619 9.89753 11.7804C9.87869 12.011 9.83709 12.2404 9.72463 12.4611C9.55685 12.7904 9.28913 13.0581 8.95985 13.2259C8.73913 13.3384 8.50975 13.38 8.27913 13.3988C8.06064 13.4167 7.79539 13.4167 7.48791 13.4166H3.00956C2.70208 13.4167 2.43675 13.4167 2.21826 13.3988C1.98765 13.38 1.75827 13.3384 1.53755 13.2259C1.20826 13.0581 0.940547 12.7904 0.772769 12.4611C0.660306 12.2404 0.618705 12.011 0.599863 11.7804C0.582011 11.5619 0.582021 11.2966 0.582032 10.9891V6.51084C0.582021 6.20333 0.582011 5.93805 0.599863 5.71955C0.618705 5.48893 0.660306 5.25955 0.772769 5.03883C0.940547 4.70955 1.20826 4.44183 1.53755 4.27405C1.75827 4.16159 1.98765 4.11999 2.21826 4.10115C2.43676 4.0833 2.70205 4.0833 3.00955 4.08331Z" fill="#D1D1D6" /><path					d="M10.9879 0.583313H6.50955C6.20206 0.583304 5.93676 0.583295 5.71827 0.601147C5.48765 0.619989 5.25827 0.66159 5.03755 0.774053C4.70827 0.941832 4.44055 1.20955 4.27277 1.53883C4.16031 1.75955 4.11871 1.98893 4.09987 2.21955C4.08386 2.41542 4.08221 2.64889 4.08205 2.91666L7.51254 2.91665C7.79758 2.91659 8.10663 2.91651 8.37413 2.93837C8.6769 2.96311 9.0769 3.02433 9.4895 3.23456C10.0383 3.51419 10.4845 3.96038 10.7641 4.50919C10.9744 4.92179 11.0356 5.32179 11.0603 5.62456C11.0822 5.89207 11.0821 6.20112 11.082 6.48617L11.082 9.91663C11.3498 9.91647 11.5833 9.91482 11.7791 9.89882C12.0098 9.87997 12.2391 9.83837 12.4599 9.72591C12.7891 9.55813 13.0569 9.29042 13.2246 8.96113C13.3371 8.74041 13.3787 8.51103 13.3975 8.28042C13.4154 8.06193 13.4154 7.79667 13.4154 7.48919V3.01084C13.4154 2.70336 13.4154 2.43803 13.3975 2.21955C13.3787 1.98893 13.3371 1.75955 13.2246 1.53883C13.0569 1.20955 12.7891 0.941832 12.4599 0.774053C12.2391 0.66159 12.0098 0.619989 11.7791 0.601147C11.5606 0.583295 11.2953 0.583304 10.9879 0.583313Z"	fill="#D1D1D6" /></svg>	</a> <a href="#" class="tooltip__float" data-tooltip="Add to Leads"><svg width="16" height="16"	viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">	<path d="M13.3341 9.99998C13.3341 9.63179 13.0357 9.33331 12.6675 9.33331C12.2993 9.33331 12.0008 9.63179 12.0008 9.99998V11.3333H10.6675C10.2993 11.3333 10.0008 11.6318 10.0008 12C10.0008 12.3682 10.2993 12.6666 10.6675 12.6666H12.0008V14C12.0008 14.3682 12.2993 14.6666 12.6675 14.6666C13.0357 14.6666 13.3341 14.3682 13.3341 14V12.6666H14.6675C15.0357 12.6666 15.3341 12.3682 15.3341 12C15.3341 11.6318 15.0357 11.3333 14.6675 11.3333H13.3341V9.99998Z"	fill="#D1D1D6" /><path fill-rule="evenodd" clip-rule="evenodd"	d="M8.12147 9.44231C8.30964 9.53818 8.46262 9.69116 8.55849 9.87932C8.66054 10.0796 8.66757 10.2984 8.66749 10.5179C8.66749 10.5231 8.66748 10.5282 8.66748 10.5333C8.66748 11.5162 8.66713 12.4991 8.66749 13.4821C8.66752 13.5615 8.66755 13.6563 8.66073 13.7399C8.65282 13.8367 8.63252 13.9753 8.55849 14.1206C8.46262 14.3088 8.30964 14.4618 8.12147 14.5577C7.97618 14.6317 7.83752 14.652 7.74071 14.6599C7.65716 14.6667 7.56232 14.6667 7.48291 14.6667C5.60595 14.666 3.72899 14.666 1.85202 14.6667C1.77252 14.6667 1.67747 14.6667 1.59372 14.6598C1.49657 14.6519 1.35763 14.6314 1.21211 14.557C1.02371 14.4607 0.870331 14.3066 0.774872 14.1178C0.701338 13.9723 0.681396 13.8337 0.673817 13.7364C0.667305 13.6527 0.667775 13.5579 0.668167 13.4789C0.671604 12.7861 0.650949 12.0435 0.92122 11.391C1.25953 10.5743 1.90845 9.92536 2.72521 9.58705C3.06501 9.4463 3.42386 9.38792 3.82969 9.36023C4.22436 9.3333 4.7093 9.33331 5.31047 9.33331C6.03462 9.33331 6.75877 9.33358 7.48291 9.33331C7.70242 9.33322 7.9212 9.34026 8.12147 9.44231Z"	fill="#D1D1D6" /><path fill-rule="evenodd" clip-rule="evenodd"	d="M9.71619 1.94368C9.85434 1.60239 10.243 1.43771 10.5843 1.57586C11.8047 2.06985 12.6675 3.26669 12.6675 4.66665C12.6675 6.0666 11.8047 7.26344 10.5843 7.75743C10.243 7.89558 9.85434 7.73091 9.71619 7.38962C9.57804 7.04833 9.74272 6.65967 10.084 6.52152C10.8182 6.22432 11.3342 5.50494 11.3342 4.66665C11.3342 3.82835 10.8182 3.10897 10.084 2.81178C9.74272 2.67363 9.57804 2.28496 9.71619 1.94368Z"				fill="#D1D1D6" /><path fill-rule="evenodd" clip-rule="evenodd"				d="M3.00082 4.66665C3.00082 2.8257 4.4932 1.33331 6.33415 1.33331C8.1751 1.33331 9.66748 2.8257 9.66748 4.66665C9.66748 6.5076 8.1751 7.99998 6.33415 7.99998C4.4932 7.99998 3.00082 6.5076 3.00082 4.66665Z" fill="#D1D1D6" />	</svg>	</a></div>';
		$(this).find(".finder__input>input").each(function(index,elem){
			if ($(elem).val().length == 0) {
				errors++;
			}
		});
		if (errors != 0) {
			$(this).find('.error__message').fadeIn(300);
		}
		if (errors == 0) {
			$('.searching').fadeIn(300);
			$('.company__elem').css("display" ,'none');

			$.ajax({
				type: "get",
				url: 'http://167.235.254.95:8765/emailfinder/',
				data: {
					first_name: firstName,
					last_name: lastName,
					domain_name: domainName
				},
				success: function (result, status, xhr) {
					$('.searching').css("display" , "none");
					$('.company__elem').css("display" ,'block');
					// $('.company__elem .finder__list').append(
					// 	"<p>aaaaaaaaaaa <p>"
					// );
					$('.company__elem .finder__list').html("");
					$('.company__elem .finder__list').append(
						"<p>" +  result.output.length + " " + (result.output.length === 1 ? "email" : "emails") + " found<p>"
					);

					if(result.output.length > 0){
						result.output.forEach((context, index)=>{
							console.log(context.email);
							$('.company__elem .finder__list').append(
								'<div class="elem__finder">	<p><span class="tooltip__float" data-tooltip="Email verified."><img src="img/success.svg"			alt="success"></span>' + context.email + '</p>' + controlHtml
							);
						});			
						
					}					
				},
				error: function (xhr, status, error) {
					$('.searching').css("display" , "none");
					$('.company__elem').css("display" ,'block');
					$('.company__elem .finder__list').html(
						"<p>Not found <p>"
					);
				}
			});


			// setTimeout(function(){
			// 	// $('.searching').css("display" , "none");
			// 	// $('.company__elem').css("display" ,'block');
			// 	// if ($(currentForm).find(".name").val().toLowerCase() == "elon musk" && $(currentForm).find(".company").val().toLowerCase() == "tesla.com") {
			// 	// 	$('.company__elem').each(function(index,elem){
			// 	// 		// console.log(elem);
			// 	// 		if ($(elem).attr("data-name").toLowerCase() == $(currentForm).find(".name").val().toLowerCase() && $(elem).attr("data-company").toLowerCase() == $(currentForm).find(".company").val().toLowerCase()) {
			// 	// 			$(elem).fadeIn(300);
			// 	// 		}
			// 	// 	});
			// 	// }
			// 	// if ($(currentForm).find(".email__field").val().toLowerCase() == "test1@gmail.com") {
			// 	// 	$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
			// 	// }
			// 	// if ($(currentForm).find(".email__field").val().toLowerCase() == "test2@gmail.com") {
			// 	// 	$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
			// 	// }
			// }, 2000);
		}
	});


	$('.domain__verification .domain__field').on("input" ,function(){
		$(this).closest('.domain__verification').find(".error__message").fadeOut(300);
	});
	$('.domain__verification').on("submit" ,function(e){
		e.preventDefault();
		let errors = 0;
		let currentForm = $(this);
		let domainField = $(".domain__field").val();
		var domainPattern = /^(https?:\/\/)?((?:[a-z0-9-]+\.)+(?:com|net|org))(?:\/|$)/i
		if(!$(this).find('.domain__field').val().match(domainPattern) || $(this).find('.domain__field').val().length == 0 || $(this).find('.domain__field').val() == " " || $(this).find('.domain__field').val() == ""){
		 	$(this).find('.error__message').fadeIn(300);
			errors++;
		}
		if (errors == 0) {
			$('.searching').fadeIn(300);
			$('.domain__result').css("display" ,'none');


			$.ajax({
				type: "get",
				url: 'http://167.235.254.95:8765/domainsearch/',
				data: {					
					domain_name: domainName
				},
				success: function (result, status, xhr) {
					$('.searching').css("display" , "none");
					$('.domain__result').css("display" ,'block');
					
					$('.company__elem .finder__list').html("");
					$('.company__elem .finder__list').append(
						"<p>" +  result.output.length + " " + (result.output.length === 1 ? "email" : "emails") + " found<p>"
					);

					if(result.output.length > 0){
						result.output.forEach((context, index)=>{
							console.log(context.email);
							$('.company__elem .finder__list').append(
								'<div class="elem__finder">	<p><span class="tooltip__float" data-tooltip="Email verified."><img src="img/success.svg"			alt="success"></span>' + context.email + '</p>' + controlHtml
							);
						});			
						
					}					
				},
				error: function (xhr, status, error) {
					$('.searching').css("display" , "none");
					$('.company__elem').css("display" ,'block');
					$('.company__elem .finder__list').html(
						"<p>Not found <p>"
					);
				}
			});


			setTimeout(function(){
				$('.searching').css("display" , "none");
				$('.domain__result').css("display" ,'none');
				if ($(currentForm).find(".domain__field").val().toLowerCase() == "paypal.com") {
					$(".domain__result[data-domain='"+ $(currentForm).find(".domain__field").val() +"']").fadeIn(300)
				}
				// if ($(currentForm).find(".email__field").val().toLowerCase() == "test1@gmail.com") {
				// 	$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
				// }
				// if ($(currentForm).find(".email__field").val().toLowerCase() == "test2@gmail.com") {
				// 	$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
				// }
			}, 2000);
		}
	});

	$('.single__verification .email__field').on("input" ,function(){
		$(this).closest('.single__verification').find(".error__message").fadeOut(300);
	});
	$('.single__verification').on('submit' ,function(e){
		e.preventDefault();
		let errors = 0;
		let currentForm = $(this);
		if ($(this).find('.email__field').val().length == 0 || !validateEmail($(this).find(".email__field").val())) {
			$(this).find('.error__message').fadeIn(300);
			errors++;
		}

		if (errors == 0) {
			$('.searching').fadeIn(300);
			$('.email__result').css("display" ,'none');
			setTimeout(function(){
				$('.searching').css("display" , "none");
				$('.email__result').css("display" ,'none');
				if ($(currentForm).find(".email__field").val().toLowerCase() == "test@gmail.com") {
					$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
				}
				if ($(currentForm).find(".email__field").val().toLowerCase() == "test1@gmail.com") {
					$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
				}
				if ($(currentForm).find(".email__field").val().toLowerCase() == "test2@gmail.com") {
					$(".email__result[data-email='"+ $(currentForm).find(".email__field").val() +"']").fadeIn(300)
				}
			}, 2000);
		}
	});

	$('.side__box.history .head__history>a').on('click' , function(e){
		e.preventDefault();
		$(this).closest('.side__box').fadeOut(300);
		if ($('.side__box  .placeholder__wrapper').length) {
			setTimeout(function(){
				$(".side__box .placeholder__text>div").fadeIn(300);
				$('.side__box .placeholder__text').addClass('nonvisible');
				$('.side__box .placeholder__wrapper').fadeIn(300);
				$('.side__box  .list__campaigns').css("overflow-y" ,"hidden");
			}, 500);
		}
		if ($(window).width() < 1280) {
			$('.overlay__popup').fadeOut(300);
			$('body,html').css("overflow-y" ,"initial");
		}
	});


	$('.history__single').on("click" ,function(e){
		e.preventDefault();
		$('.side__box.history').fadeIn(300);
		if ($(window).width() < 1280) {
			$('.overlay__popup').fadeIn(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
	});
	$('.history__domain').on("click" ,function(e){
		e.preventDefault();
		$('.side__box.history').fadeIn(300);

		if ($(window).width() < 1280) {
			$('.overlay__popup').fadeIn(300);
			$('body,html').css("overflow-y" ,"hidden");
		}
		setTimeout(function(){
			removeBulk();
			removePlaceholderList();
			if ($('.side__box .list__campaigns').length) {
				$('.side__box  .list__campaigns').css("overflow-y" ,"auto");
			}
		},1000);
	});

	$('.menu__button>a').on("click" ,function(e){
		e.preventDefault();
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
			$('body,html').css("overflow-y" , "initial");
			$('.header__menu').css("top" ,"-100%");
		} else {
			$(this).addClass("active");
			$('body,html').css("overflow-y" , "hidden");
			$('.header__menu').css("top" ,"0px");
		}
	});

	$('.overlay').on('click' ,function(e){
		$('.settings__list .settings__menu').removeClass('active');
		$('.settings__list').css('left', '-190px');
		$("body,html").css("overflow-y" ,"initial");
		$('.overlay').fadeOut(300);
	});
	$('.settings__list .settings__menu').on("click" ,function(e){
		e.preventDefault();
		if ($(this).hasClass("active")) {
			$(this).removeClass('active');
			$('.settings__list').css('left', '-190px');
			$("body,html").css("overflow-y" ,"initial");
			$('.overlay').fadeOut(300);
		} else {
			$(this).addClass('active');
			$('.settings__list').css('left', '0px');
			$("body,html").css("overflow-y" ,"hidden");
			$('.overlay').fadeIn(300);
		}
	});

$(document).on("input", ".numeric", function() {
    this.value = this.value.replace(/\D/g,'');
});


	$('.settings__elem ul li a').on("click" ,function(e){
		e.preventDefault();
		if (!$(this).hasClass('active')) {
			$(this).closest('.settings__elem').find("a").removeClass('active');
			$(this).addClass("active");
			$('.settings__container').css("display" ,"none");
			$('.settings__container.' + $(this).attr("data-container")).fadeIn(300);
		}
	});


	$('.avatar__upload a').on("click" ,function(e){
		e.preventDefault();
		$(this).closest('.avatar__upload').find("input").click();
	})


});
