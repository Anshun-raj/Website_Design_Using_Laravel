<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contact.css"/>
</head>
<body>
    <header>
       @include('header')
    </header>
       <div class="contact">
         <h2>Contact Us</h2>
         <div class="contactInfo">
         <form method="post" action="formSubmit">
          {{@csrf_field()}}
          <fieldset>
            <input type="text" name="name" placeholder="enter your name" />
            <input type="email" name="email" placeholder="enter your email" />
            <input
              type="number"
              placeholder="enter your age"
              max="50"
              min="18"
              name="age"
            />
            <input type="number" name="num" placeholder="enter your number"/>
            <input type="text" name="msg" placeholder="message" />
            <button type="submit">Submit</button>
          </fieldset>
        </form>
         </div>
       </div>
</body>
</html>