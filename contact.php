<!DOCTYPE HTML>
<html>

<head>
  <title>Discuss</title>
  <!-- <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" /> -->
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Get<span class="logo_colour">Skilled</span></a></h1>
          <h2>Simply Better</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="examples.php">Examples</a></li>
          <li><a href="page.php">A Page</a></li>
           <li><a href="another_page.php">Another Page</a></li>
          <li class="selected"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3 >Latest News</h3>
        <h4 id="t[0]"></h4>
        <h5 id="pt[0]"></h5>
        <p id="d[0]"><br /><a href="#">Read more</a></p>
        <p></p>
        <h4 id="t[1]"></h4>
        <h5 id="pt[1]"></h5>
        <p id="d[1]"><br /><a href="#">Read More</a></p>
        <h3>Useful Links</h3>
       <ul>
          <li ><a href="" id="li[0]">More Info</a></li>
          <li ><a href="" id="li[1]">More Info</a></li>
          <li><a href=""  id="li[2]">More Info</a></li>
          <li ><a href="" id="li[3]">More info</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#  .php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Email Us </h1>
        <p>Cast your opinion down</p>
        <form action="messageme.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p> 
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
        <p><br /><br />NOTE: By replying to this topic you agree to the terms and conditions of BOOST</p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Boost | <a href="">Sports</a> | <a href="">Technologies</a> | <a href="">Politics</a>
    </div>
  </div>
  <script  src="./jquery-3.2.1.min.js"></script>
  <script>
      $(document).ready(function(){
        $.ajax(
        {
            url: "https://newsapi.org/v2/top-headlines?sources=the-times-of-india&apiKey=1c0136b9c55641e5a28546c1a97226e1",
        
            type:'GET',
            dataType:'JSON',
            success:function(res){
                console.log(res.articles);
                // for (var i = 0; i < 6; i++) {
                  
                                   
                
                var article = res.articles;
                 // console.log(des);
                 // console.log(titles);
                 // console.log(article[0].author);
                 // var h2=document.getElementById('h1');
                 //                 h2.appendChild(document.createTextNode(author));
                  var titles=article[0].title;
                  var des=article[0].description;
                  document.getElementById('t[0]').innerHTML=titles;
                 // document.getElementById('a[0]').innerHTML=article[0].author;
                  document.getElementById('d[0]').innerHTML=des;
                 // document.getElementById('im[0]').innerHTML=article[0].urlToImage;
                  document.getElementById('pt[0]').innerHTML=article[0].publishedAt;
                 

            }

        });
 });

</script>



<script>
      $(document).ready(function(){
        $.ajax(
        {
            url: "https://newsapi.org/v2/top-headlines?sources=usa-today&apiKey=1c0136b9c55641e5a28546c1a97226e1",
        
            type:'GET',
            dataType:'JSON',
            success:function(res){
                console.log(res.articles);
                // for (var i = 0; i < 6; i++) {
                  
                                   
                
                var article = res.articles;
                 // console.log(des);
                 // console.log(titles);
                 // console.log(article[0].author);
                 // var h2=document.getElementById('h1');
                 //                 h2.appendChild(document.createTextNode(author));
                  var titles=article[0].title;
                   var des=article[0].description;
                 // document.getElementById('t[0]').innerHTML=titles;
                 // document.getElementById('a[0]').innerHTML=article[0].author;
                 // document.getElementById('d[0]').innerHTML=des;
                 // document.getElementById('im[0]').innerHTML=article[0].urlToImage;
                 // document.getElementById('pt[0]').innerHTML=article[0].publishedAt;
                 document.getElementById('li[0]').innerHTML=article[0].url;

                 //  var titles=article[1].title;
                 //  var des=article[1].description;
                  document.getElementById('t[1]').innerHTML=titles;
                 // document.getElementById('a[1]').innerHTML=article[1].author;
                  document.getElementById('d[1]').innerHTML=des;
                 // document.getElementById('im[1]').innerHTML=article[1].urlToImage;
                  document.getElementById('pt[1]').innerHTML=article[1].publishedAt;
                  document.getElementById('li[1]').innerHTML=article[1].url;

                 // var titles=article[2].title;
                 //  var des=article[2].description;
                 // document.getElementById('t[2]').innerHTML=titles;
                 // document.getElementById('a[2]').innerHTML=article[2].author;
                 // document.getElementById('d[2]').innerHTML=des;
                 // document.getElementById('im[2]').innerHTML=article[2].urlToImage;
                 // document.getElementById('pt[2]').innerHTML=article[2].publishedAt;
                 document.getElementById('li[2]').innerHTML=article[2].url;

                 //  var titles=article[3].title;
                 //  var des=article[3].description;
                 // document.getElementById('t[3]').innerHTML=titles;
                 // document.getElementById('a[3]').innerHTML=article[3].author;
                 // document.getElementById('d[3]').innerHTML=des;
                 // document.getElementById('im[3]').innerHTML=article[3].urlToImage;
                 // document.getElementById('pt[3]').innerHTML=article[3].publishedAt;
                 document.getElementById('li[3]').innerHTML=article[3].url;

                 // var titles=article[4].title;
                 //  var des=article[4].description;
                 // document.getElementById('t[4]').innerHTML=titles;
                 // document.getElementById('a[4]').innerHTML=article[4].author;
                 // document.getElementById('d[4]').innerHTML=des;
                 // document.getElementById('im[4]').innerHTML=article[4].urlToImage;
                 // document.getElementById('pt[4]').innerHTML=article[4].publishedAt;
                 //document.getElementById('li[4]').innerHTML=article[4].url;

                 //  var titles=article[5].title;
                 //  var des=article[5].description;
                 // document.getElementById('t[5]').innerHTML=titles;
                 // document.getElementById('a[5]').innerHTML=article[5].author;
                 // document.getElementById('d[5]').innerHTML=des;
                 // document.getElementById('im[5]').innerHTML=article[5].urlToImage;
                 // document.getElementById('pt[5]').innerHTML=article[5].publishedAt;
                 //document.getElementById('li[5]').innerHTML=article[5].url;

            }

        });
 });

</script>






</body>
</html>
