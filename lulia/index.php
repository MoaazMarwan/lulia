<?php
include"files/header.php";?><!DOCTYPE html><html><head><meta name="viewport"content="width=device-width, initial-scale=1.0,shrink-to-fit=no"><title>Lulia Store</title><script src="https://code.jquery.com/jquery-3.6.0.js"!important></script><link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"type="text/css"><link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous"><link href="css/jquery.bxslider.css"rel="stylesheet"type="text/css"><script src="https://kit.fontawesome.com/a076d05399.js"crossorigin="anonymous"></script><link href="css/style.css"rel="stylesheet"type="text/css"></head><body><div id="wrapper"><!--==home-slider==--><div class="container"><div id="slider"><ul class="bxslider"><li><img src="images/soap1.jpg"></li><li><img src="images/soap2.jpg"></li><li><img src="images/soap3.jpg"></li><li><img src="images/soap4.jpg"></li><li><img src="images/soap5.jpg"></li></ul></div></div><!--==END home-slider==--><!--==category-section==--><div class="container"><div class="wcontent"><h2 class="Product">Products</h2><ul><?php get_pro();?><?php get_pro_cat();?><div class="c"></div></ul></div></div><!--==END category-section==--><?php include"files/footer.php"?><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-2.2.4.js"
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
crossorigin="anonymous"></script><script src="js/jquery.bxslider.min.js"></script><script src="js/my.js"></script></body></html>