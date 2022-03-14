
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->


<?php

$heading = get_field( 'heading' );
$paragraph = get_field( 'paragraph' );
$button = get_field( 'button' );
$image = get_field( 'image' );
$readmore=get_field('readmore');
$body=get_field('body');
$size='full';
$field = get_field_object('image_position');
$value = $field['value'];
$label = $field['choices'][ $value ];
// echo($label);exit();
$show_image=get_field('image_position');
// print_r($show_image);exit();
if($label==='Left')
{
    echo '<div class="how-section1 portfolio-item">';
                  echo  '<div class="row">';
                        echo '<div class="col-md-6 how-img">';
                        if( !empty( $image ) )
                        echo wp_get_attachment_image( $image['ID'], 'thumbnail', null, array( 'class' => 'portfolio-logo' ) );
                        echo '</div>';
                        echo '<div class="col-md-6 content">';
                        if( !empty( $heading ) )
                            echo '<h4 class="portfolio-heading" style="color:#0E0066;">'.$heading.'</h4>';
                            if( !empty( $paragraph ) )
                       echo  '<p class="text-muted portfolio-paragraph" style="font-size:16px;color:#4A4A4A;">'.$paragraph.'<span id="dots"></span><a id="myBtn" onClick="myFunction()">Read More</a><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>'.'</p>';
                       if( !empty( $button ) )
                       echo '<button class="btn">'.$button.'</button>';
                       echo '</div>';
                    echo '</div>';
                   
                
                echo '</div>';

}
else
{
    echo '<div class="how-section1  portfolio-item">';
                  echo  '<div class="row section2" style="background-color:#0AEEFF;">';
                       
                        echo '<div class="col-md-6 content">';
                        if( !empty( $heading ) )
                            echo '<h4 class="portfolio-heading" style="color:white;">'.$heading.'</h4>';
                            if( !empty( $paragraph ) )
                       echo  '<p class="text-muted portfolio-paragraph" style="color:white !important;font-size:16px;">'.$paragraph.'<span id="dots"></span><a id="myBtn" onClick="myFunction()">Read More</a><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>'.'</p>';
                       if( !empty( $button ) )
                       echo '<button class="btn" style="font-size:18px;">'.$button.'</button>';
                       echo '</div>';
                       echo '<div class="col-md-6 how-img">';
                       if( !empty( $image ) )
                       echo wp_get_attachment_image( $image['ID'], 'thumbnail', null, array( 'class' => 'portfolio-logo' ) );
                       echo '</div>';
                    echo '</div>';
                   
                
                echo '</div>';
}
// '<a class="readmore" href="https://google.com" style="color:#6455FF;">Read More</a>'.

// echo '<div class="portfolio-item">';
//      if( !empty( $heading ) )
//      echo '<h3 class="portfolio-heading">' . $heading . '</h3>';    
// 	if( !empty( $paragraph ) )
// 		echo '<p class="portfolio-paragraph">' . $paragraph . '</p>';
// 	if( !empty( $button ) )
// 		echo '<div class="portfolio-button">' . $button . '</div>';
//         if( !empty( $image ) )
// 		echo wp_get_attachment_image( $image['ID'], 'thumbnail', null, array( 'class' => 'portfolio-logo alignleft rounded-circle img-fluid' ) );
// echo '</div>';




?>
 <style type="text/css">
         .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 .row 
{
    background: #F5F5F5;
    margin-top:-15%;
    padding: 10%;

}
.how-section1 h4
{
    font-family: 'Roboto Condensed', sans-serif;
}
.how-section1 p 
{
    font-family: 'Roboto Condensed', sans-serif;
    color:#4A4A4A;
}
.section2{
    margin-top:-15%;
    padding: 10%;
}
.section2 h4
{
    color:white;
    font-family: 'Roboto Condensed', sans-serif;
}
.section2 p
{
    color:white;
    font-family: 'Roboto Condensed', sans-serif;
}
.section2 #myBtn
{
    color:white;
}
.section2 .btn 
{
    background-color:#6455FF;
    transition: all 0.5s ease;
  transform: scale(1);
}
.section2 .btn:hover
{
    cursor: pointer;
  transform: scale(1.25);

}
.how-section1 h4{
    color: black;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 80%;
}
.btn 
{
    background-color:#00FFFF;
    transition: all 0.5s ease;
  transform: scale(1);
}
.btn:hover
{
    cursor: pointer;
  transform: scale(1.25);

}
.content 
{
    margin-top:-6%;
}
#myBtn
{
    color:#6455FF;
    text-decoration: underline;
}
#more {display: none;}
@media only screen and (max-width: 600px) {
    #more 
    {
        display:inline;
    }
    #myBtn
{
    color:#6455FF;
    text-decoration: underline;
    display:none;
}
}
</style>
<!-- Javascript Code  -->
<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  btnText.onclick=function(){
        btnText.style.display="none";
    }
  if (dots.style.display === "none") {
   
        btnText.style.display="none";
    dots.style.display = "inline";
    moreText.style.display = "none";
   
  } else {
   
    btnText.style.display="none";
    dots.style.display = "none";
    moreText.style.display = "inline";
   
  }
}
</script>
