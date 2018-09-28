        $(document).ready(function() {
            HeighT = $(document).height();
            //console.log(HeighT);
            $('.flag').css({
                "background-color": "yellow",
                "opacity": "0.6",
                "width": "100%",
                "height": HeighT + 'px'
            });
            var str = window.location.href.split('=');
           
            var fname = str[1].replace('+', '_');
			var fnamesubmit = fname.slice(0, -2);
			if(fnamesubmit)
			{
            $('.namediv').html('By - ' + fnamesubmit.replace('+','_'));
			}
			
		    $('.watsapp-btn1').append('<a href="' + 'whatsapp://send?text=Touch this blue line , Enter your name and see magic 👉 https://festivalscripts.blogspot.com/?name='+fname + '">' 
			+ '<img width="25px" height="25px" src="https://i.imgur.com/DgPtPRi.png" /> Click Here to Share on Whatsapp<img width="25px" height="25px" src="https://i.imgur.com/DgPtPRi.png" />'  + '</a>');
        });

        $(document).ready(function() 
        {
            var docHeight = $(window).height();			
            var footerHeight = $('#footer').height();
            var footerTop = $('#footer').position().top + footerHeight;
            if (footerTop < docHeight) 
			{
                $('#footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
            }
        });
