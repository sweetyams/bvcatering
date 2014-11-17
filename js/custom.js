$( document ).ready(function() {

	// ADD MOBILE CLASS IF LESS THAN 514 px
    var $window = $(window);

    $window.resize(function resize(){
        if ($window.width() < 900) {
            return $('body').addClass('hidden');
        }

        $('body').removeClass('hidden');
    }).trigger('resize');



	$('.sidebar .close').on("click", function(){
		if(!$('body').hasClass('closed')){
			$('body').addClass('closed');
			$('.close .icon').removeClass('icon-menu-close').addClass('icon-menu-open');
			$('.close .title').html('Open Menu');
		} else {
			$('body').removeClass('closed');
			$('.close .icon').removeClass('icon-menu-open').addClass('icon-menu-close');
			$('.close .title').html('Close Menu');
		}
		
	});

	
	$('.address .edit').on('click', function(){
		if(!$(this).parent('.address').hasClass('active')){
			$(this).parent('.address').addClass('active');
			$(this).fadeOut();

		}
	});
	$('.address .cancel').on('click', function(){
		if($(this).closest('.address').hasClass('active')){
			$(this).closest('.address').removeClass('active');
			$(this).closest('.address').children('.edit').fadeIn();
		}
	});

	// MODALS
	$('.modal').on('click', function(){
		$('.overlay').addClass('active').fadeIn();
		// if($(this).hasClass('loadcontent')){
		// 	$('.overlay').addClass('order');
		// 	event.preventDefault();
		// 	var hash = $(this).attr('href');
		//     loadPage(hash);
		// }
    if($(this).hasClass('checkout')){
      $('.overlay').addClass('checkout-visible');
    }
	});

	// LOAD URLHASH
	// $(document).ready(function () {
	//     checkURL();
	//     $('ul li a').click(function (e) {
	//         checkURL(this.hash);
	//     });
	//     default_content = $('#pageContent').html();
	//     setInterval("checkURL()", 250);
	// });
	// var lasturl = "";

	function loadPage(url) {
	    $('#loadcontent .contentpanel').load(url);
	}   

	$('.overlay').on('click', function(){
		$('.overlay').removeClass('active order checkout-visible').fadeOut();
		$('.tabcontent').removeClass('front');
	});

	$('.showpanel').click(function(event){
	    event.stopPropagation();
	});

	$('.contentpanel').click(function(event){
	    event.stopPropagation();
	});

  $('.inactive').click(function(event){
      event.stopPropagation();
      return false;
  });

	function tabHeight(target, active){
		var setHeight = $(active).height() + 40;
		$(target).height(setHeight);
	}

	function changeTab(target,tab){
		$(target).prev('.nav').children().children().removeClass('current');
		$('a[href^="'+tab+'"]').addClass('current');
		$(target).children().removeClass('front').end().find($(tab)).addClass('front');

		tabHeight(target, tab);
	}
	
	tabHeight('#sign','#signin');
	tabHeight('#alltabs','#signtab');
  tabHeight('#payment','#credit');
	
	$('.changetab').on('click', function(){
		var $this = $(this),
			target = $this.data('target'),
			tab = $this.attr("href"),
			subtarget = $this.data('subtarget'),
			subtab = $this.data('subtab');

		if(target,tab){
			if(subtarget){
				changeTab(subtarget,subtab);
				changeTab(target,tab);
			} else{
				changeTab(target,tab);
			}

			changeTab(target,tab);
		} else{
			console.log('error');
		}

		return false;
	});

  $('.date').pickadate({
    // weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true,
    min: new Date(),
    close: 'cancel',
    onSet: function( event ) {
        if ( event.select ) {
            $( '.set-date' ).html(this.get());
        }
    }
  })
  $('.time').pickatime({
    clear: 'cancel',
    min: [10,00],
    max: [20,0],
    interval: 15,
    onSet: function( event ) {
        if ( event.select ) {
            $( '.set-time' ).html(this.get());
        }
    }
  })


  if ($('#cheque').attr('data-amount')){
    var cheque = $('#cheque'),
    amount = cheque.attr('data-amount'),
    splitamount = amount.split("."),
    dollars = numinwrd(splitamount[0]),
    cents = splitamount[1];
    cheque.find('.amount span').html(amount);
    cheque.find('.cost').html(dollars);
    cheque.find('.cent').html(cents);
  }

  $('td.quantity input').wrap('<div></div>').after('<span class="icon-minus"></span><span class="icon-plus"></span>');

  // UPDATE CART - RUNS THROUGH ALL TOTAL PRICE
  function updateCart(){
    var sum = 0;
    $('.totalprice span').each(function(){
        sum += Number($(this).html());
    });
    $('.subtotal').html('$'+sum.toFixed(2));

    var taxes = $('.taxesval').html();
    var taxtotal = sum * taxes;
    $('.taxes').html('$'+taxtotal.toFixed(2));
    var carttotal = sum + taxtotal;
    $('.carttotal .price span').html(carttotal.toFixed(2));

  }

  // UPDATE TOTAL VALUE - takes input
  function updateTotal(input){
    var value = input.val(),
    parent = input.closest('tr'),
    price = parent.find('.price span').html(),
    totalprice = parent.find('.totalprice span'),
    totalvalue = price * value;
    totalprice.html(totalvalue.toFixed(2));
  }

  // ON CLICK - or +
  $(".quantity span[class^='icon-']").on('click', function(){
    var direction = $(this).attr("class");
    var input = $(this).parent().find("input");
    var oldValue = input.val();
    if(direction.slice(5) === 'plus'){
      if(oldValue == ''){
        newVal = 1;
      } else {
        var newVal = parseFloat(oldValue) + 1;
      }
    } else {
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      } 
    }
    input.val(newVal);
    updateTotal(input);
    updateCart();
  });

  // UPDATE ON CHANGE INPUT
  $('.quantity input').on('input', function() { 
    var input = $(this)
    updateTotal(input);
    updateCart();
  });

  // SET INITIAL VALUES
  $('.cart').find('.quantity input').each (function() {
    updateTotal($(this))
  });
  updateCart();

  // PREVENT TEXT SELECT ON SPAN DOUBLE CLICK
  $('.quantity span').mousedown(function(e){ e.preventDefault(); })

// the selector will match all input controls of type :checkbox
// and attach a click event handler 
// $("input:checkbox").on('click', function() {
//   // in the handler, 'this' refers to the box clicked on
//   var $box = $(this);
//   if ($box.is(":checked")) {
//     // the name of the box is retrieved using the .attr() method
//     // as it is assumed and expected to be immutable
//     var group = "input:checkbox[name='" + $box.attr("name") + "']";
//     // the checked state of the group/box on the other hand will change
//     // and the current value is retrieved using .prop() method
//     $(group).prop("checked", false);
//     $box.prop("checked", true);
//   } else {
//     $box.prop("checked", false);
//   }
// });

})(jQuery);