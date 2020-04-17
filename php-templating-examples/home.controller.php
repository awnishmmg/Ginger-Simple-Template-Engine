<?php 



  $data =  array(
            'title' => 'Welcome | Home',
            'pagename' => 'home',
            'content' => 'false',            
        ); 
# use render function to load the Templates 
// render() 1.@parameter : public html page name with extension [Mendatory] 
// render() 2.@parameter : to bind the data in the template file [optional] 
 render('home.html',$data);
 
 ?>