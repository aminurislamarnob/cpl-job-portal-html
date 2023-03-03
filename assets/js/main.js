(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        //Animation on Scroll
        let wow = new WOW(
            {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
          }
          )
        wow.init();

        //Counter Up
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });


        //Menu Active
        // $(".main-menu").click(function(){
        //     $(".site-menu").toggleClass("active");
        // });

        // $(".menu-cross").click(function(){
        //     $(".site-menu").removeClass("active");
        // });

        // $(".header-icon span.ss-search").click(function(){
        //     $("input.search").toggleClass("active");
        // });

        //Mobile Menu Active
        if ( $(window).width() <= 991 ) {
            $('.side-nav').on('click', function() {
                $('.main-menu').toggleClass('active');
            });
            $('.mobile-logo i').on('click', function() {
                $('.main-menu').removeClass('active');
            });
        }


        //Filter Sidebar Active
          $('.job-filter-btn, .filter-active').on('click', function() {
              $('.job-filter').toggleClass('active-filter');
              $('.filter-active').toggleClass('active');
          });
          $('.filter-close').on('click', function() {
              $('.job-filter').removeClass('active-filter');
              $('.filter-active').removeClass('active');
          });

        //Datatable active
        $('.jsDataTable').DataTable(); 

        //Active dropify
        $('.dropify').dropify();

        //DateTime Picker
        $('.datepicker').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
        

        //Profile Tab Active hide
        $('.profile_step_one_btn').on('click', function(e){
            e.preventDefault();
            $('#profileStepOne').removeClass('active show');
            $('.profile_step_title_1').removeClass('active');
            $('#ProfileStepTwo, .profile_step_title_2').addClass('active show');
        });

        $('.profile_step_two_btn').on('click', function(e){
            e.preventDefault();
            $('#ProfileStepTwo').removeClass('active show');
            $('.profile_step_title_2').removeClass('active');
            $('#ProfileStepThree, .profile_step_title_3').addClass('active show');
        });

        $('.profile_step_three_btn').on('click', function(e){
            e.preventDefault();
            $('#ProfileStepThree').removeClass('active show');
            $('.profile_step_title_3').removeClass('active');
            $('#profileStepFour, .profile_step_title_4').addClass('active show');
        });

        $('.profile_step_two_prev').on('click', function(e){
            e.preventDefault();
            $('#ProfileStepTwo').removeClass('active show');
            $('.profile_step_title_2').removeClass('active');
            $('#profileStepOne, .profile_step_title_1').addClass('active show');
        });

        $('.profile_step_three_prev').on('click', function(e){
            e.preventDefault();
            $('#ProfileStepThree').removeClass('active show');
            $('.profile_step_title_3').removeClass('active');
            $('#ProfileStepTwo, .profile_step_title_2').addClass('active show');
        });

        $('.profile_step_four_prev').on('click', function(e){
            e.preventDefault();
            $('#profileStepFour').removeClass('active show');
            $('.profile_step_title_4').removeClass('active');
            $('#ProfileStepThree, .profile_step_title_3').addClass('active show');
        });



        /********************************
         |*********Show Hide Navigation While Scroll*******|
        *******************************/

        // ScrollNav();

        // $(window).scroll(function(){
        //     ScrollNav();
        // });
        // function ScrollNav(){
        //         if( $(window).scrollTop() > 50 ){

        //             $(".site-header").addClass("scrolling");

        //             //scroll to top
        //             $(".button-scroll").fadeIn('slow');

        //         }else{
        //             $(".site-header").removeClass("scrolling");

        //             //scroll to top
        //             $(".button-scroll").fadeOut('slow');
        //         }
        // }


    });




}(jQuery));	