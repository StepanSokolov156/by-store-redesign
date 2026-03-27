/////////////
$(window).on('load', function () {
    $('body').addClass('loaded_hiding');
    window.setTimeout(function () {
      $('body').addClass('loaded');
      $('body').removeClass('loaded_hiding');
    }, 500);
  });
    const btnUp = {
      el: document.querySelector('.btn-up'),
      scrolling: false,
      show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.remove('btn-up_hide');
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.add('btn-up_hide');
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          if (this.scrolling && scrollY > 0) {
            return;
          }
          this.scrolling = false;
          // если пользователь прокрутил страницу более чем на 200px
          if (scrollY > 400) {
            // сделаем кнопку .btn-up видимой
            this.show();
          } else {
            // иначе скроем кнопку .btn-up
            this.hide();
          }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
          this.scrolling = true;
          this.hide();
          // переместиться в верхнюю часть страницы
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        };
      }
    };
    btnUp.addEventListener();
/////////////

$(function(){
  // msFavoriter
  // https://github.com/TrywaR/msFavoriter
	// - Добавление или удаление избранных товаров
	$(document).on('click', '.msFavoriterToggle', function(){
		msProductId = $(this).parents('.ms2_form').find('[name="id"]').val();
		msFavoriterButton = $(this);

		$.post('/msFavoriter', {'id': msProductId}, function(){
			msFavoriterButton.toggleClass('_active_');
			msFavoriterCount();
		});

		return false;
	});

	// - Количество избранных товаров
	function msFavoriterCount(){
		$.post('/msFavoriter', {}, function(data){
			if (data > 0)
				$('#msFavoriter').show().find('strong').text(data);
			else
				$('#msFavoriter').hide();
		});
	}
	msFavoriterCount();
	// msFavoriter x
})

//451 lines old modal quick buy need change
$(function(){
    $(document).on('click','.btnQuickOrder',function(){
        msProductTitle=$(this).parents('.ms2_form').find('[name="title"]').val();
        msProductPrice=$(this).parents('.ms2_form').find('[name="price"]').val();
        $('.modal').css('display','block');
        $('.modal').find('[name="pagetitle"]').val(msProductTitle);
        $('.modal').find('[name="price"]').val(msProductPrice);
        $('.modal').find('[class="footer_price"]').html('Сумма: '+msProductPrice);
        $('.modal').find('[class="header_title"]').html(msProductTitle);
        return false;
    });
    $('.modal').on('click','.close',function(){
         $('.modal').css('display','none');
    });
    
});

$(function(){
    $(document).on('click','.feedbackBtn',function(){
         msProductTitle=$(this).parents('.ms2_form').find('[name="title"]').val();
        $('.modal__feedback').css('display','block');
        
        $('.modal__feedback').find('[name="pagetitle"]').val(msProductTitle);
        
        return false;
    });
    $('.modal__feedback').on('click','.close',function(){
         $('.modal__feedback').css('display','none');
    });
    
});
//var imgebanner=document.getElementsByClassName('image banner');
var image=document.getElementsByClassName('image');
var img = document.getElementsByTagName('img');
var msGallery= document.getElementById('msGallery');
var fotorama= document.getElementById('fotorama');
for(var i in img)
{
    img[i].oncontextmenu = function()
    {
        return false;
    };
}
for(var j in image)
{
    image[j].oncontextmenu = function()
    {
        return false;
    };
    
}
// fotorama.oncontextmenu = function()
//     {
//         return false;
//     };
// imgebanner.oncontextmenu = function()
//     {
//         return false;
//     };
// msGallery.oncontextmenu = function()
//     {
//         return false;
//     };
    




