//country switcher//
// $(function () {
//     $("#dropBox").on("change", function () {
//         switch ($(this).val()) {
//             case "1":
//                 $("#divText").html("info@netrika.in");
//                 break;
//             case "2":
//                 $("#divText").html("srilanka@netrika.in");
//                 break;
//             case "3":
//                 $("#divText").html("dubai@netrika.in");
//                 break;
//             case "4":
//                 $("#divText").html("singapore@netrika.in");
//                 break;
//         }
//     });
// });


$('#in').click( function() {
    $("#divText").html("<i class='fa fa-envelope-o' aria-hidden='true'></i><span id='divText'>info@netrika.com</span>");
    $(".headmain").html("India");

});

$('#sri').click( function() {
    $("#divText").html("<i class='fa fa-envelope-o' aria-hidden='true'></i><span id='divText'>srilanka@netrika.com</span>");
    $(".headmain").text("Sri Lanka");
});

$('#uae').click( function() {
    $("#divText").html("<i class='fa fa-envelope-o' aria-hidden='true'></i><span id='divText'>dubai@netrika.com</span>");
    $(".headmain").text("UAE");

});

$('#sing').click( function() {
    $("#divText").html("<i class='fa fa-envelope-o' aria-hidden='true'></i><span id='divText'>singapore@netrika.com</span>");
    $(".headmain").text("Singapore");

});


// Add slideDown animation to Bootstrap dropdown when expanding.
// $('.dropdown').on('show.bs.dropdown', function() {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
// });
//
// // Add slideUp animation to Bootstrap dropdown when collapsing.
// $('.dropdown').on('hide.bs.dropdown', function() {
//     $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
// });

$(' .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp()
});


//video player//
var videoPlayButton,
    videoWrapper = document.getElementsByClassName('video-wrapper')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
        renderVideoPlayButton: function () {
            if (videoWrapper.contains(video)) {
                this.formatVideoPlayButton();
                video.classList.add('has-media-controls-hidden');
                videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0];
                videoPlayButton.addEventListener('click', this.hideVideoPlayButton);
            }
        },

        formatVideoPlayButton: function () {
            videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fde428"/>\
                </svg>\
            ');
        },

        hideVideoPlayButton: function () {
            video.play();
            videoPlayButton.classList.add('is-hidden');
            video.classList.remove('has-media-controls-hidden');
            video.setAttribute('controls', 'controls');
        } };


videoMethods.renderVideoPlayButton();

//mobile sidebar//

function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//search//
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}

//Header fixed//

    $(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if(scroll >= 100){
                $('.main-nav, #menu-bar').addClass("white").css({"fill": "#000"});
            }
            else{
                $('.main-nav, #menu-bar').removeClass("white").css({"fill": "#fff"});
            }

        });

    });

