document.oncontextmenu = function(){return true;}; //запрет на выведение контекстного меню
document.ondragstart = function(){return false;}; //запрет на перетаскивание
document.onselectstart = function(){return false;}; //запрет на выделение элементов страницы
document.onkeydown = function(){return true;}; //запрет на нажатие кнопок на страницы

/*			//			*/

$(function(){

	$('a[href^="#"]').click(function (){ 
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $('body').animate( { scrollTop: destination }, 600 );
        $('html').animate( { scrollTop: destination }, 600 );
        return false;
		});
	});

/*			//			*/

$(document).ready(function() {
	$('.animated').hover(
     function() {
      $(this).addClass('rotateIn'); // Добавляем класс
     },
     function() {
      $(this).removeClass('rotateIn'); // Убираем класс
     }
    )})