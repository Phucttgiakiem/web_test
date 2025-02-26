import $ from "jquery";
import "slick-carousel";

$(document).ready(function(){
    $('.your-carousel').slick({
        slidesToShow: 3,       // Hiển thị 3 slide
        slidesToScroll: 1,     // Scroll 1 slide mỗi lần
        infinite: true,        // Cho phép cuộn vô hạn
        dots: true,            // Hiển thị dấu chấm điều hướng
        centerMode: false,     // Đảm bảo không có khoảng trắng giữa các slide
        variableWidth: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    })
});
