<?php 
// Plugin Name: Contact Us Plugin

function Contact_Us_Plugin(){
    $content = '';
    $content .= '<h2 class=""> Contact us  </h2>';
    $content .= '<form method="post" action="http://localhost/EcommerceWordpress/wordpress/thank-you/">';
    $content .='<Label for="Name">Name :</label> </br>';
    $content .= '<input type="text" name="name" id="Name" class="form-control w-100" placeholder="Enter Your Name"/> </br>' ;
    $content .='<Label for="Email">Email :</label> </br>';
    $content .= '<input type="text" name="email" id="Email" class="form-control w-100" placeholder="Enter Your Email"/> </br>' ;
    $content .='<Label for="Comments">Questions or Comments :</label> </br>';
    $content .='<textarea type="text" name="Comments" id="Comments" class="form-control w-100" placeholder="Enter Your Comments"/> </textarea> </br>' ;
    $content .= '<input type="submit" name="Submit_ContactUs" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION" />';
    $content .= '</form>';
    return $content;
}
add_shortcode('Contact_Us','Contact_Us_Plugin');

// capture information by email submit in wp head 
function example_form_capture(){
    if(isset($_POST['Submit_ContactUs'])){
        // echo "<pre>";print_r($_POST);echo"<pre>";
        $name = sanitize_text_field($_POST['name']);
        $Email = sanitize_text_field($_POST['email']);
        $comments = sanitize_text_field($_POST['Comments']);
        $to ='hind@gmail.com';
        $subject ='test form submission';
        $message =''.$name.' _ '.$Email.' _ '.$comments;
        // wp_mail($to,$subject,$message);
        if(function_exists('wp_mail')){
            wp_mail($to,$subject,$message);
        }else{
            print_r('tfooo');
        }
    }

}
add_action('wp_head','example_form_capture');

?>