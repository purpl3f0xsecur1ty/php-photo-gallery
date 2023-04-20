<!doctype html>
<html lang="da">
 <head>
   <title><?php echo $html_title; ?></title>
   <style type="text/css">
   * {margin:0;padding:0;}
   p {color:#fff;}
   body {background:rgb(50,50,50);overflow-y:scroll;}
   article,footer,header {position:relative;width:100%;margin:0px auto;max-width:2000px;min-width:400px;}
   article div, header div {position:absolute;font-weight:bold;border-radius:10px;}
   article {overflow:hidden;}
   article div {font-size:3em;}
   header div {top:1.5em;left:3em;z-index:2;}
   header div li {margin-left:-42px;max-width:7em;}
   header div a {font-family:Arial, sans-serif;padding:0.7em;display:block;text-align:center;}
   a {text-decoration:none;}
   article div a {display:block;width:100%;height:100%;padding:0.5em;overflow:hidden;box-sizing:border-box;}
   article div a:visited, header div a:visited {color:rgb(200,200,200);}
   article div a:hover, header div a:hover {color:rgb(200,200,200);background:rgba(170,170,170,0.6);color:#fff;}
   article div a:active, header div a:active {color:rgb(200,200,200);}
   header div a {color:#fff !important;}
   article img {max-width:90%;margin-left:auto;margin-right:auto;display:block;}
   #next {top:7.5em;right:0.5%;}
   #previous {top:7.5em;left:0.5%;}
   ul,ol {list-style-type:none;}
   ul {display:flex;flex-wrap:wrap;flex-basis:200px;justify-content:center;}
   footer li img {width:100%;border-radius:10px;}
   footer li img:hover {filter:grayscale(65%);}
   footer li {padding:0.5em;width:200px;}
   footer li div {height:220px;overflow:hidden;border-radius:10px;}

  .button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #6817ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #b99fd3;
  }
  .button:hover {
  border-color:#fff;
  background:#782fff;
  color:#e4e4e4;
  cursor:pointer;
  }
  .button:active {
  background-color: #782fff;
  box-shadow: 0 5px rgb(179, 138, 255);
  transform: translateY(4px);
  }

  .button:focus {outline:none;}

  .button2 {
  padding: 15px 25px;
  font-size: 14px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #6817ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #b99fd3;
  }
  .button2:hover {
  border-color:#fff;
  background:#782fff;
  color:#e4e4e4;
  cursor:pointer;
  }
  .button2:active {
  background-color: #782fff;
  box-shadow: 0 5px rgb(179, 138, 255);
  transform: translateY(4px);
  }

  .button2:focus {outline:none;}

   </style>
 </head>
 <body>
  <header><?php echo $html_action_controls; ?></header>
  <article>
    <?php echo $html_content; ?>
  </article>
  <footer>
  <?php echo $category_items; ?>
  </footer>
 </body>
</html>
