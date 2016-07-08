//animation du texte intro façon geek
function changeText(cont1, cont2, speed, delai) {
    var Otext = cont1.text();
    var Ocontent = Otext.split("");
    var i = 0;

    function show() {
        if (i < Ocontent.length) {
            cont2.append(Ocontent[i]);
            i = i + 1;
        }
    }
    var Otimer = setInterval(show, speed);
}

//permet à la page d'accueil de prendre toute la place disponible
function fullHeight(className) {
    var height = $(window).height();
    $('.' + className).css({
        "height": height
    });
}

//animation ligne
function animationDiffereLigne(className, delai) {
    setTimeout(function() {
        $('.' + className).animate({
        width: "100%",
        opacity: "1"
    }, 2000);
    }, delai);
}

//permet de gerer les animations avec le delai de declenchement
//utilise la bibliothèque animate.css
//ajouter la class 'animated' dans le html
function animationDiffere(className, animationType, delai) {
    $('.' + className).css({
        'opacity': '0'
    });
    setTimeout(function() {
        $('.' + className).css({
            'opacity': '1'
        });
        $('.' + className).addClass(animationType);
    }, delai);
}

//choix de la class et du type d'animation
// l'opacité est reglé à zero par defaut pour l'effet d'apparition
function animation(className, animationType) {
    $('.' + className).css({
        'opacity': '0'
    });

    $('.' + className).bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            if (visiblePartY == 'both') {
                $(this).css({
                    'opacity': '1'
                });
                $(this).addClass(animationType);
            }
        }
    });
}

//lancement du module circle pour les compétences
function circle(className) {
        $('.' + className).circliful();
    }
    //animation du point d'interrogation
function pointInterrogation() {
    //var interrogationHeight = 20;
    $('.int1').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            if (visiblePartY == 'top') {
                //interrogationHeight = 200;
                $('.interrogation').animate({
                    height: '50px'
                }, 1500);
            }
        }
    });
}

//animation des réalisations au clic
function realisationAnimate() {
    $(".realisation-image").click(function() {
        $('.rea').css('display', 'none');
        $('.realisation-detail').css('display', 'none');
        //$('.realisation-image').css('opacity', '0.5');
        $(this).css('opacity', '1');
        //$('.realisation-detail').animate({opacity: 0});

        var divparent = $(this).parent();
        var classparent = divparent.attr('class');
        console.log('classparent : '+classparent);

        var numeroclassparent = classparent.charAt(37)+classparent.charAt(38);
        console.log('numeroclassparent : '+numeroclassparent);
        $("#rea-" + numeroclassparent).css("display", "block");
        var divgrandparent = $(divparent).parent();
        var detail = divgrandparent.nextAll('.realisation-detail-' + numeroclassparent);

        detail.css("display", "block");
        $('.rslides').addClass('fadeInLeft');
        $('.realisation-detail-text').addClass('fadeInRight');
        $('html,body').animate({
            scrollTop: $("#rea-" + numeroclassparent).offset().top
        }, 'slow');
        //detail.animate({opacity: 1});
    });
}

//effet hover sur les images de réalisations
function realisationHover() {
    $(".realisation-image").hover(
        function() {
            var divEnfantFond = $(this).children('.realisation-fond');
            var divEnfantTitre = $(this).children('.realisation-titre');
            var divenfantimage = $(this).children('.img-responsive');

            //divEnfantTitre.addClass('rotateInDownLeft');
            divEnfantFond.css('display', 'block');
            divEnfantFond.addClass('rotateInDownLeft');
            divEnfantTitre.css("display", "block");
            divenfantimage.css("opacity", "0.5");
        },
        function() {
            var divEnfantFond = $(this).children('.realisation-fond');
            var divEnfantTitre = $(this).children('.realisation-titre');
            var divenfantimage = $(this).children('.img-responsive');
            //divenfanttitre.removeClass('fadeInUp');

            divEnfantFond.css('display', 'none');
            divEnfantTitre.css("display", "none");
            divenfantimage.css("opacity", "1");
        }
    );
}

//gestion des slides au niveau des réalisations
//http://responsiveslides.com/
function responsiveSlides() {
    $(".rslides").responsiveSlides();
}

//srcoll Spy selon le tuto de grafikart >> http://www.grafikart.fr/tutoriels/jquery/scroll-one-page-491
function scrollSpy() {
    var sections = [];
    var id = false;
    var $navbar = $('.nav');

    $('a', $navbar).each(function() {
        sections.push($($(this).attr('href')));
    });

    $(window).scroll(function(e) {
        var scrollTop = $(this).scrollTop() + ($(window).height() / 2);
        for (var i in sections) {
            var section = sections[i];
            if (scrollTop > section.offset().top) {
                id = section.attr('id');
            }
        }
        $('a', $navbar).removeClass('current');
        $('a[href="#' + id + '"]', $navbar).addClass('current');
    });
}


//menu hamburger issu de ce codepen >> http://codepen.io/robojack/pen/KewHx
$(function() {

    $(".menu-trigger").click(function() {
        $(this).toggleClass('active');
        $('.menu-mobile').toggleClass('menu-mobile-hide');
    });

    $(".menu-mobile a").click(function() {
        $('.menu-mobile').removeClass('menu-mobile-active');
        $('.menu-mobile').addClass('menu-mobile-hide');
        $('.menu-trigger').removeClass('active');
    });

});

//smoth srcolling >> https://css-tricks.com/snippets/jquery/smooth-scrolling/
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery("#status").delay(1000).fadeOut();
        // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(1000).fadeOut("slow");
    animationDiffere('home-title-name', 'slideInUp', '3000');
    changeText($(".devText"), $(".dev"), 150);
    
    $( '.type-text' ).each( function() {
                var items = $( this ).attr( 'title' ) + ';' + $( this ).text();
                $( this ).empty().attr( 'title', '' ).teletype( {
                    text: $.map( items.split( ';' ), $.trim ),
                    typeDelay: 10,
                    backDelay: 20,
                    cursor: '|', 
                    delay: 3000,
                    preserve: true,
                    prefix: '',
                    loop: 1,
                    humanise: true
                } );
            } );
            
    fullHeight('home-title');
    
    $(window).resize(function(){
       fullHeight('home-title');
   });
   
    scrollSpy();
    responsiveSlides();
    realisationHover();
    realisationAnimate();
    pointInterrogation();
    changeText($(".devText"), $(".dev"), 150); //  150 = the Delay time in milliseconds between strokes.
    $('myStat').unbind('inview');
    circle('myStat');
    
    animationDiffere('home-title-name', 'slideInUp', '3000');
    animation('sub-title', 'flipInX');
    animation('pres-animated', 'fadeInUp');
    animation('pres-animated-text-right', 'slideInRight');
    animation('pres-animated-text-left', 'slideInLeft');
    //animation('bref-picto', 'rotateIn');
    //animation('realisation-ligne', 'fadeInUp');
    animationDiffereLigne('title-separation', '2500');
            
            
});