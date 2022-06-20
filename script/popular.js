var active = 'faqcont_1';
        $(document).ready(function(){
            $('.faqmenu').click(function(e){
                e.preventDefault();
                var id = $(this).attr('href');
                $('.faqmenu').removeClass('faqactiv');
                $(this).addClass('faqactiv');
                
                $('#'+active).addClass('faqnone');
                $('#'+id).removeClass('faqnone');
                active = id;
            })
        })